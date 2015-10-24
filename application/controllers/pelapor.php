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
		$this->load->view('admin/welcome_admin');
		$this->get_footer();
	}
	public function kelola($option = 'guru'){		
		// $option = $this->uri->segment(3);		
		$data['option'] = $option;		
		$data_parse = $this->get_session();
		$this->get_header($data_parse);		
		if ($option == 'guru'){			
            $data['guru_list'] = $this->guru->get_all_guru();
			$this->load->view('admin/guru/indeks_guru',$data);
		}
		else if ($option == 'kelas'){
			$query  = $this->kelas->get_data_kelas();
			$data['data_kelas'] = null;
			if($query){
				$data['data_kelas'] = $query;
			}
			$this->load->view('admin/kelas/indeks_kelas',$data);
		}
                else if ($option == 'mapel'){
                                $data['mapel_list'] = $this->mapel->get_all_mapel();
                                $this->load->view('admin/mapel/indeks_mapel',$data);
                        }
                else if ($option == 'pelajaran'){
                                //$data['pelajaran_list'] = $this->pelajaran->get_all_pelajaran();
                                $data['pelajaran_list'] = $this->kelas->get_data_mapel_kelas();
                                $this->load->view('admin/pelajaran/indeks_pelajaran',$data);
                        }        
		else{
			$this->load->view('admin/indeks_siswa');
		}
		$this->get_footer();	
	}
	public function register($option = 'guru'){
		$data_parse = $this->get_session();
		$this->get_header($data_parse);
		if ($option == 'guru')
			$this->load->view('admin/guru/register_guru');
		else if ($option == 'mapel')
			$this->load->view('admin/mapel/register_mapel');
		else if ($option == 'kelas'){
			//$data_guru['options']= $this->guru->array_guru();
			$dd_guru = array();
			foreach ($this->guru->master_guru() as $data_guru) {				
				$dd_guru[$data_guru['id']] = $data_guru['nama'];
			}
			$data['options']=array('0' => 'Select an option') +$dd_guru;
			$this->load->view('admin/kelas/register_kelas',$data);
		}
                else if ($option == 'pelajaran'){
                        $data_pelajaran['list_mapel'] = $this->mapel->get_all_mapel();
                        $data_pelajaran['list_kelas'] = $this->kelas->get_all_class();
                        $this->load->view('admin/pelajaran/register_pelajaran',$data_pelajaran);
                }
		else
			$this->load->view('admin/register_siswa');
		$this->get_footer();
	}
	public function do_register($option = 'guru'){
		if ($option == 'guru'){
			$data_guru['nama'] = $_POST['nama'];
			$data_guru['nip'] = $_POST['nip'];
			$data_guru['telpon'] = $_POST['telpon'];
			$data_guru['email'] = $_POST['email'];
			$data_guru['tinggi'] = $_POST['tinggi'];
			$data_guru['berat'] = $_POST['berat'];
			$data_guru['penghasilan'] = $_POST['penghasilan'];
			$data_guru['role'] = $_POST['role'];
                        $this->guru->insert($data_guru);
			$data_user['nama'] = $data_guru['nama'];
			$data_user['password'] = md5('123');
			$data_user['email'] = $data_guru['email'];
			$data_user['role'] = 'guru';
			$data_user['status'] = 'aktif';
			$this->user->insert($data_user);			
		}
		else if ($option == 'kelas'){
			$data_kelas['nama_kelas'] = $_POST['nama'];
			$data_kelas['tingkat'] = $_POST['tingkat'];
			$data_kelas['periode'] = $_POST['periode'];
			$data_kelas['id_guru'] = $_POST['id'];
			$this->kelas->insert($data_kelas);
			//$data_kelas['nama'] = $_POST['nama'];
		}
                else if ($option == 'mapel'){
			$data_mapel['nama'] = $_POST['nama'];
			$data_mapel['status'] = $_POST['status'];
			$this->mapel->insert($data_mapel);
		}
                else if ($option == 'pelajaran'){
			$data_pelajaran['id_matapelajaran'] = $_POST['id_matapelajaran'];
			$data_pelajaran['id_kelas'] = $_POST['id_kelas'];
			$this->pelajaran->insert($data_pelajaran);
		}
		else{}
		redirect(base_url().'admin/kelola/'.$option);
	}
	public function edit($option = 'guru', $id = ''){
		$data_parse = $this->get_session();
		$this->get_header($data_parse);		
		if ($option == 'guru') {
            $data['guru'] = $this->guru->getById($id);
			$this->load->view('admin/guru/edit',$data);
		}
		else if ($option == 'kelas') {
			$param['id_kelas'] = $id;
			$dd_guru = array();
			foreach ($this->guru->master_guru() as $data_guru) {
				$dd_guru[$data_guru['id']] = $data_guru['nama'];
			}
			// $data['options']=$dd_guru;
			$data['options']=array('0' => 'Select an option') +$dd_guru;
			$data['kelas'] = $this->kelas->getWhere($param);
			$this->load->view('admin/kelas/edit',$data);
		}
                else if ($option == 'mapel') {
			$data['mapel'] = $this->mapel->getById($id);
			$this->load->view('admin/mapel/edit',$data);
		}
                else if ($option == 'pelajaran') {
			$data['pelajaran_list'] = $this->pelajaran->get_all_pelajaran_by_kelas($id);
                        $data['id_kelas'] = $id;
                        $data['list_mapel'] = $this->mapel->get_all_mapel();
			$this->load->view('admin/pelajaran/edit',$data);
		}
		else{

		}

		$this->get_footer();

	}
	public function update($option = 'guru',$data = '',$id = ''){
		if ($option == 'guru'){
                        $data_guru['nama'] = $_POST['nama'];
			$data_guru['nip'] = $_POST['nip'];
			$data_guru['telpon'] = $_POST['telpon'];
			$data_guru['email'] = $_POST['email'];
                        $data_guru['berat'] = $_POST['berat'];
			$data_guru['tinggi'] = $_POST['tinggi'];
			$data_guru['penghasilan'] = $_POST['penghasilan'];
			$data_guru['role'] = $_POST['role'];
                        $this->guru->update_info($data_guru,$_POST['id']);
		}
		else if ($option == 'kelas'){
			$data_kelas['nama_kelas'] = $_POST['nama'];
			$data_kelas['tingkat'] = $_POST['tingkat'];
			$data_kelas['periode'] = $_POST['periode'];
			$data_kelas['id_guru'] = $_POST['id_guru'];
			$this->kelas->update_info($data_kelas,$_POST['id']);
		}
                else if ($option == 'mapel'){
			$data_mapel['nama'] = $_POST['nama'];
			$data_mapel['status'] = $_POST['status'];
			$this->mapel->update_info($data_mapel,$_POST['id']);
		}
		else {
			
		}
		redirect(base_url().'admin/kelola/'.$option);
	}

	public function delete($option = 'guru',$id = ''){
		if ($option == 'guru'){
                        $this->guru->delete_guru($id);
		}
		else if ($option == 'kelas'){
			$this->kelas->delete_kelas($id);
		}
                else if ($option == 'mapel'){
			$this->mapel->delete_mapel($id);
		}
		else {

		}

		redirect(base_url().'admin/kelola/'.$option);
	} 	
		

	public function assign_class(){
		$data_parse = $this->get_session();
		$this->get_header($data_parse);
		$data['periode'] = $this->get_periode();
		foreach ($data['periode'] as $row) {
			$param['periode'] = $row->tahun;
		}
		$data['list_kelas'] = $this->kelas->getWhere($param);
		$kelas = array();
		$list_kelas = array();
		foreach ($data['list_kelas'] as $row) {
			array_push($kelas, $row->id_kelas);
			$list_kelas[$row->id_kelas] = 'Kelas '.$row->tingkat.' '.$row->nama_kelas;
		}

		$data['options']=array('0' => 'Select an option') +$list_kelas;
		

		$listSiswa = array();
		$siswa = $this->peserta->getIn($kelas);		
		foreach ($siswa as $row) {			
			array_push($listSiswa, $row->id_siswa);	
		}

		if (sizeof($listSiswa) == 0)			
			array_push($listSiswa, -1);	
		$data['list_siswa'] = $this->siswa->getNotIn($listSiswa);

		$this->load->view('admin/peserta/indeks_peserta',$data);
		$this->get_footer();			
	}

	public function do_assign_class(){
		$data = array();
		$kelas = $_POST['kelas'];
		if(!empty($_POST['siswa'])) {
		    foreach($_POST['siswa'] as $value) {		        
		        array_push($data, array('id_siswa' => $value, 'id_kelas' => $kelas));
		    }
		}
		$this->peserta->insert_batch($data);
		redirect(base_url().'admin/assign_class');
		return;
	}

}
