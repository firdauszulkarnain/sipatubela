<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_Model extends CI_Model
{
    public function tambahDataPribadi($idUser)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip' => htmlspecialchars(trim($this->input->post('nip'))),
            'unit_kerja' => htmlspecialchars(trim($this->input->post('unit_kerja'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'tempat_lahir' => htmlspecialchars(trim($this->input->post('tempat_lahir'))),
            'tanggal_lahir' => date('Y-m-d'),
            'notelp' =>  htmlspecialchars(trim($this->input->post('notelp'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'program_studi' =>  htmlspecialchars(trim($this->input->post('program_studi'))),
            'instusi' =>  htmlspecialchars(trim($this->input->post('instusi'))),
            'user_id' => $idUser
        ];

        $this->db->insert('data_pribadi', $data);
    }

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
}
