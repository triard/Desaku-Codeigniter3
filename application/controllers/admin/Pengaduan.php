<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PendudukModel');
        $this->load->library('session');

        // if($this->session->userdata('evel')!="Admin"){
        //   redirect('login','refresh');            
        // }
    }
    public function index()
    {
        $data['title'] = "Daftar Pengaduan";
        $data['pengaduan'] = $this->PendudukModel->getPengaduan();
        $this->load->view('admin/pengaduan', $data);
    }
}

/* End of file Pengaduan.php */
