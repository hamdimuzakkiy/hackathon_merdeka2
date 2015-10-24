<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelapor extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('pelapor');
		}

	public function index(){
		$data_parse = $this->get_session();
		$this->get_header($data_parse);
		$this->load->view('pelapor/welcome_pelapor');
		$this->get_footer();
	}
        public function list_bantuan(){
                $data_parse = $this->get_session();
		$this->get_header($data_parse);
                $this->get_header($data_parse);
                
                $data['bantuan_list'] = $this->permintaan->get_data_permintaan($id_wilayah);
                $data['wilayah_ket'] = $this->wilayah->get_data_wilayah($id_wilayah);
                $this->load->view('pelapor/list_bantuan',$data);
        }
}
