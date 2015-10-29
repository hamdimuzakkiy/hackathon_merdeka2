<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('bencana');
		$this->load->model('kebutuhan');
		$this->load->model('sumbang');
                $this->load->model('organisasi');
        $this->load->model('users');
	}

	public function index(){		
		
	}

	public function tambah_sumbangan($id_kebutuhan = 0){
		$this->get_header();   			
		$param['id_kebutuhan'] = $id_kebutuhan;		
        $param['status'] = 1;
		$data['list_penyumbang'] = $this->sumbang->get_where($param);
		$param2['id'] = $param['id_kebutuhan'];
		$data['detail_kebutuhan'] = $this->kebutuhan->get_where($param2);		
		$data['id_kebutuhan'] = $id_kebutuhan;
		foreach($data['detail_kebutuhan'] as $temp)$temp2['id']=$temp->id_bencana;      //Get detail bencana
                $data['detail_bencana'] = $this->bencana->get_where($temp2);
		$this->load->view('user/tambah_sumbangan',$data);
	}

	public function do_tambah_kebutuhan(){
		$id = $_POST['id'];
		$datas = array();		
		if(!empty($_POST['nama'])) {		    
			for ($i=0; $i < sizeof($_POST['nama']) ; $i++) { 					
		        array_push($datas, array('nama' => $_POST['nama'][$i], 'jumlah' => $_POST['jumlah'][$i], 'id_bencana' => $id));
		    }
		}
		if (sizeof($datas)!=0)
		$this->kebutuhan->insert_batch($datas);		
		redirect(base_url().'user/detail_my_bencana/'.$_POST['id']);
	}

	public function tambah_kebutuhan($id_bencana = 0){
		$this->get_header();   										
		$temp2['id'] = $id_bencana;
        $data['detail_bencana'] = $this->bencana->get_where($temp2);
        $data['id'] = $id_bencana;
		$this->load->view('user/tambah_kebutuhan',$data);	
	}

	public function do_tambah_sumbang(){
            $where['id'] = $_POST['id'];
            $data['terpenuhi'] = $_POST['terpenuhi'];    	    	
            $data['jumlah'] = $_POST['jumlah'];

            $old = $this->kebutuhan->get_where($where);

            foreach ($old as $row) {
            	if (is_null($row->terpenuhi))
            		$data['terpenuhi']+=0;
            	else
            		$data['terpenuhi']+=$row->terpenuhi;

            	if (is_null($row->jumlah))
            		$data['jumlah']+=0;
            	else
            		$data['jumlah']+=$row->jumlah;
            }

            $this->kebutuhan->update($where,$data);
            redirect(base_url().'user/detail_my_bencana/'.$_POST['id_bencana']);
	}	

	public function tambah_bencana(){
        $this->get_header();
		$this->load->view('user/tambah_bancana');
	}

	public function do_tambah_bencana (){
		$data['nama'] = $_POST['namas'];
		$data['lokasi'] = $_POST['lokasi'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['tanggal_berakhir'] = date("Y-m-d");
		$data['id_user'] = $this->get_session()['id'];
		
		$data['balita'] = $_POST['balita'];
		$data['a_laki'] = $_POST['a_laki'];
		$data['a_perempuan'] = $_POST['a_perempuan'];
		$data['d_laki'] = $_POST['d_laki'];
		$data['d_perempuan'] = $_POST['d_perempuan'];
		$data['l_laki'] = $_POST['l_laki'];
		$data['l_perempuan'] = $_POST['l_perempuan'];
		$data['lokasi_titik'] = $_POST['lokasi_titik'];
		$data['jarak'] = $_POST['jarak'];
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
		// print $this->db->last_query().'---';
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
        
        $data['list_organisasi'] = $this->organisasi->get_organisasi($params['id_bencana']);
        //$data['list_organisasi'] = $this->organisasi->get_where($id_organisasi);   
       // print $this->db->last_query();
       // print sizeof($data['detail_kebutuhan']);
       $this->load->view('user/detail_my_bencana',$data);
    }

    public function sumbang_bencana($id_kebutuhan=0){ 
    	$this->get_header();   	
    	$param['id_kebutuhan'] = $id_kebutuhan;
    	$param['status'] = 1;
		$data['list_penyumbang'] = $this->sumbang->get_where($param);
		$param2['id'] = $param['id_kebutuhan'];
		$data['detail_kebutuhan'] = $this->kebutuhan->get_where($param2);
		$data['id_kebutuhan'] = $id_kebutuhan;                
                foreach($data['detail_kebutuhan'] as $temp)$temp2['id']=$temp->id_bencana;      //Get detail bencana
                $data['detail_bencana'] = $this->bencana->get_where($temp2);
                
		$this->load->view('user/sumbang_bencana',$data);
	}

	public function do_sumbang_bencana($id_bencana){
    	$data['id_kebutuhan'] = $_POST['id_kebutuhan'];
    	$data['jumlah'] = $_POST['jumlah'];
    	$data['status'] = 0;
    	$this->sumbang->insert($data);
        $this->detail_bencana($id_bencana);
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
