<?php
	class layanan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert_batch($data){
			print "hehe";
			$this->db->insert_batch('layanan',$data);
			return 0;
		}					
	}

