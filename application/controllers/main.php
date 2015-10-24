<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
                $this->load->model('bencana');
	}

	public function index(){		
		redirect(base_url().'user');
	}
        
    public function do_search($nama){
            $data['list_result']=$this->bencana->get_by_name(strtolower($nama));
            
            $this->load->view('main/dashboard',$data);
    }
}
