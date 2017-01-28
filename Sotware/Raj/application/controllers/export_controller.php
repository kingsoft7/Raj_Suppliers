<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Export_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
             // Load the Library
        $this->load->library("excel");
        // Load the Model
       $this->load->model("export_model");
          
    }
    public function stockData(){
        $data=$this->export_model->getStockData();
        $this->excel->exportData($data);
      return redirect('raj_subItem_controller/view_stock_page');
    }

}