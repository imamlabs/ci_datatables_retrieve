<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

    public function index() {
    $session = $this->session->userdata('status');
		if ($session == '') {
			$this->template->viewslogin('v_login');
		} else {
			redirect('C_Admin');
		}
      }

      public function proseslogin(){
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
	  	$this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run()==TRUE) {
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        $data=$this->M_login->login($username,$password);
        if ($data==false) {
        $this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('C_login');
        }else {
          // Create session
                $session = array(
                    'user_login' => $data,
                    'username' => $username,
                    'status' => "Loged_in",
                    
                );
          $this->session->set_userdata($session);      
          echo print_r($this->session->userdata);
         redirect('C_admin');
        }
      }else {
      $this->session->set_flashdata('error_msg', validation_errors());
			redirect('C_admin');
      }  
      }
       public function logout() {
		$this->session->sess_destroy();
		redirect('C_login');
	}
}
?>