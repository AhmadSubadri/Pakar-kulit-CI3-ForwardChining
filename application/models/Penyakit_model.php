<?php

class Penyakit_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kode_penyakit',
                'label' => 'Kode Penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_penyakit',
                'label' => 'Nama Penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'penjelasan',
                'label' => 'Penjelasan',
                'rules' => 'required'
            ],
            [
                'field' => 'gejala',
                'label' => 'Gejala',
                'rules' => 'required'
            ],
            [
                'field' => 'penanganan',
                'label' => 'Penanganan',
                'rules' => 'required'
            ],
        ];
    }

    public function index()
    {
        $this->db->select('*')->from('tb_penyakit');
        $query = $this->db->get();
        return $query;
    }

    public function get_data($id)
    {
        $this->db->select('*')->from('tb_penyakit')->where('id_penyakit', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_penyakit', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_penyakit', ['id_penyakit' => $id]);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_penyakit', $data, ['id_penyakit' => $id]);
    }
}
