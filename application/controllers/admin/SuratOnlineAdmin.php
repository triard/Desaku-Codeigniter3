<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOnlineAdmin extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('');
		$this->load->library('form_validation');
		if($this->session->userdata('level')!="admin"){
			redirect('Login','refresh');
		}
	}


	public function index()
	{
		$this->load->view('admin/overview');
	}
}