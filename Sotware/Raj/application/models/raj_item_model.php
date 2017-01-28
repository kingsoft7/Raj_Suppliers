<?php 

class Raj_item_model extends CI_Model{


	public function saveData($data){
				try {
			 	$this->db->trans_begin();
   		   		$res= $this->db->insert('item', $data);  
   		      	if(!$res) throw new Exception($this->db->_error_message(), $this->db->_error_number());
   		      		$this->db->trans_commit();
   			} catch (Exception $e) {
				$this->db->trans_rollback();
    			$res=0;		
			}
			return $res;
	}

	public function get_storeData($limit,$offset){
				$query=$this->db
								->from('item')
						 		->limit($limit,$offset)
						 		->order_by('item_id','asc')
						 		->get();
				return $query->result();
	}

	public function get_count_storeData(){
				$query=$this->db
								->from('item')
						 		->get();
				return $query->num_rows();
	}
	public function find_details($item_id){
		$query=$this->db
						->from('item')
						->where('item_id',$item_id)
						->get();
		return $query->row();
	}
	public function updateData($data,$id){
		return $this->db->where('item_id',$id)
					->update('item', $data); 
	}




	public function get_all_data(){
					$query=$this->db
								->from('item')
						 		->get();
				return $query->result();

	}
}