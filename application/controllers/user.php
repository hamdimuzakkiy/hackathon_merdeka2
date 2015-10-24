<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('bencana');
		$this->load->model('kebutuhan');
		$this->load->model('sumbang');
        $this->load->model('users');
	}

	public function index(){		
		
	}

	public function tambah_sumbangan($id_kebutuhan = 0){
		$param['id_kebutuhan'] = $id_kebutuhan;
                $param['status'] = 1;
		$data['list_penyumbang'] = $this->sumbang->get_where($param);
		$param2['id'] = $param['id_kebutuhan'];
		$data['detail_kebutuhan'] = $this->kebutuhan->get_where($param2);
		$data['id_kebutuhan'] = $id_kebutuhan;
		$this->load->view('user/tambah_sumbangan',$data);
	}

	public function do_tambah_sumbang(){
            $where['id'] = $_POST['id'];
            $data['terpenuhi'] = $_POST['terpenuhi'];    	    	
            $this->kebutuhan->update($where,$data);
	}

	public function tambah_bencana(){
        $this->get_header();
		$this->load->view('user/tambah_bancana');
	}

	public function do_tambah_bencana (){
		$data['nama'] = $_POST['namas'];
		$data['lokasi'] = $_POST['lokasi'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['tanggal_berakhir'] = $_POST['tanggal_berakhir'];
		$data['id_user'] = $this->get_session()['id'];

		
		//
		move_uploaded_file($_FILES["pfile"]["tmp_name"], "./assets/img/".$_FILES["pfile"]["name"]);
		
		if (isset($_FILES["pfile"]["name"]) and $_FILES["pfile"]["name"] != '')
		$data['url_img'] = "./assets/img/" .$_FILES["pfile"]["name"];		
		//


		$id	= $this->bencana->insert($data);
		$datas = array();		
		if(!empty($_POST['nama'])) {		    
			for ($i=0; $i < sizeof($_POST['nama']) ; $i++) { 					
		        array_push($datas, array('nama' => $_POST['nama'][$i], 'jumlah' => $_POST['jumlah'][$i], 'id_bencana' => $id));
		    }
		}
		if (sizeof($datas)!=0)
		$this->kebutuhan->insert_batch($datas);		
		redirect(base_url().'user/list_bencana');
	}

	public function list_bencana(){
                $this->get_header();
		$data['session'] = $this->get_session()['nama'];
		$cnfg['soft_delete'] = 0;
		$this->bencana->get_where($cnfg);
		$config['total_rows'] = sizeof($this->bencana->get_where($cnfg));			

		$config['base_url'] = base_url().'user/list_bencana';		
		$config['suffix'] = '';
		$configs = $this->pagination($config);
		$data['list'] = $this->bencana->get_lim($configs);
		$data['id_user'] = $this->get_session()['id'];
		$this->load->view('user/list_bencana',$data);
	}
	public function list_my_bencana(){
		 $this->get_header();
		 $data['session'] = $this->get_session()['nama'];
		 //$data['session'] = $this->get_session()['id'];
		 $cnfg['soft_delete'] = 0;
		 $cnfg['id_user'] = $this->get_session()['id'];
		 $config['total_rows'] = sizeof($this->bencana->get_where($cnfg));
		 $this->bencana->get_where($cnfg);
		 $config['base_url'] = base_url().'user/list_my_bencana';
		 $config['suffix'] = '';
		$configs = $this->pagination($config);
		$data['list'] = $this->bencana->get_where_lim($configs,$cnfg);
		$data['id_user'] = $cnfg['id_user'];
		$this->load->view('user/list_bencana',$data);

	}

        
	public function search(){
                $this->get_header();
		if (!isset($_GET['sch']))
			$config['suffix'] = '';
		else
			$config['suffix'] = $_GET['sch'];

		$sch = $config['suffix'];
                
		$config['total_rows'] = sizeof($this->bencana->get_by_name(strtolower($sch)));		
		$config['base_url'] = base_url().'user/list_bencana';
		$config['suffix'] = '?sch='.$config['suffix'];		
		$configs = $this->pagination($config);
        $data['id_user'] = $this->get_session()['id'];
                $data['list'] = $this->bencana->get_by_name_lim($sch,$configs);
                $this->load->view('user/list_bencana',$data);
    }

    public function detail_bencana($id_bencana=0){
       $this->get_header();
        $param['id']=$id_bencana;
        $data['detail_bencana'] = $this->bencana->get_where($param);
        foreach ($data['detail_bencana'] as $temp)
        	$id_koor['id'] = $temp->id_user;
        $data['detail_koor'] = $this->users->get_where($id_koor);
        $params['id_bencana'] = $id_bencana;
        $data['detail_kebutuhan'] = $this->kebutuhan->get_where($params);
       // print $this->db->last_query();
       // print sizeof($data['detail_kebutuhan']);
       $this->load->view('user/detail_bencana',$data);
    }

    public function detail_my_bencana($id_bencana=0){
       $this->get_header();
        $param['id']=$id_bencana;
        $data['detail_bencana'] = $this->bencana->get_where($param);
        foreach ($data['detail_bencana'] as $temp)
        	$id_koor['id'] = $temp->id_user;
        $data['detail_koor'] = $this->users->get_where($id_koor);
        $params['id_bencana'] = $id_bencana;
        $data['detail_kebutuhan'] = $this->kebutuhan->get_where($params);
       // print $this->db->last_query();
       // print sizeof($data['detail_kebutuhan']);
       $this->load->view('user/detail_bencana',$data);
    }

    public function sumbang_bencana($id_kebutuhan=0){ 
    	$this->get_header();   	
    	$param['id_kebutuhan'] = $id_kebutuhan;
    	$param['status'] = 1;
		$data['list_penyumbang'] = $this->sumbang->get_where($param);
		$param2['id'] = $param['id_kebutuhan'];
		$data['detail_kebutuhan'] = $this->kebutuhan->get_where($param2);
		$data['id_kebutuhan'] = $id_kebutuhan;
		$this->load->view('user/sumbang_bencana',$data);
	}

	public function do_sumbang_bencana(){
    	$data['id_kebutuhan'] = $_POST['id_kebutuhan'];
    	$data['jumlah'] = $_POST['jumlah'];
    	$data['status'] = 0;
    	$this->sumbang->insert($data);
	}
        
	private function pagination($data){
		$config['base_url'] = $data['base_url'];
		$config['suffix'] = $data['suffix'];
		$config['first_url'] = $config['base_url'].$data['suffix'];
		$config['total_rows'] = $data['total_rows'];
		$config['per_page'] = 5;
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
