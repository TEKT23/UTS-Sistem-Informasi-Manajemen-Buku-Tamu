<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->Admin_model->cek_login($username, $password);

        if ($admin) {
            $this->session->set_userdata('admin_logged_in', true);
            $this->session->set_userdata('username', $admin->username);
            redirect('admin/admin');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}