<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratModel extends CI_Model
{

    private $_surat = "surat";
 
    
	  public function rules()
      {
          return [
              [
                  'field' => 'status',
                  'label' => 'status',
                  'rules' => 'required'
              ]
          ];
      }
  

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

    public function getSurat()
    {
        return $this->db->get('surat')->result_array();
    }


    public function getSuratId($id)
    {
        return $this->db->get_where($this->_surat, ['id' => $id])->row_array();
    }

    public function updateStatusSurat(){
        $post = $this->input->post();
        $this->id    = $post["id"];
        $this->status=$post["status"];
        $this->db->update($this->_surat, $this, array('id'=>$post['id']));
    }

    
}

/* End of file PendudukModel.php */
