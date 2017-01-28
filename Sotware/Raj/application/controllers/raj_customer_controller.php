<?php 
class Raj_customer_controller extends MY_Controller{

	public function add_customer(){

				$this->load->view("admin/raj_add_customer");
	}
		public function load_edit_page($cusId){
		$customer=$this->customer->get_customer_Info($cusId);
		$this->load->view("admin/raj_edit_customer",compact('customer'));

	}
		public function editData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->customer->updateData($post,$post['cusId'])){
							$this->session->set_flashdata('feedback','Customer Update Successfull');
							$this->session->set_flashdata('feedback_class','success');
								}
						else{
							$this->session->set_flashdata('feedback','Customer Fail to Update,Please Try Again');
							$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_customer_controller/view_customer');

			}
	public function view_customer(){
					$this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_customer_controller/raj_view_customer'),
								'per_page'	=>5,
								'total_rows'=>$this->customer->get_count_storeData(),
								'full_tag_open'=>"<ul class='pagination'>",
								'full_tag_close'=>"</ul>",
								'first_tag_open'=>"<li>",
								'first_tag_close'=>"</li>",
								'last_tag_open'=>"<li>",
								'last_tag_close'=>"</li>",
								'next_tag_open'=>"<li>",
								'next_tag_close'=>"</li>",
								'prev_tag_open'=>"<li>",
								'prev_tag_close'=>"</li>",
								'num_tag_open'=>"<li>",
								'num_tag_close'=>"</li>",
								'cur_tag_open'=>"<li class='active'><a>",
								'cur_tag_close'=>"</a></li>"
							];
			$this->pagination->initialize($config);
			$customers=$this->customer->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_view_customer',compact('customers'));
		}
			public function saveData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->customer->saveData($post)){
									$this->session->set_flashdata('feedback','Customer Add Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Customer Fail to add,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
						return redirect('raj_customer_controller/add_customer');

			}

	public function __construct(){
				parent::__construct();
				$this->load->model('raj_customer_model','customer');

					}

	

}