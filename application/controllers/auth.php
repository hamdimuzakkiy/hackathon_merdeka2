<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct(){		
		parent::__construct();
		$this->no_cache();		
		$this->load->model('user');
	}

	private function cek_session(){
		if ($this->session->userdata('id') == '')
		return false;
		return true;
	}
	
	private function no_cache(){
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0"); // Proxies.
	}

	public function login(){
		if ($this->cek_session())
			redirect(base_url());
        $this->load->view('auth/login.php');
	}

	public function do_login(){
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);			
		$result = $this->user->getWhere($data);
		
		foreach ($result as $row) {			
			$this->session->set_userdata(array(
                    'role' => $row->role,
                    'id' => $row->id,
                    'nama' =>$row->nama,
                    'email' => $row->email                                                                           
            ));	
		}
		
		redirect(base_url());
    }

    public function logout(){
    	$this->session->unset_userdata('role');
    	$this->session->unset_userdata('id');    
    	redirect(base_url());
    }
}
