<?php 

class Login_model extends CI_Model{

	public function login_valid($userName,$password){
		$q=$this->db->where(['userName'=>$userName,'userPassword'=>$password])
						->get('user');
		if($q->num_rows())
		{
			return $q->row()->userId;
		}else{
			return FALSE;
		}

	}
}