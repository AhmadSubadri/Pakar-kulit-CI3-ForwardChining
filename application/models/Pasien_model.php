<?php

class Pasien_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('*')->from('tb_user');
        $query = $this->db->get();
        return $query;
    }
}
