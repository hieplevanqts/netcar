<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Product_noibat_old_widget extends MY_Widget

{

    // Nhận 2 biến truyền vào

    function index(){

        

		//$this->load->model('f_homemodel');

		

		//san pham mới	
        $data['cate'] = $this->system_model->get_data('raovat_hangxe',array(
            // 'lang' => $this->language
        ),array(),false,5,0);

        $data['pros_1'] = $this->raovat_model->getFirstRowWhere('raovat',array('status' => 0));

		$data['pros_2'] = $this->system_model->get_data('raovat',array('status' => 0),array('sort' => 'desc'),false,3,1);
        $data['pros_3'] = $this->system_model->get_data('raovat',array('status' => 0),array('sort' => 'desc'),false,1,4);
        $data['pros_4'] = $this->system_model->get_data('raovat',array('status' => 0),array('sort' => 'desc'),false,3,5);

			

		//var_dump($data['pros']);die;

	    $this->load->view('view',$data);

    }

}