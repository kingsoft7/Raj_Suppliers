<?php 
class Raj_suppliers_controller extends MY_Controller{

	public function __construct(){
				parent::__construct();
				$this->load->model('raj_suppliers_model','suppliers');

					}
	public function raj_add_suppliers(){

				$this->load->view("admin/raj_add_suppliers");
	}
	public function load_edit_page($supId){
		$suppliers=$this->suppliers->get_suppliers_Info($supId);
		$this->load->view("admin/raj_edit_suppliers",compact('suppliers'));

	}
	public function editData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->suppliers->updateData($post,$post['supId'])){
							$this->session->set_flashdata('feedback','suppliers Update Successfull');
							$this->session->set_flashdata('feedback_class','success');
								}
						else{
							$this->session->set_flashdata('feedback','suppliers Fail to Update,Please Try Again');
							$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_suppliers_controller/raj_view_suppliers');

			}
	public function raj_view_suppliers(){
					$this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_suppliers_controller/raj_view_suppliers'),
								'per_page'	=>10,
								'total_rows'=>$this->suppliers->get_count_storeData(),
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
			$suppliers=$this->suppliers->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_view_suppliers',compact('suppliers'));
		}
	public function saveData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->suppliers->saveData($post)){
									$this->session->set_flashdata('feedback','suppliers Add Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to add suppliers,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
						return redirect('raj_suppliers_controller/raj_add_suppliers');

			}



	

}