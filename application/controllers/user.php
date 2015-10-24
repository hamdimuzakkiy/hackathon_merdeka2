<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('bencana');
		$this->load->model('kebutuhan');
                $this->load->model('users');
	}

	public function index(){		
		
	}

	public function tampil(){

	}

	public function tambah_bancana(){
		$this->load->view('user/tambah_bancana');
	}

	public function do_tambah_bencana (){
		$data['nama'] = $_POST['nama'];
		$data['lokasi'] = $_POST['lokasi'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['tanggal_berakhir'] = $_POST['tanggal_berakhir'];
		$data['id_user'] = $this->get_session()['id'];
		$id	= $this->bencana->insert($data);
		$datas = array();		
		if(!empty($_POST['namas'])) {		    
			for ($i=0; $i < sizeof($_POST['namas']) ; $i++) { 					
		        array_push($datas, array('nama' => $_POST['namas'][$i], 'jumlah' => $_POST['jumlah'][$i], 'id_bencana' => $id));
		    }
		}		
		$this->kebutuhan->insert_batch($datas);		
	}

	public function list_bencana(){
		$cnfg['soft_delete'] = 0;
		$this->bencana->get_where($cnfg);
		$config['total_rows'] = sizeof($this->bencana->get_where($cnfg));		

		$this->db->last_query();		

		$config['base_url'] = base_url().'user/list_bencana';
		// $config['suffix'] = '?src=hamdi';
		$config['suffix'] = '';
		$configs = $this->pagination($config);
		$data['list'] = $this->bencana->get_lim($configs);
		$this->load->view('user/list_bencana',$data);
	}
        
	public function search(){
		if (!isset($_GET['sch']))
			$config['suffix'] = '';
		else
			$config['suffix'] = $_GET['sch'];

		$sch = $config['suffix'];

		$config['total_rows'] = sizeof($this->bencana->get_by_name(strtolower($sch)));
		
		$config['base_url'] = base_url().'user/list_bencana';
		$config['suffix'] = '?sch='.$config['suffix'];		
		$configs = $this->pagination($config);
    }

        public function detail_bencana($id_bencana){
                //$data['data_header'] = $this->get_session();
                $this->get_header();
                $temp['id']=$id_bencana;
                $data['detail_bencana'] = $this->bencana->get_where($temp);
                foreach ($data['detail_bencana'] as $temp) $id_koor['id'] = $temp->id_user;
                $data['detail_koor'] = $this->users->get_where($id_koor);
                
                $this->load->view('user/detail_bencana',$data);
        }
        

	private function pagination($data){
		$config['base_url'] = $data['base_url'];
		$config['suffix'] = $data['suffix'];
		$config['first_url'] = $config['base_url'].$data['suffix'];
		$config['total_rows'] = $data['total_rows'];
		$config['per_page'] = 4;
		$config['num_links'] = 20;		
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = "</a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config); 
		return $config;
	}

}
