<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    // update profil
    public function updateProfil($idUser)
    {
        $data = [
            'nama_user' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip_user' => htmlspecialchars(trim($this->input->post('nip'))),
            'ttl' => htmlspecialchars(trim($this->input->post('ttl'))),
            'agama' =>  htmlspecialchars(trim($this->input->post('agama'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'pendidikan' =>  htmlspecialchars(trim($this->input->post('pendidikan'))),

        ];

        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);
    }

    // update data pengguna
    public function updatePengguna($idUser)
    {
        $data = [
            'nama_user' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip_user' => htmlspecialchars(trim($this->input->post('nip'))),
            'email' => htmlspecialchars(trim($this->input->post('email'))),
            'username' =>  htmlspecialchars(trim($this->input->post('username'))),
        ];

        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);
    }
}
