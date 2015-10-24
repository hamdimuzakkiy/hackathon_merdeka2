<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelapor extends MY_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('permintaan');
                $this->load->model('wilayah');
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
                $data['bantuan_list'] = $this->permintaan->get_data_permintaan($data_parse['id_wilayah']);
                $data['wilayah_ket'] = $this->wilayah->get_where($data_parse['id_wilayah']);
                $this->load->view('pelapor/list_bantuan',$data);
                $this->get_footer($data_parse);
        }
        public function delete_request($id){
                $this->permintaan->delete_by_id($id);
                redirect(base_url().'pelapor/list_bantuan');
        }
        public function register(){
                $data_parse = $this->get_session();
		$this->get_header($data_parse);
                $this->load->view('pelapor/register_permintaan');
                $this->get_footer($data_parse);
        }
}
