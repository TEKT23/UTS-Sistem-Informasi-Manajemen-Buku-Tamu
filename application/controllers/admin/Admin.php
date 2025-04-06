<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();

    if (!$this->session->userdata('admin_logged_in')) {
      redirect('login');
    }

    $this->load->model('Tamu_model');
  }

  public function index() {
    $data['tamu'] = $this->Tamu_model->get_all();
    $data['jumlah_today'] = $this->Tamu_model->count_today();
    $data['jumlah_bulan'] = $this->Tamu_model->count_month();
    $data['jumlah_total'] = $this->Tamu_model->count_all();
    
    $this->load->view('admin/admin_view', $data);
}



  public function delete($id) {
    $this->Tamu_model->delete($id);
    redirect('admin/admin');
}

public function edit($id)
{
    $data['tamu'] = $this->Tamu_model->get_by_id($id);
    $this->load->view('admin/edit_view', $data);
}

public function update($id)
{
    $data = [
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
    ];

    $this->Tamu_model->update($id, $data);
    redirect('admin/admin');
}

public function search() {
    $keyword = $this->input->post('keyword');
    $data['tamu'] = $this->Tamu_model->search($keyword);
    $this->load->view('admin_view', $data);
}
public function logout()
{
    $this->session->unset_userdata('admin');
    redirect('login');
}

}