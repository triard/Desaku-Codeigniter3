<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PendudukModel');
        $this->load->model('SuratModel');
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

    
	public function pengaduan_detail($id)
	{
		$data['title'] = "Desaku | Pengaduan Detail";
		$data['pengaduanDetail'] = $this->PendudukModel->getPengaduanId($id);
		$this->load->view('admin/pengaduan_detail', $data);
	}

}

/* End of file Pengaduan.php */
