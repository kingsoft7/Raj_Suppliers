<?php 
class Raj_item_controller extends MY_Controller
{
	public function __construct(){
				parent::__construct();
				$this->load->model('raj_item_model','item');

					}
	public function load_add_item_page(){

            $this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_item_controller/load_add_item_page'),
								'per_page'	=>10,
								'total_rows'=>$this->item->get_count_storeData(),
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
			$items=$this->item->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_add_item',compact('items'));

	}
	public function load_edit_page($item_id){
		$item=$this->item->find_details($item_id);
		$this->load->view("admin/raj_edit_item",compact('item'));

	}
	public function saveData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->item->saveData($post)){
									$this->session->set_flashdata('feedback','Item Add Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Item Fail to add,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_item_controller/load_add_item_page');

			}
	public function editData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->item->updateData($post,$post['item_id'])){
							$this->session->set_flashdata('feedback','Item Update Successfull');
							$this->session->set_flashdata('feedback_class','success');
								}
						else{
							$this->session->set_flashdata('feedback','Item Fail to Update,Please Try Again');
							$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_item_controller/load_add_item_page');

			}

	

}