<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Phu_tung extends MY_Controller

{

    function __construct()

    {

        

        parent::__construct();

        $CI =& get_instance();

        $this->load->model('f_productmodel');
        $this->load->model('raovat_model');
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

        $data['cate_curent'] = $current = $this->f_productmodel->getFirstRowWhere('product_danhmuc_phutung',array('alias'=>$alias));

        $data['lists1'] = $lists1 = $this->f_productmodel->getCateHome1('product_phutung',array('id_dm_phutung'=>$data['cate_curent']->id),null,null,false);

        $config['base_url'] = base_url('phu_tung/pro_bycategory/'.$alias.'.html');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = count($lists1);

        $config['per_page'] = 12; // xác định số record ở mỗi trang

        $config['uri_segment'] = 4; // xác định segment chứa page number

        $config=array_merge($config,$this->pagination_config);

        $this->pagination->initialize($config);

        $sort = $this->input->get('sort');

        $order = array('product_danhmuc_phutung.id','desc');

        if($sort != null){

            if($sort == '0'){

                $order = array('product_danhmuc_phutung.id','desc');

            }

            if($sort == 'asc'){

                $order = array('product_danhmuc_phutung.id','asc');

            }

            if($sort=='desc'){

                $order = array('product_danhmuc_phutung.id','desc');

            }

        }

        $data['lists'] = $lists = $this->f_productmodel->getCateHome1('product_phutung',array('id_dm_phutung'=>$data['cate_curent']->id),$config['per_page'],$this->input->get('per_page'),false);

// echo '<pre>';
// print_r( $data['lists']);
// die();





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

        $data['menu_left'] = $this->load->widget('menu_left');

        $this->LoadHeader2(null,$seo,true);

        $this->load->view('phu_tung/phutung_theo_danhmuc',$data);

        $this->LoadFooter();

    }

    //product detail

    public function detail($alias){

        // $this->Check_alias($alias);

        $data = array();

        $data['item'] = $item = $this->system_model->getFirstRowWhere('product_phutung', array('alias' => $alias), array(), true);
        $data['hangxe'] = $item = $this->system_model->getFirstRowWhere('raovat_hangxe', array('id' => $data['item']->id_hangxe), array(), true);
        $data['xuatxu'] = $item = $this->system_model->getFirstRowWhere('raovat_xuatxu', array('id' => $data['item']->xuat_xu), array(), true);
        $data['dongxe'] = $item = $this->system_model->getFirstRowWhere('raovat_dongxe', array('id' => $data['item']->id_dongxe), array(), true);
        $data['list_lienquan'] = $this->system_model->getCateHome1('product_phutung',array('id_hangxe' => $data['item']->id_hangxe),8,0,false);
        $data['list_parent'] = $this->raovat_model->get_data('product_danhmuc_phutung',array());

        

        /*Nâng cấp Đặng Trần Mạnh*/

        // $data['array_json'] = json_decode($data['item']->config_pro);

        // $arr1 = json_decode($this->option->config_pro_content);

        if(!empty($data['array_json'])){

            foreach ($arr1 as $key => $cat) {

                if (isset($data['array_json'][$key]->content)) {

                    $arr1[$key]->content =  $data['array_json'][$key]->content;

                }

            }

        }

        // $data['thuoctinh'] = $arr1;

        /*Nâng cấp Đặng Trần Mạnh*/



        $data['cate'] = $this->system_model->get_data('product_phutung',array(

           

        ),array());

        // cap nhat view

        if (!$this->session->userdata('session_pro_' . $data['item']->id)) {

            $this->session->set_userdata('session_pro_' . $data['item']->id, 1);

            $view = 1;

        } else {

            $view = 1;

        }

        $view = $data['item']->view + $view;

        $this->system_model->Update_where('product_phutung', array('id' => $data['item']->id), array('view' => $view));

        // $data['cate_current'] = $this->system_model->getFirstRowWhere('product_category', array(

        //     'id' => $item->category_id

        // ));

		//sp lien quan

		// $data['list_item'] = $this->f_productmodel->getProductSimilar($item->id,@$item->category_id,10,0);

		//var_dump($data['list_item']);die;

        //sp da xem

$data['pro_view']=array();

        // if (!$this->session->userdata('pro_view_old')) {

        //     $this->session->set_userdata('pro_view_old',$item->id);

        // } else {

        //     if (!in_array($item->id, explode(',', $this->session->userdata('pro_view_old'))) ) {

        //         $pro_view_old = $this->session->userdata('pro_view_old').','.$item->id;

        //         $this->session->set_userdata('pro_view_old',$pro_view_old);

                

        //     }

        //     // $data['pro_view'] = $this->f_productmodel->getField_array('product_phutung','*','id IN ('.$this->session->userdata('pro_view_old').')');

        // }



        

         $data['p_color'] = $this->f_productmodel->getwherejoincolor($data['item']->id);
        //var_dump($data['p_color']);die();
         //more images

        $data['p_images'] = $this->f_productmodel->getFields('p_images','id,image',array(

            'id_phutung' => $data['item']->id

        ));

        // echo '<pre>';
        // print_r($data['p_images']);
        // die();

        // $data['locale_name'] = $this->system_model->getFirstRowWhere('product_locale', array(

        //     'id' => $item->locale

        // ));

     
         $data['size'] = $this->f_productmodel->getProductSize($data['item']->id);



        $data['doitac']=$this->load->widget('doitac');

         // danh sach binh luận

        $data['view_comment'] = $this->load->widget('comment',array($data['item']->id));

          // danh sach câu hoi

        $data['view_question'] = $this->load->widget('question',array($data['item']->id));

        $link_img = 'upload/img/products/'.$data['item']->pro_dir.'/thumbnail_2_'.$data['item']->image;

        $seo=array('title'=>@$data['item']->title_seo==''

         || @$data['item']->title_seo== '0' ?$data['item']->ten_phu_tung:$data['item']->title_seo,

                   'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,

                   'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->ten_phu_tung):$data['item']->keyword_seo,

                   'image'=> $link_img,

                   'type'=>'products');

        $data['menu_left'] = $this->load->widget('menu_left');

         $seo=array();

        $this->LoadHeader2(null,$seo,true);

        $this->load->view('phu_tung/view_detail',$data);

        $this->LoadFooter();

    }



    public function all_products(){

        $data = array();

        $where = array('lang'=>$this->language);

        $config['base_url'] = base_url('phu_tung/all_products');

        $config['page_query_string'] = TRUE;

        $config['enable_query_string'] = TRUE;

        $config['total_rows'] = $this->f_productmodel->Count('product_phutung',$where);

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

        $data['lists'] = $lists = $this->f_productmodel->get_data('product_phutung',$where,$order,false,$config['per_page'],$this->input->get('per_page'));

         foreach($data['lists'] as $key => $item){

            $data['lists'][$key]->img = $this->system_model->getFields('p_images','id,image,name',array(

            'id_item' => $item->id

        ));

        }
        $data['menu_left'] = $this->load->widget('menu_left');


        $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product_phutung');

        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->ten_phu_tung:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');



        $this->LoadHeader2(null,$seo,true);

        $this->load->view('phu_tung/all_pro',$data);

        $this->LoadFooter();

    }

    

}