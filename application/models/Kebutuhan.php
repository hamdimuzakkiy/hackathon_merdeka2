<?php
	class Kebutuhan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function insert_batch($data){
			$this->db->insert_batch('kebutuhan',$data);
			return 0;
		}

		function get_where($data){
			$q = $this->db->get_where('kebutuhan',$data);
			return $q->result();
		}

		function update($where,$data){
			$this->db->where($where);
			$this->db->update('kebutuhan', $data);
		}

	}
