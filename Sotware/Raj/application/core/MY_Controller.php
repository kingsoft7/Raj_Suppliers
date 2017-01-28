<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function index(){
		
		if($this->session->userdata('user_id'))
			{
				$user_Id=$this->session->userdata('user_id');
				if($user_Id==1)
				$this->load->view('admin/admin_home');
				else
				$this->load->view('subadmin/home');
			}else
		 $this->load->view('public/login');
	}	
		
}