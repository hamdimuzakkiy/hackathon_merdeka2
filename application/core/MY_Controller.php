<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){		
		parent::__construct();				
		$this->no_cache();

		if (!$this->check_session())
			redirect(base_url().'auth/login');

		$this->check_action();
	}

	private function check_action(){
		$act = $this->uri->segment(1);		
		// $act = '/grov';
		// redirect(base_url().$act);
		if ($this->session->userdata('role') != $act){
			print $this->session->userdata('role').' - '.$act;
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
		return $res;
	}

	// protected function get_header($data){
	// 	$res = $this->get_session();		
	// 	$role = $res['role'];		
	// 	return $this->load->view('layout/'.$role.'_header.php',$data);
	// }

	// protected function get_footer(){
	// 	$res = $this->get_session();
	// 	$role = $res['role'];
	// 	return $this->load->view('layout/'.$role.'_footer.php');
	// }

	// protected function get_periode(){
	// 	$res = $this->periode->get();
	// 	foreach ($res as $row) {
	// 		return $param['periode'] = $row->tahun;
	// 	}
		
	// }

	// protected function get_guru($data){
	// 	$this->guru->getWhere($data);
	// 	return ;
	// }
}
