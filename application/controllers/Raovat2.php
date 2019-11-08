<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Raovat2 extends MY_Controller

{

    function __construct()

    {

        

        parent::__construct();

        $CI =& get_instance();

        $this->load->model('f_productmodel');
        $this->load->helper('url','file');
        $this->load->model('raovat_model');
        $this->load->library('pagination');

    }

    protected $pagination_config= array(

        'full_tag_open'=>"<ul style='float:right;' class='pagination phantrang'>",

        'full_tag_close'=>"</ul>",

        'first_link' => 'Trang đầu',

        'last_link' => 'Trang cuối',

        'num_links' => 2,

        'num_tag_open'=>'<li>',

        'num_tag_close'=>'</li>',

        'cur_tag_open'=>"<li class='disabled'><li class='active'><a href='#'>",

        'cur_tag_close'=>"<span class='sr-only'></span></a></li>",

        'next_tag_open'=>"<li>",

        'next_tagl_close'=>"</li>",

        'prev_tag_open'=>"<li>",

        'prev_tagl_close'=>"</li>",

        'first_tag_open'=>"<li>",

        'first_tagl_close'=>"</li>",

        'last_tag_open'=>"<li>",

        'last_tagl_close'=>"</li>",

    );

    public function pro_bycategory($alias){

		

		

        $this->Check_alias($alias);

        $data = array();

        $data['cate_curent'] = $current = $this->f_productmodel->getFirstRowWhere('product_category',array('alias'=>$alias));

        $config['base_url'] = base_url('danh-muc/'.$alias.'.html');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = $this->f_productmodel->count_ProbyCate($current->id);

        $config['per_page'] = 12; // xác định số record ở mỗi trang

        $config['uri_segment'] = 4; // xác định segment chứa page number

        $config=array_merge($config,$this->pagination_config);

        $this->pagination->initialize($config);

        $sort = $this->input->get('sort');

        $order = array('product.id','desc');

        if($sort != null){

            if($sort == '0'){

                $order = array('product.id','desc');

            }

            if($sort == 'asc'){

                $order = array('product.id','asc');

            }

            if($sort=='desc'){

                $order = array('product.id','desc');

            }

        }

        $data['lists'] = $lists = $this->f_productmodel->getProbyCate($current->id,$order,$config['per_page'],$this->input->get('per_page'));

         foreach($data['lists'] as $key => $item){

            $data['lists'][$key]->img = $this->system_model->getFields('p_images','id,image,name',array(

            'id_item' => $item->id

        ));

        }

            

        

        $data['home_left']=$this->load->widget('home_left');

       // $data['doitac']=$this->load->widget('doitac');

        $data['cate'] = $this->system_model->get_data('product_category',array(

            'lang' => $this->language

        ),array());

        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');



        $this->LoadHeader(null,$seo,true);

        $this->load->view('products/pro_bycategory',$data);

        $this->LoadFooter();

    }

    //product detail

    public function detail2($alias){

        // $this->Check_alias($alias);

         $data = array();

        $data['item']               = $item = $this->system_model->getFirstRowWhere('raovat', array('alias' => $alias,), array(), true);
        if(isset($item->id_hangxe)){$data['hang_xe'] = $hang_xe = $this->system_model->getFirstRowWhere('raovat_hangxe', array('id' => $item->id_hangxe), array(), true);}
        if(isset($hang_xe->id)){$data['dong_xe'] = $dong_xe = $this->system_model->getFirstRowWhere('raovat_dongxe', array('id_hangxe' => $hang_xe->id), array(), true);}
        
        

        $data['images']             = $this->system_model->get_data('raovat_images',array('id_item'=>$item->id,),array());
        $data['tinrao_lienquan']    = $this->system_model->getCateHome1('raovat',array('id_hangxe'=>$item->id_hangxe,),6,0,false);
        $data['tien_nghi']          = $this->system_model->getCateHome2('raovat_tiennghi',array(),null,null,false);
        $data['an_toan']            = $this->system_model->getCateHome2('raovat_antoan',array(),null,null,false);
        $data['list_cung_nguoi_dang']    = $this->system_model->getCateHome1('raovat',array('email_nguoi_ban'=>$item->email_nguoi_ban,),null,null,false);
     
// echo '<pre>';
// print_r($data['an_toan']);
// die();


//         /*Nâng cấp Đặng Trần Mạnh*/

//         $data['array_json'] = json_decode($data['item']->config_pro);

//         $arr1 = json_decode($this->option->config_pro_content);

//         if(!empty($data['array_json'])){

//             foreach ($arr1 as $key => $cat) {

//                 if (isset($data['array_json'][$key]->content)) {

//                     $arr1[$key]->content =  $data['array_json'][$key]->content;

//                 }

//             }

//         }

//         $data['thuoctinh'] = $arr1;

//         /*Nâng cấp Đặng Trần Mạnh*/



//         $data['cate'] = $this->system_model->get_data('product_category',array(

//             'lang' => $this->language

//         ),array());

        // cap nhat view

        if (!$this->session->userdata('session_pro_' . $data['item']->id)) {

            $this->session->set_userdata('session_pro_' . $data['item']->id, 1);

            $view = 1;

        } else {

            $view = 1;

        }

        $view = $data['item']->view + $view;

        $this->system_model->Update_where('raovat', array('id' => $data['item']->id), array('view' => $view));

        // $data['cate_current'] = $this->system_model->getFirstRowWhere('product_category', array(

        //     'id' => $item->category_id

        // ));

// 		//sp lien quan

// 		$data['list_item'] = $this->f_productmodel->getProductSimilar($item->id,@$item->category_id,10,0);

// 		//var_dump($data['list_item']);die;

//         //sp da xem

// $data['pro_view']=array();

//         if (!$this->session->userdata('pro_view_old')) {

//             $this->session->set_userdata('pro_view_old',$item->id);

//         } else {

//             if (!in_array($item->id, explode(',', $this->session->userdata('pro_view_old'))) ) {

//                 $pro_view_old = $this->session->userdata('pro_view_old').','.$item->id;

//                 $this->session->set_userdata('pro_view_old',$pro_view_old);

                

//             }

//             $data['pro_view'] = $this->f_productmodel->getField_array('product','*','id IN ('.$this->session->userdata('pro_view_old').')');

//         }



        

//          $data['p_color'] = $this->f_productmodel->getwherejoincolor($data['item']->id);
//         //var_dump($data['p_color']);die();
//          //more images

//         $data['p_images'] = $this->f_productmodel->getFields('p_images','id,image',array(

//             'id_item' => $item->id

//         ));

//         $data['locale_name'] = $this->system_model->getFirstRowWhere('product_locale', array(

//             'id' => $item->locale

//         ));

     
//          $data['size'] = $this->f_productmodel->getProductSize($data['item']->id);



//         $data['doitac']=$this->load->widget('doitac');

//          // danh sach binh luận

//         $data['view_comment'] = $this->load->widget('comment',array($item->id));

//           // danh sach câu hoi

//         $data['view_question'] = $this->load->widget('question',array($item->id));

//         $link_img = 'upload/img/products/'.$data['item']->pro_dir.'/thumbnail_2_'.$data['item']->image;

//         $seo=array('title'=>@$data['item']->title_seo==''

//          || @$data['item']->title_seo== '0' ?$data['item']->name:$data['item']->title_seo,

//                    'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,

//                    'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->name):$data['item']->keyword_seo,

//                    'image'=> $link_img,

//                    'type'=>'products');



         $seo=array();

        $this->LoadHeader(null,$seo,true);

        $this->load->view('raovat/view_detail',$data);

        $this->LoadFooter();

    }



    public function all_products(){

        $data = array();

        $where = array('lang'=>$this->language);

        $config['base_url'] = base_url('tin-rao');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = $this->f_productmodel->Count('raovat',$where);

        $config['per_page'] = 8; // xác định số record ở mỗi trang

        $config['uri_segment'] = 4; // xác định segment chứa page number

        $config=array_merge($config,$this->pagination_config);

        $this->pagination->initialize($config);

        $sort = $this->input->get('sort');

        $order = array('id','asc');

        if($sort != null){

            if($sort == '0'){

                $order = array('raovat.id','desc');

            }

            if($sort == 'asc'){

                $order = array('raovat.id','asc');

            }

            if($sort=='desc'){

                $order = array('raovat.id','desc');

            }

        }

        // $data['lists'] = $lists = $this->f_productmodel->get_data('raovat',$where,$order,false,$config['per_page'],$this->input->get('per_page'));

        $data['lists'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('active'=>1),$config['per_page'],$this->input->get('per_page'),false);
        // echo '<pre>';
        // print_r($lists);
        // die();

         foreach($data['lists'] as $key => $item){

            $data['lists'][$key]->img = $this->system_model->get_data('raovat_images',array(

            'id_item' => $item->id

        ));
        $data['image']= $this->system_model->getFirstRowWhere('raovat_images',array(

            'id_item' => $item->id

        ));
        $data['dong_xe']= $this->system_model->getFirstRowWhere('raovat_dongxe',array(

            'id' => $item->dong_xe

        ));
        }
        


        $data['list_sap_ra_mat']    = $this->system_model->getCateHome1('raovat',array('hot'=>1),6,0,false);
        $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');

        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');
        $data['raovat_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array(),array());
        $data['city'] = $this->raovat_model->get_data('raovat_city',array(),array());
// echo '<pre>';
// print_r($data['list_sap_ra_mat']);
// die();


        $this->LoadHeader(null,$seo,true);

        $this->load->view('raovat/all_pro',$data);

        $this->LoadFooter();

    }
    /////////////////////////////////////////////////////////////////// HÀM XỬ LÝ TẤT CẢ CÁC TIN RAO CÙNG NGƯỜI BÁN //////////////////////////////////

    public function all_cung_nguoi_ban(){
        
        
        $data = array();

        $where = array('lang'=>$this->language);

        $config['base_url'] = base_url('tin-rao');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = $this->f_productmodel->Count('raovat',$where);

        $config['per_page'] = 8; // xác định số record ở mỗi trang

        $config['uri_segment'] = 4; // xác định segment chứa page number

        $config=array_merge($config,$this->pagination_config);

        $this->pagination->initialize($config);

        $sort = $this->input->get('sort');

        $order = array('id','asc');

        if($sort != null){

            if($sort == '0'){

                $order = array('raovat.id','desc');

            }

            if($sort == 'asc'){

                $order = array('raovat.id','asc');

            }

            if($sort=='desc'){

                $order = array('raovat.id','desc');

            }

        }
        $data['info_item'] = $lists = $this->f_productmodel->getCateHome1('raovat_users',array('id'=>$this->uri->rsegment('3')),null,null,false);

        // $data['lists'] = $lists = $this->f_productmodel->get_data('raovat',$where,$order,false,$config['per_page'],$this->input->get('per_page'));

        $data['lists'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('id'=>$this->uri->rsegment('3')),$config['per_page'],$this->input->get('per_page'),false);
        echo '<pre>';
        print_r($data['info_item']);
        die();

         foreach($data['lists'] as $key => $item){

            $data['lists'][$key]->img = $this->system_model->get_data('raovat_images',array(

            'id_item' => $item->id

        ));
        $data['image']= $this->system_model->getFirstRowWhere('raovat_images',array(

            'id_item' => $item->id

        ));
        $data['dong_xe']= $this->system_model->getFirstRowWhere('raovat_dongxe',array(

            'id' => $item->dong_xe

        ));
        }
        


        $data['list_sap_ra_mat']    = $this->system_model->getCateHome1('raovat',array('hot'=>1),6,0,false);
        $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');

        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');
        $data['raovat_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array(),array());
        $data['city'] = $this->raovat_model->get_data('raovat_city',array(),array());
// echo '<pre>';
// print_r($data['list_sap_ra_mat']);
// die();


        $this->LoadHeader(null,$seo,true);

        $this->load->view('raovat/all_cung_nguoi_ban',$data);

        $this->LoadFooter();
   

    }



    ////////////////////////////////////////////////////////////////// Hàm xử lý mục bài đăng của thành viên    ///////////////////////////////////////////////
    public function bai_dang($alias){

        // $this->Check_alias($alias);

         $data = array();

        $data['item']               = $item = $this->system_model->getFirstRowWhere('raovat', array('alias' => $alias,), array(), true);
        $data['hang_xe']            = $hang_xe = $this->system_model->getFirstRowWhere('raovat_hangxe', array('id' => $item->id_hangxe), array(), true);
        $data['dong_xe']            = $dong_xe = $this->system_model->getFirstRowWhere('raovat_dongxe', array('id_hangxe' => $hang_xe->id), array(), true);

        $data['images']             = $this->system_model->get_data('raovat_images',array('id_item'=>$item->id,),array());
        $data['tinrao_lienquan']    = $this->system_model->getCateHome1('raovat',array('id_hangxe'=>$item->id_hangxe,),6,0,false);
        $data['tien_nghi']          = $this->system_model->getCateHome2('raovat_tiennghi',array(),null,null,false);
        $data['an_toan']            = $this->system_model->getCateHome2('raovat_antoan',array(),null,null,false);
        $data['lists'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('email_nguoi_ban'=>'vanhiep2008@gmail.com'),null,null,false);
     
// echo '<pre>';
// print_r($data['an_toan']);
// die();


//         /*Nâng cấp Đặng Trần Mạnh*/

//         $data['array_json'] = json_decode($data['item']->config_pro);

//         $arr1 = json_decode($this->option->config_pro_content);

//         if(!empty($data['array_json'])){

//             foreach ($arr1 as $key => $cat) {

//                 if (isset($data['array_json'][$key]->content)) {

//                     $arr1[$key]->content =  $data['array_json'][$key]->content;

//                 }

//             }

//         }

//         $data['thuoctinh'] = $arr1;

//         /*Nâng cấp Đặng Trần Mạnh*/



//         $data['cate'] = $this->system_model->get_data('product_category',array(

//             'lang' => $this->language

//         ),array());

        // cap nhat view

        if (!$this->session->userdata('session_pro_' . $data['item']->id)) {

            $this->session->set_userdata('session_pro_' . $data['item']->id, 1);

            $view = 1;

        } else {

            $view = 1;

        }

        $view = $data['item']->view + $view;

        $this->system_model->Update_where('raovat', array('id' => $data['item']->id), array('view' => $view));

        // $data['cate_current'] = $this->system_model->getFirstRowWhere('product_category', array(

        //     'id' => $item->category_id

        // ));

// 		//sp lien quan

// 		$data['list_item'] = $this->f_productmodel->getProductSimilar($item->id,@$item->category_id,10,0);

// 		//var_dump($data['list_item']);die;

//         //sp da xem

// $data['pro_view']=array();

//         if (!$this->session->userdata('pro_view_old')) {

//             $this->session->set_userdata('pro_view_old',$item->id);

//         } else {

//             if (!in_array($item->id, explode(',', $this->session->userdata('pro_view_old'))) ) {

//                 $pro_view_old = $this->session->userdata('pro_view_old').','.$item->id;

//                 $this->session->set_userdata('pro_view_old',$pro_view_old);

                

//             }

//             $data['pro_view'] = $this->f_productmodel->getField_array('product','*','id IN ('.$this->session->userdata('pro_view_old').')');

//         }



        

//          $data['p_color'] = $this->f_productmodel->getwherejoincolor($data['item']->id);
//         //var_dump($data['p_color']);die();
//          //more images

//         $data['p_images'] = $this->f_productmodel->getFields('p_images','id,image',array(

//             'id_item' => $item->id

//         ));

//         $data['locale_name'] = $this->system_model->getFirstRowWhere('product_locale', array(

//             'id' => $item->locale

//         ));

     
//          $data['size'] = $this->f_productmodel->getProductSize($data['item']->id);



//         $data['doitac']=$this->load->widget('doitac');

//          // danh sach binh luận

//         $data['view_comment'] = $this->load->widget('comment',array($item->id));

//           // danh sach câu hoi

//         $data['view_question'] = $this->load->widget('question',array($item->id));

//         $link_img = 'upload/img/products/'.$data['item']->pro_dir.'/thumbnail_2_'.$data['item']->image;

//         $seo=array('title'=>@$data['item']->title_seo==''

//          || @$data['item']->title_seo== '0' ?$data['item']->name:$data['item']->title_seo,

//                    'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,

//                    'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->name):$data['item']->keyword_seo,

//                    'image'=> $link_img,

//                    'type'=>'products');



         $seo=array();

        $this->LoadHeader(null,$seo,true);

        $this->load->view('raovat/bai_dang',$data);

        $this->LoadFooter();
   
    } 
/////////////////////////////////////////////////////////////////////////////   HÀM XỬ LÝ TRANG QUẢN LÝ TIN ĐĂNG CỦA THÀNH VIÊN ///////////////////////////////////////////
public function quan_ly_tin(){
    if($this->session->userdata('user_id_login'))
    {
    $data = array();

    $where = array('lang'=>$this->language);
    $user_id_login = $this->session->userdata('user_id_login');
    $user_info = $this->system_model->getFirstRowWhere('raovat_users',array('id'=>$user_id_login));
    $data['all'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('email_nguoi_ban'=>$user_info->email),null,null,false);


    $config['base_url'] = base_url('quan-ly-tin');

    $config['page_query_string'] = TRUE;

    $config['enable_query_string'] = TRUE;

    $config['total_rows'] = Count($data['all']);

    $config['per_page'] = 8; // xác định số record ở mỗi trang

    $config['uri_segment'] = 4; // xác định segment chứa page number

    $config=array_merge($config,$this->pagination_config);

    $this->pagination->initialize($config);

    $sort = $this->input->get('sort');

    $order = array('id','asc');

    if($sort != null){

        if($sort == '0'){

            $order = array('raovat.id','desc');

        }

        if($sort == 'asc'){

            $order = array('raovat.id','asc');

        }

        if($sort=='desc'){

            $order = array('raovat.id','desc');

        }

    }

    // $data['lists'] = $lists = $this->f_productmodel->get_data('raovat',$where,$order,false,$config['per_page'],$this->input->get('per_page'));
    

    $data['lists'] = $lists = $this->f_productmodel->getCateHome1('raovat',array('email_nguoi_ban'=>$user_info->email),$config['per_page'],$this->input->get('per_page'),false);
    // echo '<pre>';
    // print_r($lists);
    // die();

     foreach($data['lists'] as $key => $item){

        $data['lists'][$key]->img = $this->system_model->get_data('raovat_images',array(

        'id_item' => $item->id

    ));
    $data['image']= $this->system_model->getFirstRowWhere('raovat_images',array(

        'id_item' => $item->id

    ));
    $data['dong_xe']= $this->system_model->getFirstRowWhere('raovat_dongxe',array(

        'id' => $item->dong_xe

    ));
    }
    


    $data['list_sap_ra_mat']    = $this->system_model->getCateHome1('raovat',array('hot'=>1),6,0,false);
    $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');

    $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

               'description'=>@$data['cate_curent']->description_seo,

               'keyword'=>@$data['cate_curent']->keyword_seo,

               'image'=>@$data['cate_curent']->image,

               'type'=>'products');
// echo '<pre>';
// print_r($data['list_sap_ra_mat']);
// die();


    $this->LoadHeader(null,$seo,true);

    $this->load->view('raovat/quan_ly_tin',$data);

    $this->LoadFooter();
    }else {
        $_SESSION['error'] = 'Bạn chưa đăng nhập !';
        redirect(base_url('login'));
    }
}

// HÀM SỬA BÀI VIẾT RAO VẶT CỦA THÀNH VIÊN - BY LÊ VĂN HIỆP - <WWW class="VANHIEP NET"></WWW>


public function delete_raovat_once($id){
    if (is_numeric($id)) {
        $item=$this->raovat_model->getFirstRowWhere('raovat',array('id'=>$id));
        $pathImage = "upload/img/raovats/";
        $dir_image = $item->raovat_dir;
        // xoa anh san pham
        if(file_exists($pathImage.$dir_image.'/'.$item->image))
        {
            @unlink($pathImage.$dir_image.'/'.$item->image);
        }
        // xoa anh thumb
        for($j = 1; $j <= 3; $j++)
        {
            $pathImage_thumb="";
            if(file_exists($pathImage_thumb.$dir_image.'/thumbnail_'.$j.'_'.$item->image))
            {
                @unlink($pathImage_thumb.$dir_image.'/thumbnail_'.$j.'_'.$item->image);
            }
        }
        $this->raovat_model->Delete_where('raovat',array('id' => $id));
        $item_alias =$this->raovat_model->getFirstRowWhere('alias',array('pro'=>$id));
        if(!empty($item_alias)){
            $this->raovat_model->Delete_where('alias',array('pro' => $id));
        }
        $this->raovat_model->Delete_where('raovat_to_category',array('id_raovat'=>$id));
        $this->raovat_model->Delete_where('pro_values',array('pro_id'=>$id));
        //delete more image
        $m_images = $this->raovat_model->getFields('raovat_images','id,image',array(
            'id_item' => $id
        ));
        foreach($m_images as $image){
            @unlink($image->image);
            $this->raovat_model->Delete_where('raovat_images', array('id'=>$image->id));
        }
    } else return false;
    $this->session->set_flashdata("mess", "Xóa thành công!");
    redirect($_SERVER['HTTP_REFERER']);
}



}