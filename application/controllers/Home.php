<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		$data = array(
            'title' => "Selamat datang di Aplikasi Pelayanan Masyarakat Medan",
            // 'listBerita' => $this->berita->getDaftarBerita(),
            // 'isi' => 'home/index'
        );
		$this->load->view('templates/navbar',$data);
		$this->load->view('hello');
		$this->load->view('templates/footer');
	}
}
