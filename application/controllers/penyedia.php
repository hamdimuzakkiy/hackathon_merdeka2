<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyedia extends MY_Controller {
	
	public function __construct(){
		$this->laod->model('pasokan');
		parent::__construct();		
	}

	public function index(){

	}

	public function list_supdem(){

	}


}