<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url', 'form', 'html');
    }


    public function bar_chart()
    {
    }


    public function index()
    {
        $query = $this->db->query("select count(id) as idp, jenis_kelamin as jenis , count(jenis_kelamin) as jk from penduduk GROUP BY jenis_kelamin");

        $record = $query->result();
        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->jenis;
            $data['data'][] = $row->jk;
        }
        $data['chart_data'] = json_encode($data);
        $this->load->view('chart.php', $data);
    }
}

/* End of file Chart.php */
