<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function index() {
    $this->load->view('login');
  }

  public function login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $admin = $this->db->get_where('admin', ['username' => $username])->row();

    if ($admin && $admin->passworrd == $password) { // Belum pakai hash
      $this->session->set_userdata(['admin_logged' => TRUE, 'admin_id' => $admin->id]);
      redirect('admin/dashboard');
    } else {
      $this->session->set_flashdata('error', 'Username atau password salah');
      redirect('auth');
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('auth');
  }
}
