<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PendudukModel extends CI_Model
{

    public function tambahPengaduan()
    {
        $data = array(
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "isi" => $this->input->post('isi', true)


        );
        $this->db->insert('pengaduan', $data);
    }

    public function getPengaduan()
    {
        return $this->db->get('pengaduan')->result_array();
    }
}

/* End of file PendudukModel.php */
