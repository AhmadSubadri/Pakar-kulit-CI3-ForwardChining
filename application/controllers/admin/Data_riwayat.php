<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_riwayat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'm_login');
        $this->load->model('Riwayat_model', 'm_riwayat');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('administrator/login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_riwayat->index()
        ];
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/content/data_riwayat', $data);
        $this->load->view('admin/partials/footer', $data);
    }
}
