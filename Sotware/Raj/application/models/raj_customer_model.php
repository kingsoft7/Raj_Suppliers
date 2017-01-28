<?php 

class Raj_customer_model extends CI_Model{


	public function saveData($data){
		try {
			 	$this->db->trans_begin();
   		   		$res= $this->db->insert('customer', $data);  
   		      	if(!$res) throw new Exception($this->db->_error_message(), $this->db->_error_number());
   		      		$this->db->trans_commit();
   			} catch (Exception $e) {
				$this->db->trans_rollback();
    			$res=0;		
			}
			return $res;
	}
	public function updateData($data,$id){
		try {
			 	$this->db->trans_begin();
   		   		$res=$this->db->where('cusId',$id)
						  ->update('customer', $data); 
   		      	if(!$res) throw new Exception($this->db->_error_message(), $this->db->_error_number());
   		      		$this->db->trans_commit();
   			} catch (Exception $e) {
				$this->db->trans_rollback();
    			$res=0;		
			}
			return $res;
	}

	public function get_count_storeData(){
				$query=$this->db
								->from('customer')
								->get();
				return $query->num_rows();
	}

	public function get_storeData($limit,$offset){
				$query=$this->db
								->from('customer')
						 		->limit($limit,$offset)
						 		->order_by('cusId','desc')
						 		->get();
				return $query->result();
	}
		public function get_all_data(){
					$query=$this->db
								//->select('supId,supName,supBalance')
						 		->get('customer');
				return $query->result();

	}

		public function get_customer_Info($cusId){

		$query=$this->db
						->from('customer')
						->where('cusId',$cusId)
						->get();
		return $query->row();
	}

}