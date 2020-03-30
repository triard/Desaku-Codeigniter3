<?php
Class Kontak extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://api.kawalcorona.com";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }


    function index(){
        $data['corona'] = json_decode($this->curl->simple_get($this->API.'/indonesia'));
        $this->load->view('welcome_message',$data);
    }

}