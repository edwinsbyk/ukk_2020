<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Kolom ini wajib di isi.',
            'valid_email' => 'Email harus valid.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Kolom ini wajib di isi.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masuk';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('petugas', ['username' => $email], ['password' => $password])->row_array();


        //id user exist
        if ($user) {
            //if user active
            if ($user['is_active'] == 1) {
                // cek passwd
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['email'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 'admin') {
                        redirect('admin');
                    } else if ($user['level'] == 'petugas') {
                        redirect('petugas');
                    } else {
                        redirect('member');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum aktif</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[petugas.username]|valid_email', [
            'is_unique' => 'This email has already registered.',
            'required' => 'Kolom ini wajib di isi.',
            'valid_email' => 'Email harus valid.'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak cocok',
            'required' => 'Kolom ini wajib di isi.',
            'min_length' => 'Password terlalu pendek '
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $is_unique = false;
            $num = false;
            while (!$is_unique) {
                $num = rand(1, 5);
                $sel_query  = "SELECT id_petugas from petugas where id_petugas = " . $num;
                $result2 = $this->db->query($sel_query);
                if (!mysqli_fetch_array($result2)) {
                    $is_unique = true;
                }
            }
            $data = [
                'id_petugas' => $num,
                'nama_petugas' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level' => 'member',
                // level : 1 => admin; 2 => moderator; 3 => member
                'date_created' => time()
            ];
            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda sudah terdaftar, silahkan login!</div>');
            redirect('auth');
        }
    }
}
