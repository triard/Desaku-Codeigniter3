<?php

<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function index()
    {
    }
}

/* End of file Artikel.php */
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("artikel_model");
		if ($this->session->userdata('jenis_user') != "Admin") {
            redirect('Login', 'refresh');
        }
    }

    public function index()
    {
		$data['title'] = "Desaku | Artikel";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
        $data["artikel"] = $this->artikel_model->getAll();
        $this->load->view("admin/artikel_list", $data);
	}

	public function artikel_detail($id)
	{
		$data['title'] = "Desaku | Penduduk Detail";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$data['artikel'] = $this->artikel_model->getById($id);
		$this->load->view('admin/artikel_detail', $data);
	}
	

    public function add()
    {
		$data['title'] = "Desaku | Artikel";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
        $product = $this->artikel_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/artikel_new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/artikel');
		$data['title'] = "Desaku | Artikel";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
        $artikel = $this->artikel_model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $artikel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["artikel"] = $artikel->getById($id);
        if (!$data["artikel"]) show_404();
        
        $this->load->view("admin/artikel_edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->artikel_model->delete($id)) {
            redirect(site_url('admin/artikel'));
        }
    }
}
>>>>>>> cdb2737a41216a715d88e5743fa512336f7dff27
