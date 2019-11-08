<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Product_phutung_widget extends MY_Widget

{

    // Nhận 2 biến truyền vào

    function index(){

        

		//$this->load->model('f_homemodel');

		

		//san pham mới	

		$data['pros'] = $this->system_model->get_data('product_phutung',array(


            ),array('id' => 'desc'),false,null,null);

			

		//var_dump($data['pros']);die;

	    $this->load->view('view',$data);

    }

}