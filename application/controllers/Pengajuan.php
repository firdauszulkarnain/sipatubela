<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function data()
    {
        $data['title'] = 'Data Pribadi';
        $this->template->load('template/user_template', 'user/data_pribadi', $data);
    }

    public function lampiran()
    {
        $data['title'] = 'Data Pengajuan';
        $this->template->load('template/user_template', 'user/pengajuan', $data);
    }
}
