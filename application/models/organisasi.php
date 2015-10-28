<?php
	class organisasi extends CI_Model
	{
            function __construct()
            {
		parent::__construct();
		$this->load->database();
            }		                
                
            function get_by_name($data){
                $this->db->select('*');
                $this->db->from('organisasi');
                $this->db->like('lower(nama)',$data);
                $this->db->where('organisasi.soft_delete',0);
                $query = $this->db->get();
                return $query->result();
            }

            function get_by_name_lim($data,$config){
                $this->db->select('*');
                $this->db->from('organisasi');
                $this->db->like('lower(nama)',$data);
                $this->db->where('organisasi.soft_delete',0);
                $this->db->limit($config['per_page'],$this->uri->segment(3));
                $query = $this->db->get();
                return $query->result();
            }		
		

		function get(){
			$q = $this->db->get('organisasi');
			return $q->result();
		}
                
                function get_id_organisasi($id_organisasi){
                        $this->db->from('organisasi_bencana');
                        $this->db->where('organisasi_bencana.id',$id_organisasi);
                        $query = $this->db->get();
                        return $query->result();
                }
                
		function get_where($data){			
			$q = $this->db->get_where('organisasi',$data);
			return $q->result();
		}

		function get_lim($config){
			$this->db->where("soft_delete",0);
			$query = $this->db->get('organisasi',$config['per_page'],$this->uri->segment(3));	
			return $query->result();
		}
		function get_where_lim($config,$data){
			$this->db->where($data);
			$query = $this->db->get('organisasi',$config['per_page'],$this->uri->segment(3));	
			return $query->result();
		}

		function insert($data)
		{
			$this->db->insert('organisasi',$data);
			$insert_id = $this->db->insert_id();
   			return  $insert_id;			
		}
        
                function delete($id_organisasi){
                        $data['soft_delete']=1;
                        $this->db->where('organisasi.id',$id_organisasi);
                        $this->db->update('organisasi',$data);                        
                }
                
	}

