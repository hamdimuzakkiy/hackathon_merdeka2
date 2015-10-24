<?php
	class bencana extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}		                
                
		function get_by_name($data){
                        $this->db->select('*');
                        $this->db->from('bencana');
			$this->db->like('lower(nama)',$data);
			$query = $this->db->get();
                        return $query->result();
		}
		

		function insert($data)
		{
			$this->db->insert('bencana',$data);
			$insert_id = $this->db->insert_id();
   			return  $insert_id;			
		}
					
	}

