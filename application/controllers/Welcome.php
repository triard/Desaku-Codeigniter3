<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com";
<<<<<<< HEAD
        $this->load->model('agenda_model');
        $this->load->model('ArtikelModel');
=======
		$this->load->model('agenda_model');
		$this->load->model('artikel_model');
>>>>>>> cdb2737a41216a715d88e5743fa512336f7dff27
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Beranda|| Desaku';
        $data['agenda'] = $this->agenda_model->get_agenda();
<<<<<<< HEAD
        $data['artikel'] = $this->ArtikelModel->getArtikel();
        $data['corona'] = json_decode($this->curl->simple_get($this->API . '/indonesia'));
        $this->load->view('welcome_message', $data);
    }

    public function detail($id)
    {
        $data['detail'] = $this->ArtikelModel->getById($id);
        $this->load->view('artikel/detail', $data);
    }








    // if($this->input->post('keyword')){
    //     $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
    // }   

    // public function tambah(){
    //     $data['title'] = 'Insert Mahasiswa';
    //     $mahasiswa = $this->mahasiswa_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($mahasiswa->rules());

    //     if ($validation->run()) {
    //         $mahasiswa->tambahDatamhs();
    //         $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
    //     }
    //     $this->load->view('template/header', $data);
    //     $this->load->view('mahasiswa/tambah', $data);
    //     $this->load->view('template/footer');    
    //     }

    //     public function delete($id){
    //         $this->mahasiswa_model->hapusdatamhs($id);
    //         $this->session->set_flashdata('success','Data berhasil dihapus');

    //         redirect('mahasiswa','refresh');

    //     }
    // public function detail($id=null){
    //     $data['title'] = 'Detail Mahasiswa';
    //     $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswabyid($id);
    //     $this->load->view('template/header', $data);
    //     $this->load->view('mahasiswa/detail', $data);
    //     $this->load->view('template/footer');
    // }
    // public function edit($id = null){
    //     $data['title'] = 'Edit Mahasiswa';
    //     $data['jurusan']=['informatika','kimia','mesin'];
    //     $data['mahasiswa']=$this->mahasiswa_model->getMahasiswabyid($id);

    //     $mahasiswa = $this->mahasiswa_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($mahasiswa->rules());

    //     if ($validation->run()) {
    //         $mahasiswa->update();
    //         $this->session->set_flashdata('success', 'Data Berhasil disimpan');
    //         redirect('mahasiswa', 'refresh');
    //     }
    //     $this->load->view('template/header', $data);
    //     $this->load->view("mahasiswa/edit", $data);
    //     $this->load->view('template/footer');
    // }
=======
		$data['corona'] = json_decode($this->curl->simple_get($this->API . '/indonesia'));
		$data['artikel'] = $this->artikel_model->get_agenda();
        $this->load->view('welcome_message', $data);
    }
>>>>>>> cdb2737a41216a715d88e5743fa512336f7dff27
}
