<?php
	class Users extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('user',$data);
			return;
		}

		function get_where($data){
			$q = $this->db->get_where('user',$data);
			return $q->result();
		}


	}
