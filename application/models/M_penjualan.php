<?php 
class M_penjualan extends CI_Model {
public function getAllPenjualan() {
        $sql = "SELECT customer.nama as nama, customer.no_hp as no_hp,buku.judul_buku as judul_buku,customer.alamat as alamat, buku.harga as harga, penjualan.item as item, (buku.harga*penjualan.item) as totalharga FROM penjualan, buku, customer WHERE (penjualan.kode_buku=buku.kode_buku) AND (penjualan.idcustomer=customer.idcustomer)";
		$data = $this->db->query($sql);
		//return $data->row();
        return $data->result();
    }
}
?>