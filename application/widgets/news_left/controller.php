<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class News_left_widget extends MY_Widget

{

    // Nhận 2 biến truyền vào

    function index(){

        

        $data['lists'] = $this->system_model->get_data('news',array(
            'lang' => $this->language,
            'hot'=>1,
        ),array(),false,4,0);
			

		//var_dump($data['pros']);die;

	    $this->load->view('view',$data);

    }

}