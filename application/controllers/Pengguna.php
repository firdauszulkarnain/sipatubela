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

    // delete pengguna
    public function hapus_pengguna()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Admin_Model->hapus_pengguna();
        $this->session->set_flashdata('pesan', 'Barhasil Hapus Data Pengguna');
        redirect('pengguna/data');
    }
}
