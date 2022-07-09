<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    // hapus pengguna
    public function hapus_pengguna()
    {
        $id_user = $this->input->post('id_user');
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    // Update status pengajuan
    public function updateStatus($id_pengajuan)
    {
        $data = [
            'status' => $this->input->post('status'),
        ];

        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('pengajuan', $data);
    }
}
