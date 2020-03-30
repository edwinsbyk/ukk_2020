<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] =  $this->db->get_where('petugas', ['username' =>
        $this->session->userdata('username')])->row_array();
        echo 'Selamat datang ' . $data['user']['nama_petugas'];
    }
}
