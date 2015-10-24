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
                function get_data_permintaan($id_wilayah){
                    $this->db->select('*');
                    $this->db->from('permintaan');
                    $this->db->where('permintaan.id_kecamatan',$id_wilayah);
                    $query = $this->db->get();
                
                    return $query->result();
                }
                
		
	}

