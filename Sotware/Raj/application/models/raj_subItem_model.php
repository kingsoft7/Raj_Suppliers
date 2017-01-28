<?php 

class Raj_subItem_model extends CI_Model{


	public function saveData($data){
		try {
			 	$this->db->trans_begin();
   		   		$res= $this->db->insert('subItem', $data); 
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
								//->select('subItem_id','subItem_type','subItem_value','subItem_mrp','item_name')
								->from('subItem','item')
								->join('item', 'item.item_id = subItem.subItem_id')
								//->like('vehNumber',$search_by)
						 		->get();
				return $query->num_rows();
	}

	public function get_storeData($limit,$offset){
				$query=$this->db
								//->select('subItem_id','subItem_type','subItem_value','subItem_mrp','item_name')
								->from('subItem','item')
								->join('item', 'item.item_id = subItem.item_id')
						 		->limit($limit,$offset)
						 		->order_by('subItem_id','asc')
						 		//->like('vehNumber',$search_by)
						 		->get();
						return $query->result();
	}
		public function find_details($subItem_id){
		$query=$this->db
						->from('subItem')
						->join('item', 'item.item_id = subItem.item_id')
						->where('subItem_id',$subItem_id)
						->get();
		return $query->row();
	}
	public function find_details_for_subItem($subItem_id){
		$query=$this->db
						->from('subItem')
						->where('item_id',$subItem_id)
						->get();
		return $query->result();
	}
	public function updateData($data,$id){
		return $this->db->where('subItem_id',$id)
					->update('subItem', $data); 
	}
}