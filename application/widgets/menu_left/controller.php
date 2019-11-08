<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Menu_left_widget extends MY_Widget

{

    // Nhận 2 biến truyền vào

    function index(){

        

		//$this->load->model('f_homemodel');

		

		//san pham mới	

		$data['menu_main_root'] = $this->system_model->get_data('product_danhmuc_phutung',array('parent_id'=>0),array());
        
      
        foreach ($data['menu_main_root'] as $key => $cat) {
            $data['menu_main_root'][$key]->menu_sub =  $this->system_model->get_data('product_danhmuc_phutung',array('parent_id ='=>$cat->id),array());
        }

			

		//var_dump($data['pros']);die;

	    $this->load->view('view',$data);

    }

}