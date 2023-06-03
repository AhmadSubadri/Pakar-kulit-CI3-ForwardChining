<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_penyakit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'm_login');
        $this->load->model('Penyakit_model', 'm_penyakit');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('administrator/login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_penyakit->index()
        ];
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/content/data_penyakit', $data);
        $this->load->view('admin/partials/footer', $data);
    }

    public function insert()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_penyakit->rules());
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/partials/head');
                $this->load->view('admin/content/data_penyakit_add');
                $this->load->view('admin/partials/footer');
            } else {
                $data = [
                    'kode_penyakit' => $this->input->post('kode_penyakit'),
                    'nama_penyakit' => $this->input->post('nama_penyakit'),
                    'penjelasan' => $this->input->post('penjelasan'),
                    'gejala' => $this->input->post('gejala'),
                    'penanganan' => $this->input->post('penanganan')
                ];
                $this->m_penyakit->insert($data);
                $this->session->set_flashdata('msg', "Insert data penyakit Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('data-penyakit');
            }
        } else {
            $this->load->view('admin/partials/head');
            $this->load->view('admin/content/data_penyakit_add');
            $this->load->view('admin/partials/footer');
        }
    }

    public function edit($id)
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_penyakit->rules());
            if ($this->form_validation->run() == FALSE) {
                $data1 = [
                    'data' => $this->m_penyakit->get_data($id)
                ];
                $this->load->view('admin/partials/head', $data1);
                $this->load->view('admin/content/data_penyakit_edit', $data1);
                $this->load->view('admin/partials/footer', $data1);
            } else {
                $data = [
                    'kode_penyakit' => $this->input->post('kode_penyakit'),
                    'nama_penyakit' => $this->input->post('nama_penyakit'),
                    'penjelasan' => $this->input->post('penjelasan'),
                    'gejala' => $this->input->post('gejala'),
                    'penanganan' => $this->input->post('penanganan')
                ];
                $this->m_penyakit->update($data, $id);
                $this->session->set_flashdata('msg', "Update data penyakit Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('data-penyakit');
            }
        } else {
            $data1 = [
                'data' => $this->m_penyakit->get_data($id)
            ];
            $this->load->view('admin/partials/head', $data1);
            $this->load->view('admin/content/data_penyakit_edit', $data1);
            $this->load->view('admin/partials/footer', $data1);
        }
    }

    public function delete($id)
    {
        $this->session->set_flashdata('msg', "Delete data penyakit Success!.");
        $this->session->set_flashdata('msg_class', 'alert-danger');
        $this->m_penyakit->delete($id);
        redirect('data-penyakit');
    }
}
