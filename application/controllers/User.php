<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = "Desaku | Sejarah Desa";
		$this->load->view('users/sejarah_desa.php', $data);
	}

	public function wilayah(){
		$data['title'] = "Desaku | Wilayah Desa";
		$this->load->view('users/wilayah_desa', $data);
	}

	public function visi(){
		$data['title'] = "Desaku | Visi, Misi, dan Program Kerja";
		$this->load->view('users/visi_dan_misi', $data);
	}

	public function struktur(){
		$data['title'] = "Desaku | Struktur Organisasi";
		$this->load->view('users/struktur_organisasi', $data);
	}

	public function data_wilayah(){
		$data['title'] = "Desaku | Data WIlayah Administartif";
		$this->load->view('users/data_wilayah', $data);
	}

	public function data_pendidikan(){
		$data['title'] = "Desaku | Data Pendidikan";
		$this->load->view('users/data_pendidikan',$data);
	}
	
	public function data_pekerjaan(){
		$data['title'] = "Desaku | Data Pekerjaan";
		$this->load->view('users/data_pekerjaan',$data);
	}
	public function data_agama(){
		$data['title'] = "Desaku | Data Agama";
		$this->load->view('users/data_agama',$data);
	}
	public function data_sex(){
		$data['title'] = "Desaku | Data Jenis Kelamin";
		$this->load->view('users/data_sex',$data);
	}

	

}