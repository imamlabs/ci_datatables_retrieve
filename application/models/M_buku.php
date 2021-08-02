<?php 
class M_buku extends CI_Model {

   public function getbyAllBook($idlevelauth) {
        $this->db->select('*');
 $this->db->from('buku');
 $this->db->join('profil','buku.idprofil=profil.idprofil');
 $this->db->join('admin','admin.idadmin=profil.idadmin');
 $this->db->join('level_akses','level_akses.idlevel=admin.idlevel');
 $this->db->where('level_akses.idlevel',$idlevelauth);
 $query = $this->db->get();
 return $query->result();
    }


}