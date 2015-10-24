<?php
	class permintaan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('permintaan',$data);
			return;
		}
		
	}

