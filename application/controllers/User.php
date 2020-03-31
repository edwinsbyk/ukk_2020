<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] =  $this->db->get_where('petugas', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer', $data);
    }
}
