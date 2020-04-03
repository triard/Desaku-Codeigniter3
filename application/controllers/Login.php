<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_model');
	}


	public function index()
	{
		if ($this->form_validation->run() == FALSE) {
		$data['title'] = "Login Admin | Desa Trate";
		$this->load->view('login/index', $data);
		} else {
			$this->index();
		}
	}


	public function proses_login()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));

		$cek_login = $this->login_model->login($username, $password);

		if ($cek_login) 
		{
			foreach ($cek_login as $row) 
			{
				$this->session->set_userdata('user', $row->username);
				$this->session->set_userdata('jenis_user', $row->jenis_user);
			}

			if ($this->session->userdata('jenis_user') == 'Admin') 
			{
				redirect('admin/Overview');
			} else if ($this->session->userdata('jenis_user') == 'sekretaris')
			 {
				redirect('sekretaris');
			} else if ($this->session->userdata('jenis_user') == 'Penduduk') 
			{
				redirect('UserLogin/index');
			}
		} else 
		{
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect('login','refresh');
		}
	}

	public function proses_login_penduduk()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));

		$cek_login = $this->login_model->login_penduduk($username, $password);

		if ($cek_login) 
		{
			foreach ($cek_login as $row) 
			{
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('jenis_user', $row->jenis_user);
			}
			if ($this->session->userdata('jenis_user') == 'Penduduk') 
			{
				redirect('UserLogin/index');
			}
		} else 
		{
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect('/','refresh');
		}
	}

	public function logout()
	{
	  $this->session->userdata('Admin');
	  $this->session->sess_destroy();
	  redirect('Welcome', 'refresh');
	}
  

	public function logoutPenduduk()
	{
	  $this->session->userdata('Penduduk');
	  $this->session->sess_destroy();
	  redirect('Welcome', 'refresh');
	}

	public function buatAkunPenduduk(){
		
	}
}