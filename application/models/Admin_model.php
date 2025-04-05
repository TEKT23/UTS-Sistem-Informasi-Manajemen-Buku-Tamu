<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function login($username, $password) {
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row();

        if ($admin && password_verify($password, $admin->password)) {
            return $admin;
        }

        return false;
    }

    public function cek_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('admin')->row();
    }

    public function insert_admin($data) {
        return $this->db->insert('admin', $data);
    }
    
}