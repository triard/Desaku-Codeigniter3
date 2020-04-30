<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('agenda_model');
		$this->load->model('struktur_model');
		$this->load->model('visi_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = "Sejarah Desa || Desaku";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/sejarah_desa.php', $data);
	}

	public function wilayah()
	{
		$data['title'] = "Desaku | Wilayah Desa";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/wilayah_desa', $data);
	}

	public function visi()
	{
		$data['title'] = "Desaku | Visi, Misi, dan Program Kerja";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$data['visi'] = $this->visi_model->get();
		$this->load->view('users/visi_dan_misi', $data);
	}

	public function struktur()
	{
		$data['title'] = "Desaku | Struktur Organisasi";
		$data["struktur"] = $this->struktur_model->getAll();
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/struktur_organisasi', $data);
	}

	public function data_wilayah()
	{
		$data['title'] = "Desaku | Data WIlayah Administartif";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/data_wilayah', $data);
	}

	public function data_pendidikan()
	{
		$data['title'] = "Desaku | Data Pendidikan";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/data_pendidikan', $data);
	}

	public function data_pekerjaan()
	{
		$data['title'] = "Desaku | Data Pekerjaan";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/data_pekerjaan', $data);
	}
	public function data_agama()
	{
		$data['title'] = "Desaku | Data Agama";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/data_agama', $data);
	}
	public function data_sex()
	{
		$data['title'] = "Desaku | Data Jenis Kelamin";
		$data['agenda'] = $this->agenda_model->get_agenda();
		$this->load->view('users/data_sex', $data);
	}
}
