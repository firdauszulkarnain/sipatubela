<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function data()
    {
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->db->get('data_pribadi')->result_array();
        $this->template->load('template/admin_template', 'admin/pengguna', $data);
    }
}
