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

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $idUser = $data['user']['id_user'];
        $data['title'] = 'User Profile';

        // FORM VALIDATION
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'trim|required|numeric',
            ['required' => 'NIP Harus Diisi', 'numeric' => 'NIP Hanya Angka']
        );
        $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required|trim', ['required' => 'Tempat Tanggal Lahir Tidak Boleh Kosong']);
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim', ['required' => 'Agama Tidak Boleh Kosong']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim', ['required' => 'Jabatan Tidak Boleh Kosong']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', ['required' => 'Alamat Tidak Boleh Kosong']);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim', ['required' => 'Pendidikan Tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->template->load('template/user_template', 'user/profile', $data);
        } else {
            $this->User_Model->updateProfil($idUser);
            $this->session->set_flashdata('pesan', 'Berhasil Simpan Data Pribadi!');
            redirect('user/profile');
        }
    }
}
