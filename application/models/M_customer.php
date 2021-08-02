<?php 
class M_customer extends CI_Model {
     public function getAll() {
        $this->db->select('*');
		$this->db->from('customer');
		$data = $this->db->get();
		return $data->result();
    }

}