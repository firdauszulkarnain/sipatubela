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

    public function proses_pengajuan()
    {
        $sk_cpns = $this->sk_cpns;
        $sk_pns = $this->sk_pns;


        $this->Pengajuan_Model->tambahLampiran($sk_cpns, $sk_pns);
        $this->session->set_flashdata('pesan', 'Tambah Data Surat');
        redirect('pengajuan/lampiran');
    }


    public function sk_cpns()
    {
        $sk_cpns = $_FILES['sk_cpns']['name'];
        if ($sk_cpns) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file/sk_cpns';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_cpns')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $sk_cpns = $this->upload->data('file_name');
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function sk_pns()
    {
        $sk_pns = $_FILES['sk_pns']['name'];
        if ($sk_pns) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file/sk_pns';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_pns')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $sk_pns = $this->upload->data('file_name');
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }
}
