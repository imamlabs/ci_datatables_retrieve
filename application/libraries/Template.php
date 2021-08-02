<?php
	class Template {
    protected $_ci;
		function __construct() {
			$this->_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}
        function views($template = NULL, $data = NULL) {       
			if ($template != NULL) {
				// head
				$data['_meta'] 					= $this->_ci->load->view('admin/_meta', $data, TRUE);
				$data['_css'] 					= $this->_ci->load->view('admin/_css', $data, TRUE);
				
				// Header
				$data['_nav'] 				= $this->_ci->load->view('admin/_nav', $data, TRUE);
				//$data['_header'] 				= $this->_ci->load->view('admin/_header', $data, TRUE);
				
				//Sidebar
				$data['_sidebar'] 				= $this->_ci->load->view('admin/_sidebar', $data, TRUE);
				
				//Content
				$data['_headerContent'] 	= $this->_ci->load->view('admin/_headerContent', $data, TRUE);
				$data['_mainContent'] 		= $this->_ci->load->view($template, $data, TRUE);
				//$data['_content'] 				= $this->_ci->load->view('admin/_content', $data, TRUE);
				
				//Footer
				$data['_footer'] 				= $this->_ci->load->view('admin/_footer', $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->_ci->load->view('admin/_js', $data, TRUE);
				echo $data['_template_admin'] 		= $this->_ci->load->view('admin/_template_admin', $data, TRUE);
			}
        }
        function viewslogin($template = NULL, $data = NULL) {
        if ($template != NULL) {
				// head
				$data['_meta'] 					= $this->_ci->load->view('login/_meta', $data, TRUE);
				$data['_css'] 					= $this->_ci->load->view('login/_css', $data, TRUE);
				
				
				//Content
				$data['_mainContent'] 		= $this->_ci->load->view($template, $data, TRUE);
				
				//Footer
				$data['_footer'] 				= $this->_ci->load->view('login/_footer', $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->_ci->load->view('login/_js', $data, TRUE);
				echo $data['_logintemplate'] 		= $this->_ci->load->view('login/_logintemplate', $data, TRUE);
			}
        }
    }

?>