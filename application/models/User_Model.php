<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function updateProfil($idUser)
    {
        $data = [
            'nama_user' => htmlspecialchars(trim($this->input->post('nama_user'))),
            'nip_user' => htmlspecialchars(trim($this->input->post('nip_user'))),
            'ttl' => htmlspecialchars(trim($this->input->post('ttl'))),
            'agama' =>  htmlspecialchars(trim($this->input->post('agama'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'pendidikan' =>  htmlspecialchars(trim($this->input->post('pendidikan'))),

        ];

        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);
    }

    public function updatePengguna($idUser)
    {
        $data = [
            'nama_user' => htmlspecialchars(trim($this->input->post('nama_user'))),
            'nip_user' => htmlspecialchars(trim($this->input->post('nip_user'))),
            'email' => htmlspecialchars(trim($this->input->post('email'))),
            'username' =>  htmlspecialchars(trim($this->input->post('username'))),
        ];

        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);
    }
}
