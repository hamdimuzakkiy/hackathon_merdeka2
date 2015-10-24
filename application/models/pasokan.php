<?php
	class pasokan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('pasokan',$data);
			return;
		}

		
		
	}

