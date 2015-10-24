<?php
	class wilayah extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('wilayah',$data);
			return;
		}
<<<<<<< HEAD

		function get(){
			$q = $this->db->get('wilayah');
			return $q->result();
		}

		function get_where($data){
			$q = $this->db->get_where('wilayah',$data);
			return $q->result();
		}
=======
                function get_data_wilayah($id_wilayah){
                    $this->db->where('permintaan.id_kecamatan',$id_wilayah);
                    $query = $this->db->get();
                    return $query->result();
                }
>>>>>>> develop
		
	}

