<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_Model extends CI_Model
{
    // Tambah Data Pribadi
    public function tambahDataPribadi($idUser)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip' => htmlspecialchars(trim($this->input->post('nip'))),
            'unit_kerja' => htmlspecialchars(trim($this->input->post('unit_kerja'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'tempat_lahir' => htmlspecialchars(trim($this->input->post('tempat_lahir'))),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'notelp' =>  htmlspecialchars(trim($this->input->post('notelp'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'program_studi' =>  htmlspecialchars(trim($this->input->post('program_studi'))),
            'instusi' =>  htmlspecialchars(trim($this->input->post('instusi'))),
            'user_id' => $idUser
        ];

        $this->db->insert('data_pribadi', $data);
    }

    // Update Data Pribadi
    public function UpdateDataPribadi($idUser)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip' => htmlspecialchars(trim($this->input->post('nip'))),
            'unit_kerja' => htmlspecialchars(trim($this->input->post('unit_kerja'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'tempat_lahir' => htmlspecialchars(trim($this->input->post('tempat_lahir'))),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'notelp' =>  htmlspecialchars(trim($this->input->post('notelp'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'program_studi' =>  htmlspecialchars(trim($this->input->post('program_studi'))),
            'instusi' =>  htmlspecialchars(trim($this->input->post('instusi'))),
            'user_id' => $idUser
        ];

        $this->db->where('user_id', $idUser);
        $this->db->update('data_pribadi', $data);
    }

    // Tambah Lampiran
    public function tambahLampiran($sk_cpns, $sk_pns, $sk_pangkat_terakhir, $skp_dua_tahun, $sk_perjanjian, $sk_jamin_biaya, $st_izin_kepala, $st_rekomendasi, $jadwal_kuliah, $st_pernyataan, $id_user)
    {
        $data = [
            'user_id' => $id_user,
            'sk_cpns' => $sk_cpns,
            'sk_pns' => $sk_pns,
            'sk_pangkat_terakhir' => $sk_pangkat_terakhir,
            'skp_dua_tahun' => $skp_dua_tahun,
            'sk_perjanjian' => $sk_perjanjian,
            'sk_jamin_biaya' => $sk_jamin_biaya,
            'st_izin_kepala' => $st_izin_kepala,
            'st_rekomendasi' => $st_rekomendasi,
            'jadwal_kuliah' => $jadwal_kuliah,
            'st_pernyataan' => $st_pernyataan,

        ];

        $this->db->insert('pengajuan', $data);
    }

    // Ambil Data
    public function ambilData()
    {
        $this->db->join('user us', 'us.id_user = pj.user_id');
        $this->db->join('data_pribadi dp', 'dp.user_id = us.id_user');
        return $this->db->get('pengajuan pj')->result_array();
    }

    // Ambil Detail Data
    public function detailPengajuan($id_pengajuan)
    {
        $this->db->join('user us', 'us.id_user = pj.user_id');
        $this->db->join('data_pribadi dp', 'dp.user_id = us.id_user');
        return $this->db->get_where('pengajuan pj', ['pj.id_pengajuan' => $id_pengajuan])->row_array();
    }

    // Ambil Lampiran
    public function ambilLampiran($id_user)
    {
        return $this->db->get_where('pengajuan', ['user_id' => $id_user])->row_array();
    }
}
