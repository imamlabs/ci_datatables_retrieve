<?php 
class M_administrator extends CI_Model {

   public function getbyIdLevel($idlevelauth) {
        $this->db->select('*');
 $this->db->from('admin');
 $this->db->join('profil','profil.idadmin=admin.idadmin');
 $this->db->join('level_akses','level_akses.idlevel=admin.idlevel');
 $this->db->where('level_akses.idlevel',$idlevelauth);
 $query = $this->db->get();
 return $query->result();
    }


}