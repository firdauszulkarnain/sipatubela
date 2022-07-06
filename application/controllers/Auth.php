<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login Aptubela';
        if ($this->session->userdata('admin')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username Tidak Boleh Kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password Tidak Boleh Kosong']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login', $data);
        } else {
            $admin = $this->db->get_where('admin', ['username' => $this->input->post('username')])->row_array();
            if ($admin != NULL) {
                $this->_login();
            } else {
                $this->_login_user();
            }
        }
    }

    private function _login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user' => $user['username']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan', 'Login Aplikasi');
                redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password Salah');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username Belum Terdaftar');
            redirect('auth/login');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'admin' => $admin['username']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan', 'Login Aplikasi');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password Salah');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username Belum Terdaftar');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        if ($this->session->userdata('user')) {
            $this->session->unset_userdata('user');
        } elseif ($this->session->unset_userdata('admin')) {
            $this->session->unset_userdata('admin');
        }

        $this->session->set_flashdata('pesan', 'Logout Aplikasi');
        redirect('auth/login');
    }


    public function register()
    {
        if ($this->session->userdata('user')) {
            redirect('user/dashboard');
        }
        $data['title'] = 'Register Aptubela';
        // Form Validation
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', ['required' => 'Username Tidak Boleh Kosong',  'is_unique' => "Username Telah Digunakan"]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email Tidak Boleh Kosong',
            'valid_email' => "Email Tidak Valid",
            'is_unique' => "Email Telah Digunakan"
        ]);

        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'required' => 'Password Tidak Boleh Kosong',
                'min_length' => 'Password Kurang Dari 6 Karakter',
                'matches' => 'Password Tidak Sama'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]',
            [
                'required' => 'Konfirmasi Password Tidak Boleh Kosong',
                'matches' => 'Konfirmasi Password Tidak Sama'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register', $data);
        } else {
            $this->Auth_Model->register();
            $this->session->set_flashdata('pesan', 'Berhasil Register Akun');
            redirect('auth/login');
        }
    }
}
