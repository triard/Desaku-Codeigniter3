<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratModel extends CI_Model
{

    public function tambahSurat()
    {
        $data = array(
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "no_telp" => $this->input->post('no_telp', true),
            "category" => $this->input->post('category', true),
            "isi" => $this->input->post('isi', true)


        );
        $this->db->insert('surat', $data);
    }

    public function getNameSurat()
    {
        $this->db->where('nama', $this->session->userdata('user'));
        $this->db->order_by('id', 'desc');
        return $this->db->get('surat')->result_array();
    }

    public function geSurat()
    {
        return $this->db->get('surat')->result_array();
    }
}

/* End of file PendudukModel.php */
