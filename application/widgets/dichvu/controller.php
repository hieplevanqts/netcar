<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dichvu_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		$this->load->model('f_newsmodel');
		
		$data['dichvu'] = $this->f_homemodel->get_data123('news_category',6,10,array('id','asc'),false,null,null);
		// echo '<pre>';
		// print_r($data['dichvu']);
		// die();
		foreach ($data['dichvu'] as $value) {
			$value->items = $this->f_newsmodel->getNewsByCategory($value->id,4,0);	
		}			
		$this->load->view('view',$data);
    }
}