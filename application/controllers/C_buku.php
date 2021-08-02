<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_buku extends CI_Controller 
{
    public function __construct() {
		parent::__construct();
	$this->load->model('M_buku');
    $this->load->model('M_admin');

		//setiap file controller ini dipanggil maka akan meload model M_admin
	}
public function index() {
		//setiap controller ini dipanggil fungsi index yang pertama kali dijalankan
		if ($this->session->userdata('status') == '') {
			$this->template->viewslogin('v_login');
		}
        if ($this->session->userdata('user_login')->idlevel != '2') {
			redirect('C_author');
		}
		
		$data['userdata'] = $this->session->userdata('user_login');
    
        $idlevel = $this->session->userdata('user_login')->idlevel;
        $data['judul'] 	= "Admin";
		//mendeklarasikan userdata session
		$data['dataAdmin'] 	= $this->M_admin->getbyIdLevel( $idlevel);
        $idlevelauth='3';
		$data['dataBuku']	= $this->M_buku->getbyAllBook( $idlevelauth);
		$this->template->views('buku/table', $data);
	}
}
?>