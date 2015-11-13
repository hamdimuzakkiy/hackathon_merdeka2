<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publics extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();        
        $this->load->model('bencana');
		$this->load->model('kebutuhan');
		$this->load->model('sumbang');
        $this->load->model('organisasi');
        $this->load->model('users');
        $this->load->model('layanan');        

        if ($this->session->userdata('role') == ''){        	
	        $this->session->set_userdata(array(
	            'role' => 'guest',
	            'id' => 'guest',
	            'nama' => 'guest',
	            'alamat' => 'guest',
	            'email' => 'guest'                                                                          
	        ));
    	}
	}

	private function get_header(){
		$role = $data['id']=$this->get_session()['role'];
        $data['id']=$this->get_session()['id'];
        $data['nama']=$this->get_session()['nama'];
        $data['email']=$this->get_session()['email'];
        $data['alamat']=$this->get_session()['alamat'];
        if($role=='user'){
            $this->load->view('layout/header.php',$data);    
        }
        else
            $this->load->view('layout/guest_header.php',$data);
	}

	public function index(){				
		$this->get_header();
		$where['soft_delete'] = 0;
		$res =  $this->bencana->get_where($where);		
		
		$result = null;
		$i=0;

		$list_nama = array();
		$list_lokasi = array();

		foreach ($res as $row) {			
			$result[$i]['lat'] = $row->lat;
			$result[$i]['id'] = $row->id;
			$result[$i]['lng'] = $row->lng;
			$result[$i]['nama'] = $row->nama;
			array_push($list_nama, $row->nama);
			array_push($list_lokasi, $row->lokasi);
			$i+=1;
		}			
		
		$data['list_nama'] = array_unique($list_nama);
		$data['list_lokasi'] = array_unique($list_lokasi);

		$data['bencana'] = $result;
		$data['len'] = sizeof($res);

		$this->load->view('user/landing',$data);
	}                

	protected function get_session(){
		$res['role'] = $this->session->userdata('role');
		$res['id'] = $this->session->userdata('id');
		$res['nama']= $this->session->userdata('nama');
		$res['email']= $this->session->userdata('email');   
        $res['alamat']= $this->session->userdata('alamat');  
                return $res;
	}	
	
}
