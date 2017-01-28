<?php 
class Login extends CI_Controller{
	public function subAdmin(){
		$this->load->view("public_header");
	}
	public function changePassword(){
		$this->load->model('users_model');	
		if($this->session->userdata('user_id')){

					if($this->users_model->changePassword($this->input->post('userName'),$this->input->post('userOldPassword'),$this->input->post('userNewPassword'))){
									$this->session->set_flashdata('feedback','User Name/Password change Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to change User Name/Password,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('login/call_to_change_password'); 
			}else{
				return redirect('login/call_to_change_password'); 
			}
				
		}	
	public function call_to_change_password(){
		// $data=$this->session->userdata(;user_id);
			if($this->session->userdata('user_id')){
				$this->load->view('admin/change_password');
				}
			else{
				 $this->load->view('public/login');
			}
		}
	
	public function index(){
		
		if($this->session->userdata('user_id'))
			$this->load->view('admin/admin_home');
        else
		 $this->load->view('public/login');
	}
	public function admin_login(){
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		if($this->form_validation->run('singup'))
		{ 
			$userName=$this->input->post('userName');
			$password=$this->input->post('password');
			//echo "Succcessfully User Name is $userName and Password is $password";
			$this->load->model('login_model');
			//echo "userName=".$userName ." passwor=".$password;
			$user_Id=$this->login_model->login_valid($userName,$password);
			if($user_Id)
			{
				//$this->session->set_userdata('user_id',$user_Id);
				$this->session->set_userdata('user_id',$user_Id);
				return redirect('login');
			}else{
				////fail
				$this->session->set_flashdata('Login_Fails','Invalid User Name/Password');
				 $this->load->view('public/login');
			}
		}else{
			$this->load->view('public/login'); 
		}
	}
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('userName');
		return redirect('login');
	}
}