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
            $this->db->where('bencana.soft_delete',0);
			$query = $this->db->get();
            return $query->result();
		}

		function get_by_name_lim($data,$config){
            $this->db->select('*');
            $this->db->from('bencana');
			$this->db->like('lower(nama)',$data);
            $this->db->where('bencana.soft_delete',0);
            $this->db->limit($config['per_page'],$this->uri->segment(3));
			$query = $this->db->get();
            return $query->result();
		}		
			
		function update($where,$data){
			$this->db->where($where);
			$this->db->update('bencana',$data);
		}

		function get(){
			$q = $this->db->get('bencana');
			return $q->result();
		}

		function get_where($data){			
			$q = $this->db->get_where('bencana',$data);
			return $q->result();
		}

		function get_lim($config){
			$this->db->where("soft_delete",0);
			$query = $this->db->get('bencana',$config['per_page'],$this->uri->segment(3));	
			return $query->result();
		}
		function get_where_lim($config,$data){
			$this->db->where($data);
			$query = $this->db->get('bencana',$config['per_page'],$this->uri->segment(3));	
			return $query->result();
		}

		function insert($data)
		{
			$this->db->insert('bencana',$data);
			$insert_id = $this->db->insert_id();
   			return  $insert_id;			
		}
        
                function delete($id_bencana){
                        $data['soft_delete']=1;
                        $this->db->where('bencana.id',$id_bencana);
                        $this->db->update('bencana',$data);                        
                }
                
                function get_data_by_id($id_bencana){
                        $this->db->from('bencana');
                        $this->db->where('bencana.id',$id_bencana);
                        $query = $this->db->get();
                        return $query->result();
                }
                
                function update_pengungsi($where,$data){
                    $this->db->where($where);
                    $this->db->update('bencana',$data);
                }
                
	}

