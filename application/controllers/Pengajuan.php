<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function data()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $idUser = $data['user']['id_user'];
        $data['title'] = 'Data Pribadi Pengajuan';
        $data['pribadi'] = $this->db->get_where('data_pribadi', ['user_id' => $idUser])->row_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Produk Tidak Boleh Kosong']);
        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'trim|required|numeric',
            ['required' => 'NIP Harus Diisi', 'numeric' => 'NIP Hanya Angka']
        );
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim', ['required' => 'Unit Kerja Tidak Boleh Kosong']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim', ['required' => 'Jabatan Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim', ['required' => 'Tempat Lahir Tidak Boleh Kosong']);
        $this->form_validation->set_rules('notelp', 'No Telp', 'required|trim', ['required' => 'Notelp Tidak Boleh Kosong']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', ['required' => 'Alamat Tidak Boleh Kosong']);
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required|trim', ['required' => 'Program Studi Tidak Boleh Kosong']);
        $this->form_validation->set_rules('instusi', 'Instusi', 'required|trim', ['required' => 'Instusi Tidak Boleh Kosong']);


        if ($this->form_validation->run() == false) {
            $this->template->load('template/user_template', 'user/data_pribadi', $data);
        } else {
            $this->Pengajuan_Model->tambahDataPribadi($idUser);
            $this->session->set_flashdata('pesan', 'Berhasil Simpan Data Pribadi!');
            redirect('pengajuan/data');
        }
    }

    public function lampiran()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Lampiran Data Pengajuan';
        $this->template->load('template/user_template', 'user/lampiran', $data);
    }
}
