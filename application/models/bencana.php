<?php
	class bencana extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert($data)
		{
			$this->db->insert('bencana',$data);
			$insert_id = $this->db->insert_id();
   			return  $insert_id;			
		}
		
				
	}

