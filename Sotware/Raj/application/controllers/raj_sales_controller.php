<?php 
class Raj_sales_controller extends MY_Controller
{
	public function __construct(){
				parent::__construct();
				$this->load->model('raj_item_model','item');
				$this->load->model('raj_subItem_model','subItem');
				$this->load->model('raj_sales_model','order');
				$this->load->model('raj_customer_model','customer');
					}
	public function load_edit_order_tax_page(){
        $tax=$this->order->find_tax_details(2);
     //   echo "Con";
      //  echo "<pre>";
//print_r($tax);
		$this->load->view("admin/raj_edit_s_tax",compact('tax'));
	}
	public function update_tax_Data(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->order->update_tax_Data($post,2)){
									$this->session->set_flashdata('feedback','Tax Update Successfully');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to Update Tax,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_sales_controller/load_edit_order_tax_page');

			}				
	public function load_order_step_one_page(){
			$arr['orders']=$this->order->get_allTempOrderData();
			$arr['items']=$this->item->get_all_data();
			$arr['customers']=$this->customer->get_all_data();
			$arr['tax']=$this->order->find_tax_details(2);
			$this->load->view('admin/raj_sales_step_one',compact('arr'));
	}

	public function selectItemData(){
		$subItem_id=$this->input->post('item_id');
		$arr['item_id']=$subItem_id;
		$arr['subItem']=$this->subItem->find_details_for_subItem($subItem_id);
		$this->load->view('admin/raj_sales_step_two',compact('arr'));
	}
	public function load_edit_page($item_id){
		$item=$this->item->find_details($item_id);
		$this->load->view("admin/raj_edit_item",compact('item'));

	}
	public function saveTempData(){				
					$post=$this->input->post();
					unset($post['submit']);
					if($this->order->saveTempData($post)){
									$this->session->set_flashdata('feedback','Add item Successfully');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to add Item,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_sales_controller/load_order_step_one_page');

			}
	public function load_delete_temp_order($id){

			if($this->order->deleteTempOrder($id)){
									$this->session->set_flashdata('feedback','Item Delete Successfully');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to Delete Item,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_sales_controller/load_order_step_one_page');

	}

	public function saveOrder(){
		$data=$this->input->post();
		unset($data['submit']);
		$data['orderDate']=date('Y-m-d',strtotime($data['orderDate']));
		$tempOrder=$this->order->get_allTempOrderData();
        $res=$this->order->saveOrder($data);
				if($res){
					$max=$this->order->getMaxRecord();
					$this->order->moveData($tempOrder,$max);
									$this->session->set_flashdata('feedback','Invoice Makes Successfull');
									$this->session->set_flashdata('feedback_class','success');
								}
						else{
									$this->session->set_flashdata('feedback','Fail to Make Invoice,Please Try Again');
									$this->session->set_flashdata('feedback_class','danger');
							}
					return redirect('raj_sales_controller/load_order_step_one_page');
	}
public function view_order_page(){
	$this->load->library('pagination');
					$config=[
								'base_url'	=>	base_url('index.php/raj_sales_controller/view_order_page'),
								'per_page'	=>10,
								'total_rows'=>$this->order->get_count_storeData(),
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
			$orders=$this->order->get_storeData($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/raj_view_sales_order',compact('orders'));
}
public function load_view_old_order($order_id){
		$arr['orderdetails']=$this->order->get_order_details($order_id);
		$arr['order']=$this->order->get_order_data($order_id);
		$this->load->view('admin/raj_view_sales_order_details',compact('arr'));
}
}