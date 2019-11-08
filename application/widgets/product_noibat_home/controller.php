<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_noibat_home_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		//$this->load->model('f_homemodel');
		
        //san pham mới	
        $data['pros_1'] = $this->raovat_model->getFirstRowWhere('product',array('focus' => 1,'hot' => 1,'lang' => $this->language));

		$data['pros_2'] = $this->system_model->get_data('product',array(
            'focus' => 1,
            'lang' => $this->language,
            'hot'=>1,
            ),array('sort' => 'desc'),false,3,1);
        $data['pros_3'] = $this->system_model->get_data('product',array(
            'focus' => 1,
            'lang' => $this->language,
            'hot'=>1,
            ),array('sort' => 'desc'),false,1,4);
        $data['pros_4'] = $this->system_model->get_data('product',array(
            'focus' => 1,
            'lang' => $this->language,
            'hot'=>1,
            ),array('sort' => 'desc'),false,3,5);
            $data['cate_all'] = $this->system_model->get_data('raovat_hangxe',array(
                //'home' => 1,
                // 'lang' => $this->language,
                // 'parent_id' => 0
                ),array('id' => 'desc'),false,5,0);
           
		//var_dump($data['pros']);die;
	    $this->load->view('view',$data);
    }
}