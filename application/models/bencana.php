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
			$this->db->insert('user',$data);
			return;
		}
                
		function get_by_name($data){
                        $this->db->select('*');
                        $this->db->from('bencana');
			$this->db->like('lower(nama)',$data);
                        $this->db->where('bencana.soft_delete',0);
			$query = $this->db->get();
                        return $query->result();
		}
		
                function delete($id_bencana){
                        $data['soft_delete']=1;
                        $this->db->where('bencana.id',$id_bencana);
                        $this->db->update('bencana',$data);                        
                }
	}

