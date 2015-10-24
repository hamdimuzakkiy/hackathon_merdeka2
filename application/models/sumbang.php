<?php
	class sumbang extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('sumbang',$data);
			return;
		}

		function get_where($data){
			$q = $this->db->get_where('sumbang',$data);
			return $q->result();
		}

		
	}

