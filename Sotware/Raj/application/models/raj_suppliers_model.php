<?php 

class Raj_suppliers_model extends CI_Model{


	public function saveData($data){
		try {
			 	$this->db->trans_begin();
   		   		$res= $this->db->insert('suppliers', $data);  
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
   		   		$res=$this->db->where('supId',$id)
						  ->update('suppliers', $data); 
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
								->from('suppliers')
								->get();
				return $query->num_rows();
	}

	public function get_storeData($limit,$offset){
				$query=$this->db
								->from('suppliers')
						 		->limit($limit,$offset)
						 		->order_by('supId','asc')
						 		->get();
				return $query->result();
	}
	public function get_all_data(){
					$query=$this->db
								//->select('supId,supName,supBalance')
						 		->get('suppliers');
				return $query->result();

	}
    public function get_suppliers_Info($supId){

		$query=$this->db
						->from('suppliers')
						->where('supId',$supId)
						->get();
		return $query->row();
	}

}