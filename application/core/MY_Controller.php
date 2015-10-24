<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){		
		parent::__construct();				
		$this->no_cache();

		if (!$this->check_session())
			redirect(base_url().'auth/login');		
	}

	private function check_action(){				
		$role = $this->session->userdata('role');
		if ($role != $act){			
			redirect(base_url().$role);
		}				
	}

	private function no_cache(){
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0"); // Proxies.
	}

	protected function check_session(){
		if ($this->session->userdata('id') == '')
		return false;
		return true;
	}

	protected function get_session(){
		$res['role'] = $this->session->userdata('role');
		$res['id'] = $this->session->userdata('id');
		$res['nama']= $this->session->userdata('nama');
        $res['email']= $this->session->userdata('email');
        $res['id_wilayah']= $this->session->userdata('id_wilayah');
        return $res;
	}	
}
