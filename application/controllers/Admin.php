<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        redirect('admin/dashboard');
    }

    public function dashboard()
    {
        // $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Dashboard';
        $this->template->load('template/admin_template', 'admin/dashboard', $data);
    }
}
