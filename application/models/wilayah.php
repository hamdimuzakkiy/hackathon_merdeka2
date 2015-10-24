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
			return;
		}
                function get_data_wilayah($id_wilayah){
                    $this->db->where('permintaan.id_kecamatan',$id_wilayah);
                    $query = $this->db->get();
                    return $query->result();
                }
		
	}

