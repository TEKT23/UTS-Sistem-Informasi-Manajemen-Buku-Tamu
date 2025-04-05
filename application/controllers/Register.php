<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        $this->load->view('register_view');
    }

    public function proses_register() {
        $this->load->library('form_validation');
    
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_view');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
    
            $this->load->model('Admin_model');
            $this->Admin_model->insert_admin($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
            redirect('login');
        }
    }
}
