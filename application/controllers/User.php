<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user')) {
            redirect('auth/login');
        }
    }


    public function index()
    {
        redirect('user/dashboard');
    }
    public function dashboard()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Dashboard';
        $this->template->load('template/user_template', 'user/dashboard', $data);
    }
}
