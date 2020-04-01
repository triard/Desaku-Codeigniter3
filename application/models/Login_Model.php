<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{


    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    public function login_penduduk($username, $password)
    {
        $this->db->select('*');
        $this->db->from('penduduk_login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
    
    /* End of file Login_Model.php */
