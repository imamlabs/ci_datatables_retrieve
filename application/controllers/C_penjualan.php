<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_penjualan extends CI_Controller 
{
    public function __construct() {
		parent::__construct();
	$this->load->model('M_penjualan');
    $this->load->model('M_admin');

		//setiap file controller ini dipanggil maka akan meload model M_admin
	}
public function index() {
		if ($this->session->userdata('status') == '') {
			$this->template->viewslogin('v_login');
		}
        if ($this->session->userdata('user_login')->idlevel != '2') {
			redirect('C_author');
		}
		
		$data['userdata'] = $this->session->userdata('user_login');
        $idlevel = $this->session->userdata('user_login')->idlevel;
        $data['judul'] 	= "Admin";
		$data['dataAdmin'] 	= $this->M_admin->getbyIdLevel( $idlevel);
    
		$data['dataPenjualan']	= $this->M_penjualan->getAllPenjualan();
      
		$this->template->views('penjualan/table', $data);
        //echo print_r($data['dataPenjualan']);
	}
}
?>