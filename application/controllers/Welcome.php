<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com";

        $this->load->model('agenda_model');
        $this->load->model('artikel_model');
    		$this->load->model('agenda_model');
		    $this->load->model('artikel_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Beranda|| Desaku';

    		$data['agenda'] = $this->agenda_model->get_agenda();
        $data['artikel'] = $this->ArtikelModel->getArtikel();
        $data['corona'] = json_decode($this->curl->simple_get($this->API . '/indonesia'));
        $this->load->view('welcome_message', $data);
    }

    public function detail($id)
    {
        $data['detail'] = $this->ArtikelModel->getById($id);
        $this->load->view('artikel/detail', $data);
    }
    		$data['corona'] = json_decode($this->curl->simple_get($this->API . '/indonesia'));
		    $data['artikel'] = $this->artikel_model->get_agenda();
        $data['corona'] = json_decode($this->curl->simple_get($this->API . '/indonesia'));
        $this->load->view('welcome_message', $data);
    }

public function detail($id)
    {
        $data['detail'] = $this->ArtikelModel->getById($id);
        $this->load->view('artikel/detail', $data);
    }
    
}
