<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		if($this->session->userdata('jenis_user')!="Penduduk"){
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$data['title'] = "Desaku | Beranda";
		$this->load->view('usersLogin/index', $data);

	}

	public function surat_online_view()
	{
		$data['title'] = "Desaku | Surat Online";
		$this->load->view('usersLogin/surat_online.php', $data);

	}

	public function surat_online_add_data()
	{
		$data['title'] = "Desaku | Surat Online tambah data";
		$this->load->view('usersLogin/surat_online_add_data.php', $data);

	}

	public function pengaduan(){
		$data['title'] = "Desaku | Pengaduan";
		$this->load->view('usersLogin/pengaduan', $data);
	}
}