<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Products extends MY_Controller

{

    function __construct()

    {
        parent::__construct();

        $CI =& get_instance();

        $this->load->model('f_productmodel');

        $this->load->library('pagination');

    }

    protected $pagination_config= array(

        'full_tag_open'=>"<ul class='pagination phantrang'>",

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
        // $this->Check_alias($alias);

        $data = array();

        $data['cate_curent'] = $current = $this->f_productmodel->getFirstRowWhere('product_category',array('alias'=>$alias));
        
        $data['cate'] = $this->system_model->get_data('product_category',array(
            // 'lang' => $this->language,
            'parent_id'=>$data['cate_curent']->id,
        ),array());
        $data['banner'] = $this->system_model->get_data('images',array('type'=>'banner',),array(),false,3,0);
        $data['lists0'] = $lists0 = $this->f_productmodel->getProbyCate2($data['cate_curent']->id,array(),8,0);
        

//---------------------------------------------------------------------------------
            foreach($data['cate'] as $value)
                {
                        $data['lists1'] = $this->system_model->get_data('product',array(
                                            'lang' => $this->language,
                                            'category_id'=>$value->id,
                                        ),array());
                    $config['base_url'] = base_url('danh-muc/'.$value->alias.'.html');
                    $config['page_query_string'] = TRUE;
                    $config['enable_query_string'] = TRUE;
                    $config['total_rows'] = count($data['lists1']);
                    $config['per_page'] = 8; // xác định số record ở mỗi trang
                    $config['uri_segment'] = 4; // xác định segment chứa page number
                    $config=array_merge($config,$this->pagination_config);
                    $this->pagination->initialize($config);
                    $sort = $this->input->get('sort');
                    $order = array('product.id','desc');
                    if($sort != null)
                        {
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
                        $value->product = $this->f_productmodel->getProbyCate($value->id,$order,6,0);  
                                   
                }

        $data['home_left']=$this->load->widget('home_left');
       $data['dichvu']=$this->load->widget('dichvu');
        
        // $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,
        //            'description'=>@$data['cate_curent']->description_seo,
        //            'keyword'=>@$data['cate_curent']->keyword_seo,
        //            'image'=>@$data['cate_curent']->image,
        //            'type'=>'products');
        $seo = array();
        $this->LoadHeader2(null,$seo,true);
        $this->load->view('products/pro_bycategory',$data);
        $this->LoadFooter();
    }
//product detail

    public function detail($alias){
        
        // $this->Check_alias($alias);
        $data = array();
        $data['item'] = $item = $this->system_model->getFirstRowWhere('product', array(
            'alias' => $alias,
        ), array(), true);                                                                                                      
        
        /*Nâng cấp Đặng Trần Mạnh*/
        $data['array_json'] = json_decode($data['item']->config_pro);
        $arr1 = json_decode($this->option->config_pro_content);
        if(!empty($data['array_json'])){
            foreach ($arr1 as $key => $cat) {
                if (isset($data['array_json'][$key]->content)) {
                    $arr1[$key]->content =  $data['array_json'][$key]->content;
                }
            }
        }
        
        $data['thuoctinh'] = $arr1;
        /*Nâng cấp Đặng Trần Mạnh*/
        $data['cate'] = $this->system_model->get_data('product_category',array(
            'lang' => $this->language
        ),array());
         /*Nâng cấp Lê Văn Hiệp*/
  
         $data['img_xemoi'] = $this->system_model->get_data('product_xemoi_config',array(
            'id_product' => $data['item']->id,
        ),array());
      
        $data['img_firts_xemoi'] = $this->system_model->getFirstRowWhere('product_xemoi_config',array('id_product' => $data['item']->id
        ));
        $data['img_noithat'] = $this->system_model->get_data('p_images',array(
            'id_item' => $data['item']->id,
            'vitri'=>2,
        ),array(),false,null,null);
        $data['img_firts_noithat'] = $this->system_model->getFirstRowWhere('p_images',array(
            'id_item' => $data['item']->id,
            'vitri'=>2,
        ));
        
        $data['list_tinhnang'] = $this->system_model->get_data('product_tinhnang_noibat',array(
            'id_item' => $data['item']->id,
            'vitri'=>1,
        ),array('id'=>'desc'),false,4,null);
        $data['list_vanhanh'] = $this->system_model->get_data('product_tinhnang_noibat',array(
            'id_item' => $data['item']->id,
            'vitri'=>2,
        ),array('id'=>'desc'),false,4,null);
        $data['list_thongsokythuat'] = $this->f_productmodel->get_data('product_thongsokythuat',array('id_sanpham'=>$data['item']->id),array('id'=>'asc'),false,null,null);

        // echo '<pre>';
        // print_r($data['list_tinhnang']); 
        // die(); 

        // cap nhat view
        if (!$this->session->userdata('session_pro_' . $data['item']->id)) {
            $this->session->set_userdata('session_pro_' . $data['item']->id, 1);
            $view = 1;
        } else {
            $view = 1;
        }
        $view = $data['item']->view + $view;
        $this->system_model->Update_where('product', array('id' => $data['item']->id), array('view' => $view));
        $data['cate_current'] = $this->system_model->getFirstRowWhere('product_category', array(
            'id' => $item->category_id
        ));
		//sp lien quan
		$data['list_item'] = $this->f_productmodel->getProductSimilar($item->id,@$item->category_id,8,0);
		//var_dump($data['list_item']);die;
        //sp da xem
        
$data['pro_view']=array();
        if (!$this->session->userdata('pro_view_old')) {
            $this->session->set_userdata('pro_view_old',$item->id);
        } else {
            if (!in_array($item->id, explode(',', $this->session->userdata('pro_view_old'))) ) {
                $pro_view_old = $this->session->userdata('pro_view_old').','.$item->id;
                $this->session->set_userdata('pro_view_old',$pro_view_old);
            }
            
            // $data['pro_view'] = $this->f_productmodel->getField_array('product','*','id IN ('.$this->session->userdata('pro_view_old').')');
        }   
             
         $data['p_color'] = $this->f_productmodel->getwherejoincolor($data['item']->id);

     
         //more images
        $data['p_images'] = $this->f_productmodel->getFields('p_images','id,image',array(
            'id_item' => $item->id,
            'vitri'=>null,
        ));
        $data['locale_name'] = $this->system_model->getFirstRowWhere('product_locale', array(
            'id' => $item->locale
        ));    



        $data['ngoai_that'] = $this->system_model->getFirstRowWhere('product_xemoi_config', array(
            'id_product' => $item->id
        )); 

        $data['dm_phutung'] = $this->system_model->get_data('product_danhmuc_phutung',array(),array('id','desc'),false,5,0);
        foreach($data['dm_phutung'] as $value)
        {
            $value->products = $this->f_productmodel->getProbyCate3($value->id,array('id'=>'desc'),4,0);
        }
         $data['size'] = $this->f_productmodel->getProductSize($data['item']->id);
        $data['doitac']=$this->load->widget('doitac');
         // danh sach binh luận
        $data['view_comment'] = $this->load->widget('comment',array($item->id));
          // danh sach câu hoi
        $data['view_question'] = $this->load->widget('question',array($item->id));
        $link_img = 'upload/img/products/'.$data['item']->pro_dir.'/thumbnail_2_'.$data['item']->image;
        $seo=array('title'=>@$data['item']->title_seo==''
         || @$data['item']->title_seo== '0' ?$data['item']->name:$data['item']->title_seo,
                   'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,
                   'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->name):$data['item']->keyword_seo,
                   'image'=> $link_img,
          
                   'type'=>'products');
             
                




         $seo=array();
        $this->LoadHeader2(null,$seo,true);
        $this->load->view('products/view_detail',$data);
        $this->LoadFooter();

    }
// HÀM XỬ LÝ CHI TIẾT XE CŨ

//product detail

public function detail_oldcar($alias){
    $data = array();

        $data['item']               = $item = $this->system_model->getFirstRowWhere('raovat', array('alias' => $alias,), array(), true);
        if(isset($item->id_hangxe)){$data['hang_xe']= $hang_xe = $this->system_model->getFirstRowWhere('raovat_hangxe', array('id' => $item->id_hangxe), array(), true);}
        if(isset($hang_xe->id)){$data['dong_xe']            = $dong_xe = $this->system_model->getFirstRowWhere('raovat_dongxe', array('id_hangxe' => $hang_xe->id), array(), true);}
        

        $data['images']             = $this->system_model->get_data('raovat_images',array('id_item'=>$item->id,),array());
        $data['tinrao_lienquan']    = $this->system_model->getCateHome1('raovat',array('id_hangxe'=>$item->id_hangxe,),6,0,false);
        $data['tien_nghi']          = $this->system_model->getCateHome2('raovat_tiennghi',array(),null,null,false);
        $data['an_toan']            = $this->system_model->getCateHome2('raovat_antoan',array(),null,null,false);
        $data['list_cung_nguoi_dang']    = $this->system_model->getCateHome1('raovat',array('email_nguoi_ban'=>$item->email_nguoi_ban,),null,null,false);
        if (!$this->session->userdata('session_pro_' . $data['item']->id)) {
            $this->session->set_userdata('session_pro_' . $data['item']->id, 1);
            $view = 1;
        } else {
            $view = 1;
        }
        $view = $data['item']->view + $view;
        $this->system_model->Update_where('raovat', array('id' => $data['item']->id), array('view' => $view));
    $seo=array('title'=>@$data['item']->title_seo==''
     || @$data['item']->title_seo== '0' ?$data['item']->name:$data['item']->title_seo,
               'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,
               'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->name):$data['item']->keyword_seo,
            //    'image'=> $link_img,
               'type'=>'products');
    //  $seo=array();
    $data['danhmuc'] = $this->load->widget('danhmuc');
    $this->LoadHeader2(null,$seo,true);
    $this->load->view('products/view_detail_oldcar',$data);
    $this->LoadFooter();

}



    public function all_products(){

        $data = array();

        $where = array('lang'=>$this->language);

        $config['base_url'] = base_url('xe-moi');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = $this->f_productmodel->Count('product',$where);

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

        $data['lists'] = $lists = $this->f_productmodel->get_data('product',$where,$order,false,$config['per_page'],$this->input->get('per_page'));

         foreach($data['lists'] as $key => $item){

            $data['lists'][$key]->img = $this->system_model->getFields('p_images','id,image,name',array(

            'id_item' => $item->id

        ));

        }

        $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');

        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');

        $data['danhmuc'] = $this->load->widget('danhmuc');

        $this->LoadHeader2(null,$seo,true);

        $this->load->view('products/all_pro',$data);

        $this->LoadFooter();

    }
// HÀM XỬ LÝ TẤT CẢ CÁC XE MỚI 
public function all_oldcar(){
    $data = array();
    $where = array('lang'=>$this->language,'status'=>0);
    $data['lists1'] = $lists = $this->f_productmodel->get_data('raovat',$where,array(),false,null,null);

    $config['base_url'] = base_url('xe-cu');
    $config['page_query_string'] = TRUE;
    $config['enable_query_string'] = TRUE;
    $config['total_rows'] = Count($data['lists1']);
    $config['per_page'] = 10; // xác định số record ở mỗi trang
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
    $data['lists'] = $lists = $this->f_productmodel->get_data('raovat',$where,$order,false,$config['per_page'],$this->input->get('per_page'));
    // echo '<pre>';
    // print_r($data['lists']);
    // die();
     foreach($data['lists'] as $key => $item){
        $data['lists'][$key]->img = $this->system_model->getFields('raovat_images','id,image,name',array(
        'id_item' => $item->id
    ));
    }
    $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');
    $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,
               'description'=>@$data['cate_curent']->description_seo,
               'keyword'=>@$data['cate_curent']->keyword_seo,
               'image'=>@$data['cate_curent']->image,
               'type'=>'products');
    $data['danhmuc'] = $this->load->widget('danhmuc');
    $this->LoadHeader2(null,$seo,true);
    $this->load->view('products/all_oldcar',$data);
    $this->LoadFooter();

}

// HÀM XỬ LÝ DANH MỤC XE CŨ
public function pro_by_oldcar($alias){
    // $this->Check_alias($alias);
    $data = array();
    $data['cate_curent'] = $current = $this->f_productmodel->getFirstRowWhere('raovat_hangxe',array('alias'=>$alias));
    $config['base_url'] = base_url('danh-muc-xe-cu/'.$alias.'.html');
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
    $data['lists'] = $this->system_model->get_data('raovat',array(
        'lang' => $this->language,
        'status'=>0,
        'id_hangxe'=>$data['cate_curent']->id
    ),array(),false,$config['per_page'],$this->input->get('per_page'));
  
    $data['home_left']=$this->load->widget('home_left');
    // $data['doitac']=$this->load->widget('doitac');
    $data['cate'] = $this->system_model->get_data('raovat_hangxe',array(
        // 'lang' => $this->language
    ),array());
    $data['cate_new'] = $this->system_model->get_data('product_category',array(
        // 'lang' => $this->language
    ),array());
    $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,
                'description'=>@$data['cate_curent']->description_seo,
                'keyword'=>@$data['cate_curent']->keyword_seo,
                'image'=>@$data['cate_curent']->image,
                'type'=>'products');
    $this->LoadHeader2(null,$seo,true);
    $this->load->view('products/pro_by_oldcar',$data);
    $this->LoadFooter();
}

}