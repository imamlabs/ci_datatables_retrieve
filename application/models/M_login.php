<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function login($username, $password) {
        $this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$data = $this->db->get();
		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
    }
}
 ?>