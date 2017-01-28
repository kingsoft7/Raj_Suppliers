<?php
 
class Export_model extends CI_Model{
   
public  function getStockData(){
      	$query=$this->db
								->from('subItem','item')
								->join('item', 'item.item_id = subItem.item_id')
						 		->order_by('subItem_id','asc')
						 		->get();
						return $query->result();
  }
 
}