<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rao_vat_home_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		//$this->load->model('f_homemodel');
		
        //san pham mới	
        $this->load->model('f_productmodel');
        $data['lists'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('active'=>1),10,0,false);

           
		//var_dump($data['pros']);die;
	    $this->load->view('view',$data);
    }
}