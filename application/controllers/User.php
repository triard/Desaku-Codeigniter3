<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('users/sejarah_desa.php');
	}

	public function wilayah(){
		$this->load->view('users/wilayah_desa');
	}

	public function visi(){
		$this->load->view('users/visi_dan_misi');
	}

	public function struktur(){
		$this->load->view('users/struktur_organisasi');
	}

}