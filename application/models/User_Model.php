<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function updateProfil($idUser)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars(trim($this->input->post('nama_lengkap'))),
            'nip' => htmlspecialchars(trim($this->input->post('nip'))),
            'ttl' => htmlspecialchars(trim($this->input->post('ttl'))),
            'agama' =>  htmlspecialchars(trim($this->input->post('agama'))),
            'jabatan' => htmlspecialchars(trim($this->input->post('jabatan'))),
            'alamat' =>  htmlspecialchars(trim($this->input->post('alamat'))),
            'pendidikan' =>  htmlspecialchars(trim($this->input->post('pendidikan'))),

        ];

        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);
    }
}
