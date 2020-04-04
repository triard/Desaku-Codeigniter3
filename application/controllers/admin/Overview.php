<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('');
		$this->load->library('form_validation');
		if($this->session->userdata('jenis_user')!="Admin"){
			redirect('Login','refresh');
		}
	}


	public function index()
	{
		$data['nama2'] = $this->session->userdata('user');
		$data['idUser'] = $this->session->userdata('id');
		$this->load->view('admin/overview', $data);
	}

	
}