<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://api.kawalcorona.com";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('url');
    }

	public function index()
	{
     $data['corona'] = json_decode($this->curl->simple_get($this->API.'/indonesia'));
        $data['jatim'] = json_decode($this->curl->simple_get($this->API.'/indonesia/provinsi'));
       // $data['jatim']=$list['attributes'];


     //   var_dump($data);die;
        $this->load->view('welcome_message',$data);
	}
}
