<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct(){		
		parent::__construct();
		$this->no_cache();		
		$this->load->model('users');		

	}

	#ok
	private function cek_session(){
		if ($this->session->userdata('id') == '')
		return false;
		return true;
	}
	
	#ok
	private function no_cache(){
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
                header("Pragma: no-cache"); // HTTP 1.0.
                header("Expires: 0"); // Proxies.
	}

	#ok
	public function login(){
		if ($this->cek_session())
			redirect(base_url());
        $this->load->view('auth/login.php');
	}

	#ok
	public function do_login(){
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);			
		$result = $this->users->get_where($data);
		
		foreach ($result as $row) {			
			$this->session->set_userdata(array(
                    'role' => $row->role,
                    'id' => $row->id,
                    'nama' =>$row->nama,                    
                    'email' => $row->email                                                                          
            ));	
		}		
		redirect(base_url().'/user/list_bencana');
    }

    #ok
    public function logout(){
    	$this->session->unset_userdata('role');
    	$this->session->unset_userdata('id');    
    	redirect(base_url());
    }

    public function signup(){
                $this->load->view('auth/signup.php');
    }

    public function do_signup(){
    	$data['email'] = $_POST['email'];
    	$data['nama'] = $_POST['nama'];
    	$data['password'] = md5($_POST['password']);
    	$data['role'] = 'user';
    	$data['alamat'] = $_POST['alamat'];
        $this->user->insert($data);
        redirect(base_url().'main');
    }
    
    function md5($data){
    	print md5($data);
    }
}
