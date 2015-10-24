<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct(){		
		parent::__construct();
		$this->no_cache();		
		$this->load->model('user');
		$this->load->model('wilayah');
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
		$result = $this->user->get_where($data);
		
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

    public function signup(){
    	if ($this->cek_session())
			redirect(base_url());

		$list_wilayah = $this->wilayah->get();
		$list = array();
		foreach ($list_wilayah as $row) {			
			$list[$row->id] = $row->nama;
		}
		$data['list_wilayah'] = $list;
    	$this->load->view('auth/signup.php',$data);
    }

    public function do_signup(){
    	$data['email'] = $_POST['email'];
    	$data['nama'] = $_POST['nama'];
    	$data['password'] = md5($_POST['password']);
    	$data['role'] = 'pelapor';
    	$data['tlp'] = $_POST['tlp'];
    	$data['id_wilayah'] = $_POST['id_wilayah'];
    	$this->user->insert($data);
    	redirect(base_url().'main');
    }

    #ok
    public function logout(){
    	$this->session->unset_userdata('role');
    	$this->session->unset_userdata('id');    
    	redirect(base_url());
    }
    
    function md5($data){
    	print md5($data);
    }
}
