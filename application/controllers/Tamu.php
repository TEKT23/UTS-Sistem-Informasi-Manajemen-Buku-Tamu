<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
        $this->load->library('session');
    }

  public function index() {
    $this->load->view('form_tamu'); 
  }

  public function daftar() {
    $keyword = $this->input->get('keyword');

    if ($keyword) {
        $data['tamu'] = $this->Tamu_model->search($keyword);
    } else {
        $data['tamu'] = $this->Tamu_model->get_all();
    }

    $this->load->view('daftar_tamu', $data);
}


  public function simpan() {
    $data = [
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
        'tanggal' => date('Y-m-d'),
        'waktu_datang' => date('H:i:s')
    ];

    if ($this->Tamu_model->insert($data)) {
        $this->session->set_flashdata('success', 'Data tamu berhasil disimpan!');
    } else {
        $this->session->set_flashdata('error', 'Gagal menyimpan data tamu.');
    }

    redirect('tamu/daftar'); 
}

public function tambah()
{
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('tambah_tamu');
    } else {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => date('Y-m-d'),
            'waktu_datang' => date('H:i:s')
        ];

        $this->Tamu_model->insert($data);
        redirect('admin/admin');
    }
}

}