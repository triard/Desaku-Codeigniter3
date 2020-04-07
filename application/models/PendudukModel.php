<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PendudukModel extends CI_Model
{

    private $_pengaduan = "pengaduan";

    public function tambahPengaduan()
    {
        $data = array(
            "perihal" => $this->input->post('perihal', true),
            "nik_pengadu" => $this->input->post('nik', true),
            "isi" => $this->input->post('isi', true)


        );
        $this->db->insert('pengaduan', $data);
    }


    public function getPengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan as p');
        $this->db->join('penduduk', 'p.nik_pengadu = penduduk.nik');
        return $this->db->get()->result_array();
    }

    public function getPengaduanId($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan as p');
        $this->db->join('penduduk', 'p.nik_pengadu = penduduk.nik');
        return $this->db->get_where($this->_pengaduan, ['p.id' => $id])->row_array();
    }

    

}

/* End of file PendudukModel.php */
