<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
    }
    public function data()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->db->get('user')->result_array();
        $this->template->load('template/admin_template', 'admin/pengguna', $data);
    }

    public function pengajuan()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Pengajuan';
        $data['pengajuan'] = $this->db->get('data_pribadi')->result_array();
        $this->template->load('template/admin_template', 'admin/pengguna', $data);
    }

    public function hapus_pengguna()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Admin_Model->hapus_pengguna();
        $this->session->set_flashdata('pesan', 'Barhasil Hapus Data Pengguna');
        redirect('pengguna/data');
    }
}
