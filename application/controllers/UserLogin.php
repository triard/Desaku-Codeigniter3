<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {

	public function index()
	{
		$data['title'] = "Desaku | Surat Online";
		$this->load->view('users/surat_online.php', $data);
	}

	public function pengaduan(){
		$data['title'] = "Desaku | Pengaduan";
		$this->load->view('users/pengaduan', $data);
	}
}