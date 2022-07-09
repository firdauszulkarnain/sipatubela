<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    // Register akun
    public function register()
    {
        $data = [
            "nama_user" => htmlspecialchars(trim($this->input->post('nama', true))),
            "username" => htmlspecialchars(trim($this->input->post('username', true))),
            "email" => htmlspecialchars(trim($this->input->post('email', true))),
            "password" => htmlspecialchars(password_hash($this->input->post('password1', true), PASSWORD_DEFAULT)),
        ];
        $this->db->insert('user', $data);
    }

    // update passwor admin
    public function update_password($admin_id)
    {
        $data = [
            "password" => htmlspecialchars(password_hash($this->input->post('password1'), PASSWORD_DEFAULT))
        ];

        $this->db->where('id_admin', $admin_id);
        $this->db->update('admin', $data);
    }
}
