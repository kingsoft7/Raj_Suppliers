<?php 
class Raj_subItem_controller extends MY_Controller
{
	public function __construct(){
				parent::__construct();
				$this->load->model('raj_subItem_model','subItem');
				$this->load->model('raj_item_model','item');
					}
public function load_subItem_page(){
		$arr['items']=$this->item->get_all_data();
			$this->load->view('admin/raj_add_subItem',compact('arr'));

}
public function view_stock_page(){
		$this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_subItem_controller/view_stock_page'),
								'per_page'	=>10,
								'total_rows'=>$this->subItem->get_count_storeData(),
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
			$subItems=$this->subItem->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_stock',compact('subItems'));
}
public function load_subItem_view_page(){
			$this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_subItem_controller/load_subItem_view_page'),
								'per_page'	=>10,
								'total_rows'=>$this->subItem->get_count_storeData(),
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
			$subItems=$this->subItem->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_view_subItem',compact('subItems'));
		}
public function saveData(){				
			$post=$this->input->post();
			unset($post['submit']);
					if($this->subItem->saveData($post)){
									$this->session->set_flashdata('feedback','Item Details Add Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to add Item Details,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
						return redirect('raj_subItem_controller/load_subItem_page');
			}
	public function load_edit_page($subItem_id){
		$subItem=$this->subItem->find_details($subItem_id);
		$this->load->view("admin/raj_edit_subItem",compact('subItem'));

	}
		public function editData(){				
					$post=$this->input->post();
					unset($post['submit']);
					unset($post['item_name']);
					if($this->subItem->updateData($post,$post['subItem_id'])){
							$this->session->set_flashdata('feedback','Item Update Successfull');
							$this->session->set_flashdata('feedback_class','success');
								}
						else{
							$this->session->set_flashdata('feedback','Item Fail to Update,Please Try Again');
							$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_subItem_controller/load_subItem_view_page');

			}

	

}