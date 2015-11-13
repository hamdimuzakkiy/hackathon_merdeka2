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
		if ($this->session->userdata('id') == '' or $this->session->userdata('id') == 'guest')
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
	public function do_login($role = 'user'){
            if($role == 'user'){
                $data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);			
		$result = $this->users->get_where($data);		
                    foreach ($result as $row) {			
                        $this->session->set_userdata(array(
                            'role' => 'user',
                            'id' => $row->id,
                            'nama' =>$row->nama,
                            'alamat' =>$row->alamat,
                            'email' => $row->email                                                                          
                        ));	
                    }
            }
            else{
                $this->session->set_userdata(array(
                            'role' => 'guest',
                            'id' => 'guest',
                            'nama' => 'guest',
                            'alamat' => 'guest',
                            'email' => 'guest'                                                                          
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

    	move_uploaded_file($_FILES["pfile"]["tmp_name"], "./assets/img/".$_FILES["pfile"]["name"]);
		
		if (isset($_FILES["pfile"]["name"]) and $_FILES["pfile"]["name"] != '')
		$data['url_img'] = "./assets/img/" .$_FILES["pfile"]["name"];		

        $this->users->insert($data);
        redirect(base_url().'main');
    }
    
    function md5($data){
    	print md5($data);
    }
}
