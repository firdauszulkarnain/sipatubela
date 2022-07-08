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

    public function update_data()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $idUser = $data['user']['id_user'];
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
            $this->Pengajuan_Model->UpdateDataPribadi($idUser);
            $this->session->set_flashdata('pesan', 'Berhasil Update Data Pribadi!');
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
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $id_user = $data['user']['id_user'];

        $sk_cpns = $this->sk_cpns();
        $sk_pns = $this->sk_pns();
        $sk_pangkat_terakhir = $this->sk_pangkat_terakhir();
        $skp_dua_tahun = $this->skp_dua_tahun();
        $sk_perjanjian = $this->sk_perjanjian();
        $sk_jamin_biaya = $this->sk_jamin_biaya();
        $st_izin_kepala = $this->st_izin_kepala();
        $st_rekomendasi = $this->st_rekomendasi();
        $jadwal_kuliah = $this->jadwal_kuliah();
        $st_pernyataan = $this->st_pernyataan();


        $this->Pengajuan_Model->tambahLampiran($sk_cpns, $sk_pns, $sk_pangkat_terakhir, $skp_dua_tahun, $sk_perjanjian, $sk_jamin_biaya, $st_izin_kepala, $st_rekomendasi, $jadwal_kuliah, $st_pernyataan, $id_user);
        $this->session->set_flashdata('pesan', 'Tambah Data Surat');
        redirect('pengajuan/lampiran');
    }


    public function sk_cpns()
    {
        $name = '';
        $sk_cpns = $_FILES['sk_cpns']['name'];
        if ($sk_cpns) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_cpns')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function sk_pns()
    {
        $name = '';
        $sk_pns = $_FILES['sk_pns']['name'];
        if ($sk_pns) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_pns')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function sk_pangkat_terakhir()
    {
        $name = '';
        $sk_pangkat_terakhir = $_FILES['sk_pangkat_terakhir']['name'];
        if ($sk_pangkat_terakhir) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_pangkat_terakhir')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function skp_dua_tahun()
    {
        $name = '';
        $skp_dua_tahun = $_FILES['skp_dua_tahun']['name'];
        if ($skp_dua_tahun) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('skp_dua_tahun')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function sk_perjanjian()
    {
        $name = '';
        $sk_perjanjian = $_FILES['sk_perjanjian']['name'];
        if ($sk_perjanjian) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_perjanjian')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function sk_jamin_biaya()
    {
        $name = '';
        $sk_jamin_biaya = $_FILES['sk_jamin_biaya']['name'];
        if ($sk_jamin_biaya) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sk_jamin_biaya')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }


    public function st_izin_kepala()
    {
        $name = '';
        $st_izin_kepala = $_FILES['st_izin_kepala']['name'];
        if ($st_izin_kepala) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('st_izin_kepala')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function st_rekomendasi()
    {
        $name = '';
        $st_rekomendasi = $_FILES['st_rekomendasi']['name'];
        if ($st_rekomendasi) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('st_rekomendasi')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function jadwal_kuliah()
    {
        $name = '';
        $jadwal_kuliah = $_FILES['jadwal_kuliah']['name'];
        if ($jadwal_kuliah) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('jadwal_kuliah')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }

    public function st_pernyataan()
    {
        $name = '';
        $st_pernyataan = $_FILES['st_pernyataan']['name'];
        if ($st_pernyataan) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/file';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('st_pernyataan')) {
                $this->session->set_flashdata('file_error', 'Input File Hanya Menerima Dokumen');
                redirect('pengajuan/lampiran');
            } else {
                $name = $this->upload->data('file_name');
                return $name;
            }
        } else {
            $this->session->set_flashdata('file_error', 'Input FIle Harus Diisi');
            redirect('pengajuan/lampiran');
        }
    }
}
