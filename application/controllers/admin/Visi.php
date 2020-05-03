<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("visi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Desaku|| Visi dan Misi';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $data["visi"] = $this->visi_model->getAll();
        $this->load->view("admin/visi_list", $data);
    }

    public function add()
    {
        $data['title'] = 'Desaku|| Visi dan Misi';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $visi = $this->visi_model;
        $validation = $this->form_validation;
        $validation->set_rules($visi->rules());

        if ($validation->run()) {
            $visi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/visi_new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/visi');
        $data['title'] = 'Desaku|| Visi dan Misi';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $visi = $this->visi_model;
        $validation = $this->form_validation;
        $validation->set_rules($visi->rules());

        if ($validation->run()) {
            $visi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["visi"] = $visi->getById($id);
        if (!$data["visi"]) show_404();

        $this->load->view("admin/visi_edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->visi_model->delete($id)) {
            redirect(site_url('admin/visi'));
        }
    }
}
