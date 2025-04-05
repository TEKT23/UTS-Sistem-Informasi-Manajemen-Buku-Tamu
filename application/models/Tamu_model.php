<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu_model extends CI_Model {
  public function insert($data) {
    return $this->db->insert('tamu', $data);
  }

  public function get_all() {
    return $this->db->order_by('tanggal', 'DESC')->get('tamu')->result();
  }

  public function delete($id) {
    return $this->db->delete('tamu', ['id' => $id]);
}

public function get_by_id($id) {
    return $this->db->get_where('tamu', ['id' => $id])->row();
}

public function update($id, $data) {
    return $this->db->where('id', $id)->update('tamu', $data);
}

public function search($keyword) {
    $this->db->like('nama', $keyword);
    $this->db->or_like('alamat', $keyword);
    return $this->db->get('tamu')->result();
}

public function count_today()
{
    $today = date('Y-m-d');
    return $this->db->where('tanggal', $today)->count_all_results('tamu');
}

public function count_month()
{
    $month = date('m');
    return $this->db->where('MONTH(tanggal)', $month)->count_all_results('tamu');
}

public function count_all()
{
    return $this->db->count_all('tamu');
}

}
