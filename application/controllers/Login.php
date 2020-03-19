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
		// $this->form_validation->set_rules('username', 'username', 'trim|required');
		// $this->form_validation->set_rules('password', 'password', 'trim|required');
		// if ($this->form_validation->run() == FALSE) {
		$data['title'] = "Login Admin | Desa Trate";
		$this->load->view('login/index', $data);
		// } else {
		// 	$this->login();
		// }
	}

	// public function login()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');

	// 	$user = $this->db->get_where('user', ['username' => $username])->row_array();

	// 	if ($user) {
	// 		if ($password == $user['password']) {
	// 			redirect('user');
	// 		} else {
	// 			redirect('login');
	// 		}
	// 	} else {
	// 		echo "<script type='text/javascript'>alert('username atau password salah');</script>";
	// 		redirect('login');
	// 	}
	// }

	public function proses_login()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));

		$cek_login = $this->login_model->login($username, $password);

		if ($cek_login) {
			foreach ($cek_login as $row) {
				# code...
				$this->session->set_userdata('user', $row->username);
				$this->session->set_userdata('jenis_user', $row->jenis_user);
			}

			if ($this->session->userdata('jenis_user') == 'Admin') {
				# code...
				redirect('user');
			} else if ($this->session->userdata('jenis_user') == 'sekretaris') {
				redirect('sekretaris');
			} else if ($this->session->userdata('jenis_user') == 'penduduk') {
				redirect('penduduk');
			}
		} else {
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect('login');
			//redirect('login/index','refresh');
		}
	}
}
