<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        redirect('user');
    }

    public function buatLaporan()
    {
        $data['title'] = 'Buat Laporan';
        $data['extra_component'] = '/js/plugins/summernote/summernote-bs4.css';
        $data['user'] =  $this->db->get_where('petugas', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/topbar', $data);
        $this->load->view('user/buatlaporan', $data);
        $this->load->view('user/footer', $data);
    }
}
