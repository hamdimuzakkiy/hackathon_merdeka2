<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('role') == 'pelapor')		
		redirect(base_url().'pelapor');
	}
}
