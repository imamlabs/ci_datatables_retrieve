<?php 
class M_admin extends CI_Model {
    public function getAll() {
        $this->db->select('*');
		$this->db->from('admin');
		$data = $this->db->get();
		return $data->result();
    }

   public function getbyIdLevel($idlevel) {
        $sql = "SELECT * FROM admin, level_akses,profil WHERE (admin.idadmin=profil.idadmin) AND (admin.idlevel AND level_akses.idlevel ='".$idlevel."')";
		$data = $this->db->query($sql);
		return $data->row();
    }
}

 ?>