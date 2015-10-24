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
                    $this->db->select('permintaan.jenis_kebutuhan as nama_barang,'
                            . 'permintaan.jumlah as total_permintaan,pasokan.jumlah as total_stok,'
                            . 'permintaan.id as id,permintaan.tgl_input as tgl_input');
                    $this->db->from('permintaan');
                    $this->db->where('permintaan.id_kecamatan',$id_wilayah);
                    $this->db->join('pasokan','pasokan.id_kecamatan=permintaan.id_kecamatan','left');
                    $this->db->group_by('permintaan.jenis_kebutuhan');
                    $query = $this->db->get();
                
                    return $query->result();
                }
                
                function delete_by_id($id){
                    
                }
		
	}

