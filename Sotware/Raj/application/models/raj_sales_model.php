<?php 

class Raj_sales_model extends CI_Model{

	public function get_allTempOrderData(){
					$query=$this->db
								->from('tempsales','subItem','item')
								->join('subItem', 'subItem.subItem_id = tempsales.subItem_id')
								->join('item', 'item.item_id = subItem.item_id')
						 		->get();
				return $query->result();
	}
	public function saveTempData($data){
		try {
			 	$this->db->trans_begin();
   		   		$res= $this->db->insert('tempSales', $data); 
   		      	if(!$res) throw new Exception($this->db->_error_message(), $this->db->_error_number());
   		      		$this->db->trans_commit();
   			} catch (Exception $e) {
				$this->db->trans_rollback();
    			$res=0;		
			}
			return $res;
		
	    }
    public function deleteTempOrder($id){

            return $this -> db -> where('id', $id)
                               -> delete('tempSales');
          }
	public function saveOrder($data){
		try {

		 	$this->db->trans_begin();
   		    $res=$this->db->insert('sales', $data); 
   		     if(!$res) throw new Exception($this->db->_error_message(), $this->db->_error_number());
   		      		$this->db->trans_commit();
   			} catch (Exception $e) {
				$this->db->trans_rollback();
    			$res=0;		
			}
			return $res;
		
	}
	public function getMaxRecord(){
			$query = $this->db->query("SELECT max(order_id) as id FROM sales");
		    $row = $query->row();
		    return $row->id;
	}

 public function moveData($data,$id){
  		foreach ($data as $da) {
 					 $this->db->set('subItem_id', $da->subItem_id);
					 $this->db->set('item_price', $da->item_price);
			         $this->db->set('item_quntity', $da->item_quntity);
			         $this->db->set('order_id', $id);
			         $this->db->insert('salesdetails');
						}
						 $query = $this->db->query("SELECT stock FROM subItem where item_id=$da->item_id");
					 $row = $query->row();
					 $bStock=$row->stock;
             		 $nStock= array(
               				'stock' => $bStock-$da->item_quntity
             					);
             		 $this->db->where('subItem_id', $da->subItem_id)->update('subItem', $nStock);
			 		
 		$this->db->empty_table('tempSales'); 
 		}
	public function get_count_storeData(){
				$query=$this->db
								->from('sales')
								
						 		->get();
				return $query->num_rows();
	}

	public function get_storeData($limit,$offset){
				$query=$this->db
								//->select('subItem_id','subItem_type','subItem_value','subItem_mrp','item_name')
								->from('sales','customer')
								->join('customer', 'customer.cusId = sales.cusId')
						 		->limit($limit,$offset)
						 		->order_by('order_id','desc')
						 		//->like('vehNumber',$search_by)
						 		->get();
						return $query->result();
	}
		public function find_details($subItem_id){
		$query=$this->db
						->from('subItem','subItem')
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
	public function get_order_details($order_id){
			$query=$this->db
						->from('salesdetails','subItem','item')
						->join('subItem','subItem.subItem_id=salesdetails.subItem_id')	
						->join('item', 'item.item_id = subItem.item_id')
							//->select('supId,supName,supBalance')
						->where('order_id',$order_id)
						 ->get();
				return $query->result();
	}
	public function get_order_data($order_id){
		$query=$this->db
						->from('sales','customer')
						->join('customer','customer.cusId=sales.cusId')	
						->where('order_id',$order_id)
						 ->get();
				return $query->result();	
	}
	public function find_tax_details($id){
	$query=$this->db
						->from('tax')
						->where('id',$id)
						->get();
		return $query->row();	
	}
	public function update_tax_Data($data,$id){
		return $this->db->where('id',$id)
					->update('tax', $data); 
	}

}