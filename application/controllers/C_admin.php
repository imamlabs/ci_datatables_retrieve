<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller 
{
    		public function __construct() {
		parent::__construct();
	$this->load->model('M_admin');
		//setiap file controller ini dipanggil maka akan meload model M_admin
	}

	public function index() {
		//setiap controller ini dipanggil fungsi index yang pertama kali dijalankan
		if ($this->session->userdata('status') == '') {
			$this->template->viewslogin('v_login');
		}
		
		$data['userdata'] = $this->session->userdata('user_login');
        $idlevel = $this->session->userdata('user_login')->idlevel;
        $data['judul'] 	= "Admin";
		//mendeklarasikan userdata session
		$data['dataAdmin'] 	= $this->M_admin->getbyIdLevel( $idlevel);
		//mendeklarasikan nilai dari model M_admin pada method/fungsi select_All() isi bisa lihat M_Admin.php fungsi select_all

		
		$this->template->views('v_admin', $data);
		
		//melakukan parsing seluruh nilai dari $data ke view admin/home
		 
	}
   
    
}

?>