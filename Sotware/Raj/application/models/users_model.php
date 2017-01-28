<?php 

class Users_model extends CI_Model {
	
	public function changePassword($userName,$userOldPassword,$userNewPassword){


					$query=$this->db
								->from('user')
								->where('userId',$this->session->userdata('user_id'))
								->where('userPassword',$userOldPassword)
								->get();
				$res= $query->num_rows();
				if($res)
				{
					$data = array(
               					'userPassword' =>$userNewPassword,
               					'userName' =>$userName
           						 );
						return $this->db->where('userId',$this->session->userdata('user_id'))
				 				 ->update('user', $data); 
		
				}else return 0;


	}
}