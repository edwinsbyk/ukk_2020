<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] =  $this->db->get_where('petugas', ['username' =>
        $this->session->userdata('username')])->row_array();
        echo 'Selamat datang ' . $data['user']['nama_petugas'];

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/sidebar', $data);
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/dashboard/footer', $data);
    }
}
