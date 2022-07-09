<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // Cek Session Login Admin
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
    }
    // index redirect ke dashboard
    public function index()
    {
        redirect('admin/dashboard');
    }

    public function dashboard()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Dashboard';
        $this->template->load('template/admin_template', 'admin/dashboard', $data);
    }

    // admin profile
    public function profile()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Profil Admin';
        $this->template->load('template/admin_template', 'admin/profile/index', $data);
    }

    public function ganti_password()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $admin_id = $data['admin']['id_admin'];
        $admin_password = $data['admin']['password'];

        // form validation
        $this->form_validation->set_rules(
            'old_password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Lama Tidak Boleh Kosong',
            ]
        );

        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'required' => 'Password Baru Tidak Boleh Kosong',
                'matches' => 'Konfirmasi Password Tidak Sesuai',
                'min_length' => 'Minimal Password 6 Karakter'
            ]
        );

        $this->form_validation->set_rules('password2', 'Password', 'required|trim');
        $password = $this->input->post('old_password');
        if ($this->form_validation->run() == false) {
            redirect('admin/profile');
        } else {
            // cek password
            if (password_verify($password, $admin_password)) {
                $this->Auth_Model->update_password($admin_id);
                $this->session->set_flashdata('pesan', 'Update Password');
                redirect('admin/profile');
            } else {
                $this->session->set_flashdata('old_password', 'Password Lama Tidak Sesuai');
                redirect('admin/profile');
            }
        }
    }
}
