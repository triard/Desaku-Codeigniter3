<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('');
		$this->load->model('SuratModel');
		$this->load->model('PendudukModel');
		$this->load->model('agenda_model');
		$this->load->model('PendudukModel');
		$this->load->library('form_validation');
		if($this->session->userdata('jenis_user')!="Admin"){
			redirect('Login','refresh');
		}
	}


	public function index()
	{
		$data['nama2'] = $this->session->userdata('user');
		$data['idUser'] = $this->session->userdata('id');
		$data['surat'] =  $this->SuratModel->getJumlahSurat();
		$data['pengaduan'] =  $this->PendudukModel->getJumlahPengaduan();
		$data['agenda'] =  $this->agenda_model->getJumlahAgenda();
		$data['penduduk'] =  $this->PendudukModel->getJumlahPenduduk();
		$this->load->view('admin/overview', $data);
	}

	
}