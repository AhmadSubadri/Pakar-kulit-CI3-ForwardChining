<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Start extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Periksa_model', 'm_periksa');
    }

    public function index()
    {
        $data = [
            'gejala' => $this->m_periksa->Get_Gejala(),
        ];
        $this->load->view('partials/head', $data);
        $this->load->view('start', $data);
        $this->load->view('partials/footer', $data);
    }

    public function mulai()
    {
        $this->load->view('partials/head');
        $this->load->view('mulai');
        $this->load->view('partials/footer');
    }

    public function delete()
    {
        $dataId = $this->input->post('dataId');
        $this->m_periksa->deleteBiodata($dataId);
    }


    public function insert_one()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'umur' => $this->input->post('umur'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_kk' => $this->input->post('no_kk'),
            'telp' => $this->input->post('telp'),
            'alamat' => $this->input->post('alamat'),
            'uniq_id' => uniqid("biodata"),
        ];
        $this->session->set_userdata('biodata', $data);
        $dataId = $this->m_periksa->insertBiodata($data);
        $this->output->set_content_type('application/json')->set_output(json_encode(['dataId' => $dataId]));
    }

    public function insert_two()
    {
        // Ambil input gejala dari form
        $gejalaInput = $this->input->post('gejala');

        // Inisialisasi variabel untuk menyimpan hasil inferensi
        $result = array();

        // Inisialisasi variabel untuk menyimpan jumlah gejala pada setiap penyakit
        $gejalaCount = array();

        foreach ($gejalaInput as $kodeGejala) {
            // Ambil aturan berdasarkan kode gejala
            $aturan = $this->m_periksa->get_rule_by_kode_gejala($kodeGejala);

            foreach ($aturan as $rule) {
                $kodePenyakit = $rule['kode_penyakit'];

                // Tambahkan jumlah gejala pada penyakit jika belum ada
                if (!isset($gejalaCount[$kodePenyakit])) {
                    $gejalaCount[$kodePenyakit] = 1;
                } else {
                    $gejalaCount[$kodePenyakit] += 1;
                }

                // Cek apakah penyakit sudah ada dalam hasil inferensi
                if (isset($result[$kodePenyakit])) {
                    $result[$kodePenyakit]['count'] += 1;
                } else {
                    // Ambil data penyakit dari database
                    $penyakitData = $this->m_periksa->get_penyakit_by_kode($kodePenyakit);

                    // Tambahkan penyakit ke hasil inferensi
                    $result[$kodePenyakit] = array(
                        'kode_penyakit' => $penyakitData['kode_penyakit'],
                        'nama_penyakit' => $penyakitData['nama_penyakit'],
                        'penanganan' => $penyakitData['penanganan'],
                        'count' => 1
                    );
                }
            }
        }

        // Hitung persentase kemunculan penyakit
        foreach ($result as &$penyakit) {
            $kodePenyakit = $penyakit['kode_penyakit'];
            $totalGejalaCocok = $gejalaCount[$kodePenyakit];
            $totalGejalaPenyakit = $this->m_periksa->get_total_gejala_by_kode_penyakit($kodePenyakit);
            $persentase = ($totalGejalaCocok / $totalGejalaPenyakit) * 100;
            $penyakit['persentase'] = round($persentase, 2);

            // Jika hanya terdapat 1 gejala dan gejala tersebut ada di penyakit tersebut
            if (count($gejalaInput) == 1 && $totalGejalaCocok == 1) {
                $persentase = (1 / $totalGejalaPenyakit) * 100;
                $penyakit['persentase'] = round($persentase, 2);
            }
        }

        // Urutkan hasil berdasarkan persentase secara descending
        usort($result, function ($a, $b) {
            return $b['persentase'] - $a['persentase'];
        });

        $biodata = $this->session->userdata('biodata');
        date_default_timezone_set('Asia/Jakarta');
        $riwayatJawabanData = array(
            'waktu' => date('Y-m-d H:i:s'),
            'jawaban' => implode(' ', $gejalaInput),
            'persen' => $result[0]['persentase'],
            'id_user' => $biodata['uniq_id'],
            'penyakit' => $result[0]['nama_penyakit'] // Tambahkan nama penyakit
        );
        // Periksa apakah data jawaban sudah ada sebelumnya
        $isDuplicate = $this->db->where($riwayatJawabanData)->get('riwayat_jawaban')->num_rows() > 0;

        if (!$isDuplicate) {
            $this->db->insert('riwayat_jawaban', $riwayatJawabanData);
        }

        // Ambil nama gejala yang sudah dipilih
        $namaGejala = array();
        foreach ($gejalaInput as $kodeGejala) {
            // Ambil data gejala dari database
            $gejalaData = $this->m_periksa->get_gejala_by_kode($kodeGejala);
            $namaGejala[] = $gejalaData['gejala'];
        }

        $totalGejalaPenyakit = array();
        foreach ($result as &$penyakit) {
            $kodePenyakit = $penyakit['kode_penyakit'];
            $totalGejalaPenyakit[$kodePenyakit] = $this->m_periksa->get_total_gejala_by_kode_penyakit($kodePenyakit);
        }

        $data = [
            'biodata' => $biodata,
            'gejala' => $gejalaInput,
            'nama_gejala' => $namaGejala,
            'result' => $result,
            'total_gejala_penyakit' => $totalGejalaPenyakit,
        ];
        $this->load->view('hasil_diagnosa', $data);
    }
}
