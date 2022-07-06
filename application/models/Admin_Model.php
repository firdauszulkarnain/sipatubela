<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function hapus_pengguna()
    {
        $id_user = $this->input->post('id_user');
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
}
