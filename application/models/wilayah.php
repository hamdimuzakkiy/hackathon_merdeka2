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
			
		}
		function get(){
			$q = $this->db->get('wilayah');
			return $q->result();
		}

		function get_where($data){
			$q = $this->db->get_where('wilayah',$data);
			return $q->result();
		}
		
	}

