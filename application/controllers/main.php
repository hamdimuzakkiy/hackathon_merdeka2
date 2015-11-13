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
              
    public function delete_bencana($id_bencana){
        $this->bencana->delete($id_bencana);
            //$this->index();
    }
}
