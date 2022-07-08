<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    // untuk cek login session login admin
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
    }
    // untuk fitur admin, data pengguna
    public function data()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->db->get('user')->result_array();
        $this->template->load('template/admin_template', 'admin/pengguna', $data);
    }

    // untuk fitur admin, data lampiran pengajuan
    public function pengajuan()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Pengajuan';
        $data['pengajuan'] = $this->Pengajuan_Model->ambilData();
        $this->template->load('template/admin_template', 'admin/pengajuan', $data);
    }

    // update pengguna
    public function update_pengguna($idUser)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Update Data Pengguna';
        $data['user'] = $this->db->get_where('user', ['id_user' => $idUser])->row_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'trim|required|numeric',
            ['required' => 'NIP Harus Diisi', 'numeric' => 'NIP Hanya Angka']
        );
        $this->form_validation->set_rules('email', 'Email', 'required|trim', ['required' => 'Email Tidak Boleh Kosong']);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username Tidak Boleh Kosong']);


        if ($this->form_validation->run() == false) {
            $this->template->load('template/admin_template', 'admin/update_pengguna', $data);
        } else {
            $this->User_Model->updatePengguna($idUser);
            $this->session->set_flashdata('pesan', 'Berhasil Update Data Pengguna!');
            redirect('pengguna/data');
        }
    }

    // delete pengguna
    public function hapus_pengguna()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Admin_Model->hapus_pengguna();
        $this->session->set_flashdata('pesan', 'Barhasil Hapus Data Pengguna');
        redirect('pengguna/data');
    }
}
