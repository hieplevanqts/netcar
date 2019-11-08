<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Phu_tung extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('productmodel');
        $this->load->model('raovat_model');
        $this->load->model('adminmodel');
        $this->load->library('pagination');
        $this->load->helper('file','url');
       

        $this->load->database();
     
        $this->_Route();
        if(!$this->check->is_logined($this->session->userdata('sessionUserAdmin'), $this->session->userdata('sessionGroupAdmin')))
        {
            redirect(base_url().'vnadmin', 'location');
            die();
        }
        
    }
    protected $pagination_config= array(
        'full_tag_open'=>"<ul class='pagination pagination-sm'>",
        'full_tag_close'=>"</ul>",
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
//    ======================================================================================================================
    public function products()
    {
        //$this->productmodel->get_license();
        // $this->check_acl();
        if($this->input->get()){
            $where = array(
                'code' => $this->input->get('code')?$this->input->get('code'):'',
                'name' => $this->input->get('name'),
                'cate' => $this->input->get('cate'),
                'view' => $this->input->get('view'),
                'lang' => $this->input->get('lang'),
            );
            $config['page_query_string']    = TRUE;
            $config['enable_query_strings'] = TRUE;
            $config['base_url']             = base_url('vnadmin/phu_tung/products?code='
                . $this->input->get('code')
                . '&name=' . $this->input->get('name')
                . '&cate=' . $this->input->get('cate')
                . '&view=' . $this->input->get('view')
                . '&lang=' . $this->input->get('lang')
            );
            $config['total_rows']           = $this->productmodel->count_listpro($where);
            $config['per_page']             = 20;
            $config['uri_segment'] = 4;
            $config=array_merge($config,$this->pagination_config);
            $this->pagination->initialize($config);
            // $data['list'] = $this->productmodel->getListProduct($where, $config['per_page'], $this->input->get('per_page'));

        }else{
            $where = array(
                'lang' => $this->language
            );
            $data['all_phutung1'] = $this->productmodel->get_data('product_phutung',array(),array('id' => 'desc'));

            $config['base_url'] = base_url('vnadmin/phu_tung/products');
            $config['total_rows'] = count($data['all_phutung1']); // xác định tổng số record
            $config['per_page'] =10; // xác định số record ở mỗi trang
            $config['uri_segment'] = 4; // xác định segment chứa page number
            $config=array_merge($config,$this->pagination_config);
            $this->pagination->initialize($config);
            // $data['all_phutung'] = $this->productmodel->getListProduct($where, $config['per_page'],
                // $this->uri->segment(4));
            $data['all_phutung'] = $this->productmodel->get_data('product_phutung',array(),array('id' => 'desc'),false,$config['per_page'],             
            $this->uri->segment(4));
            foreach($data['all_phutung'] as $value)
                    {
                        $value->dm = $this->productmodel->getFirstRowWhere('product_danhmuc_phutung',array('id'=>$value->id_dm_phutung));
                    }
        }
        // foreach ($data['list'] as $key => $cat) {
        //     $data['list'][$key]->cat_name = $this->productmodel->getField('product_category',
        //         array('name'),array('id' => $cat->category_id,));
        //     $data['list'][$key]->full_name = $this->productmodel->getField('users',
        //         array('fullname'),array('id' => $cat->user_id));
        // }

        // $data['product_all'] = $this->productmodel->get_data('product_phutung',array('lang' => $this->language),array('id' => 'desc'));
        // $auto_code = '';
        // $auto_name = '';
        // foreach ($data['product_all'] as $nameget) {
        //     $subname = $nameget->name;
        //     $subcode = $nameget->code;
        //     if ($auto_code == null) {
        //         $auto_code = $subcode;
        //     } else {
        //         $auto_code = $auto_code . "," . $subcode;
        //     }
        //     if ($auto_name == null) {
        //         $auto_name = $subname;
        //     } else {
        //         $auto_name = $auto_name . "," . $subname;
        //     }
        // }
        //var_dump($data['product_brand_all']);die;
        // $data['auto_code'] = $auto_code;
        // $data['auto_name'] = $auto_name;
        $data['cate'] = $this->productmodel->get_data('product_category',array('lang' => $this->language),array('id' => 'desc'));
        // hien thi danh sach nut
        $data['show_home'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'home',));
        $data['show_hot'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'hot',));
        $data['show_focus'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'focus',));
        $data['show_coupon'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'coupon',));
        $data['headerTitle'] = "Sản phẩm";
        
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/phu_tung/list', $data);
        $this->load->view('admin/footer');
    }
    #achor add
    public function add($id_edit=null)
    {
        // $this->check_acl();
        $data['admin'] = $this->session->userdata('adminid');
       // $this->productmodel->check_license_qts();
        $this->load->helper('thumbnail_helper');
        $data['btn_name']='Thêm';
        $data['btn_demo'] = "Upload file demo";
        $data['btn_download'] = "Cập nhật file download";
        $data['max_sort']=$max_sort=$this->productmodel->SelectMax('product','sort')+1;
        $data['array_json'] = $this->option->config_pro;
        $data['array_json_content'] = $this->option->config_pro_content;
        $data['raovat_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array(),array());
        $data['xuat_xu'] = $this->raovat_model->get_data('raovat_xuatxu',array(),array());


        $data['thuoctinh'] = (array)json_decode(@$this->option->config_pro_content);
        if($id_edit!=null){
            $edit = $data['edit']=$this->productmodel->getFirstRowWhere('product_phutung',array('id'=>$id_edit));
            // if($data['edit']->config_pro!=''){
            //     $data['array_json'] = json_decode($data['edit']->config_pro);
            // }  
// echo '<pre>';
// print_r($data['edit_dm']);
// die();
             $arr1 = json_decode($this->option->config_pro_content);
            if(!empty($data['array_json'])){
                foreach ($arr1 as $key => $cat) {
                    if (isset($data['array_json'][$key]->content)) {
                        $arr1[$key]->content =  $data['array_json'][$key]->content;
                    } 
                }
            }
            
            //var_dump($arr1);die;
            $data['thuoctinh'] = $arr1;
            $data['cate_selected'] = $this->productmodel->getField_array('product_to_category','id_category',
                array('id_product'=>$id_edit));
            // $data['season_selected'] = $this->productmodel->getField_array('product_to_season','id_season',
                // array('id_product'=>$id_edit));
            $data['size_checked'] = $this->productmodel->getField_array('product_to_size','id_size',
                 array('id_product'=>$id_edit));
            $data['color_selected'] = $this->productmodel->getField_array('product_to_color','id_color',
                array('id_product'=>$id_edit));

            // danh sách ảnh hụ
            $data['listimg'] = $this->productmodel->get_data('p_images',array('id_phutung'=>$id_edit));
            $data['tag'] = $this->productmodel->get_tag(array(
                'tags_to_product.id_product'=> $id_edit,
                'tags.lang' => $this->language
            ));

            $data['btn_name']='Cập nhật';
            $data['btn_demo'] = "Cập nhật file demo";
            $data['btn_download'] = "File download";
            // $data['max_sort']=$max_sort=$data['edit']->sort;
        }

        if (isset($_POST['addnews'])) {

          if (isset($_POST['content']) && sizeof($_POST['content']) > 0) {
                $post_content = $_POST['content'];
                $arr1 = json_decode($this->option->config_pro_content);
                for ($i = 0; $i < sizeof($post_content); $i++) {
                    $name = $arr1[$i]->name;
                    $type = $arr1[$i]->type;
                    $sort_att = $arr1[$i]->sort;
                    $arr1[$i] = array(
                        'content'        => $post_content[$i],
                        'name'   => $name,
                        'type'  =>$type,
                        'sort'   => $sort_att,
                    );
                 }
            }

            $id_start  = (int)$this->input->post('downloaded');
            $arrTags = explode(",",$this->input->post('tags'));
            $price       = str_replace(array(';','.',',',' '),'',$this->input->post('price'));
            $price_sale      = str_replace(array(';','.',',',' '),'',$this->input->post('price_sale'));
            $alias = make_alias($this->input->post('alias'));
          
// echo '<pre>';
// print_r($_POST['files']);
// die();

            $arr = array(
                'ten_phu_tung'            => $this->input->post('name'),
                'alias'           => make_alias($this->input->post('alias')),
                'status'       => $this->input->post('status'),
                'home'            => $this->input->post('home'),
                'forcus'           => $this->input->post('focus'),
                'id_hangxe'          => $this->input->post('id_hangxe'),
                'id_dongxe'          => $this->input->post('id_dongxe'),
                'id_doixe'          => $this->input->post('id_doixe'),
                'xuat_xu'          => $this->input->post('xuat_xu'),
                'lang'            => $this->language,
                'multi_img'            =>json_encode($this->input->post('files')),
                'image'=>$this->input->post('chooseFile_one'),
                'price'=>$this->input->post('price'),
                'price_sale'=>$this->input->post('price_sale'),
                'description'=>$this->input->post('description'),
                'bao_hanh'=>$this->input->post('bao_hanh'),
                'id_dm_phutung'=>$this->input->post('id_dm_phutung'),

            );
           
            // Kiểm tra rỗng các giá trị đầu vào
            if($this->input->post('name')== ''){ unset($arr['ten_phu_tung']);}
            if($this->input->post('alias')== ''){ unset($arr['alias']);}
            if($this->input->post('status')== ''){ unset($arr['status']);}
            if($this->input->post('home')== ''){ unset($arr['home']);}
            if($this->input->post('forcus')== ''){ unset($arr['forcus']);}
            if($this->input->post('id_hangxe')== ''){ unset($arr['id_hangxe']);}
            if($this->input->post('id_dongxe')== ''){ unset($arr['id_dongxe']);}
            if($this->input->post('id_doixe')== ''){ unset($arr['id_doixe']);}
            if($this->input->post('xuat_xu')== ''){ unset($arr['xuat_xu']);}
            if($this->input->post('lang')== ''){ unset($arr['lang']);}
            if($this->input->post('multi_img')== ''){ unset($arr['multi_img']);}
            if($this->input->post('image')== ''){ unset($arr['image']);}
            if($this->input->post('price')== ''){ unset($arr['price']);}
            if($this->input->post('price_sale')== ''){ unset($arr['price_sale']);}
            if($this->input->post('description')== ''){ unset($arr['description']);}
            if($this->input->post('bao_hanh')== ''){ unset($arr['bao_hanh']);}
            if($this->input->post('id_dm_phutung')== ''){ unset($arr['id_dm_phutung']);}


            $checkAlias = $this->productmodel->getFirstRowWhere('product_phutung',array(
                'alias' => $this->input->post('alias'),
            ));
        //     if($checkAlias){
        //         $this->session->set_flashdata("mess", "Thêm thành công !");
        //         redirect($_SERVER['HTTP_REFERER']);
        // }

            if (!empty($_POST['edit'])){


                // echo '<pre>';
                // print_r($arr);
                // die();
                $id = $this->productmodel->Update_where('product_phutung', array('id'=>$_POST['edit']), $arr);
                // $this->session->set_flashdata("mess", "Cập nhật thành công!");
                $id = $_POST['edit'];
            } else {
             
                $id = $this->productmodel->Add('product_phutung', $arr);
                // $this->session->set_flashdata("mess", "Thêm mới thành công!");
            }
            if ($id_edit != null) {
                    $id = $id_edit;
                } else $id = $id;
            $checkAlias = $this->productmodel->getFirstRowWhere('alias',array(
                'pro' => $id
            ));
            if(empty($checkAlias)){
                // $this->productmodel->Add('alias',array(
                //     'pro' => $id,
                //     'type' => 'pro',
                //     'alias' => $alias
                // ));
            }else{
                $this->productmodel->Update_where('alias',array('pro' => $id),array(
                    'alias' => $alias
                ));
            }
            /*
             * tags
             */
            if ($arrTags > 0) {
                foreach ($arrTags as $tag)
                {
                    $tag = trim($tag);
                    if($tag !='')
                    {
                        if(make_alias($tag)==null){
                            // trương hop tag cho ngon ngu tieng trung, tiếng nhật
                            $item = $this->productmodel->getFirstRowWhere('tags',array(
                                'alias' => $tagname=trim(stripslashes(json_encode($tag)),'"'),
                            ));
                            if(empty($item)){
                                $id_tag=$this->productmodel->Add('tags',array(
                                    'name' => $tag,
                                    'alias' => $tagname,
                                    'lang'=>$this->language,
                                    'time'=>time(),
                                ));
                            }else{

                                $id_tag=$item->id;
                            }
                            $item_to_tags = $this->productmodel->getFirstRowWhere('tags_to_product',array(
                                'id_tags' => $id_tag,
                                // 'id_product' => $id,
                            ));
                            if (empty($item_to_tags)) {
                                $this->productmodel->Add('tags_to_product',array(
                                    'id_tags' => $id_tag,
                                    'id_product' => $id,
                                ));
                            }
                        }else{

                            $item = $this->productmodel->getFirstRowWhere('tags',array(
                                'alias' => make_alias($tag),
                            ));
                            if(empty($item)){
                                $id_tag=$this->productmodel->Add('tags',array(
                                    'name' => $tag,
                                    'alias' => make_alias($tag),
                                    // 'lang'=>$this->language,
                                    // 'time'=>time(),
                                ));

                            }else{
                                $id_tag=$item->id;
                            }
                            $item_to_tags = $this->productmodel->getFirstRowWhere('tags_to_product',array(
                                'id_tags' => $id_tag,
                                'id_product' => $id,
                            ));
                            if (empty($item_to_tags)) {
                                $this->productmodel->Add('tags_to_product',array(
                                    'id_tags' => $id_tag,
                                    'id_product' => $id,
                                ));
                            }
                        }

                    }

                }
            }

           


            if (isset($_POST['category']) && sizeof($_POST['category']) > 0) {
                $post_cat = $_POST['category'];
                $this->productmodel->Delete_where('product_to_phutung', array('id_phutung' => $id));
                for ($i = 0; $i < sizeof($post_cat); $i++) {
                    $ca = array('id_phutung' => $id, 'id_dm_phutung' => $post_cat[$i]);
                  
                    $this->productmodel->Add('product_to_phutung', $ca);
                }

               $a= $this->productmodel->Update_where('product_phutung', array('id'=>$_POST['edit']), array('id_dm_phutung' => end($post_cat)));

            }
            // cap nhat màu sắc
            if (isset($_POST['color']) && sizeof($_POST['color']) > 0) {
                $post_color = $_POST['color'];

                $this->productmodel->Delete_where('product_to_color', array('id_product' => $_POST['edit']));
                for ($i = 0; $i < sizeof($post_color); $i++) {
                    $color = array('id_product' => $id, 'id_color' => $post_color[$i]);
                    $this->productmodel->Add('product_to_color', $color);
                }
                $this->productmodel->Update_where('product_phutung', array('id'=>$id), array('color' => end($post_color)));
            }
            // cap nhat size
            if (isset($_POST['size']) && sizeof($_POST['size']) > 0) {
                $post_size = $_POST['size'];

                $this->productmodel->Delete_where('product_to_size', array('id_product' => $id));
                for ($i = 0; $i < sizeof($post_size); $i++) {
                    $size = array('id_product' => $id, 'id_size' => $post_size[$i]);
                    $this->productmodel->Add('product_to_size', $size);
                }
                $this->productmodel->Update_where('product_phutung', array('id'=>$id), array('size' => end($post_size)));
            }
            //upload images ảnh đại diện
            $this->load->library('upload');
            $pathImage = "upload/img/products/";
            $dir_image = date('dmY');
            if(!is_dir($pathImage.$dir_image))
            {
                @mkdir($pathImage.$dir_image);
                $this->load->helper('file');
                @write_file($pathImage.$dir_image.'/index.html', '<p>Directory access is forbidden.</p>');
            }
            $config['upload_path'] = $pathImage.$dir_image.'/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF';
            $config['max_size'] = '*';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';
            $this->upload->initialize($config);
            $image = '';
            if ($_FILES['chooseFile_one']['name'] != '') {
                $type_image = explode(".", $_FILES['chooseFile_one']['name']);
                $a = make_alias($type_image[0]);
                $file_name = $a.'.'.$type_image[1];
                $_FILES['chooseFile_one']['name'] =  $file_name;




                if ($this->upload->do_upload('chooseFile_one')) {
                   
                

                    $uploadData = $this->upload->data();
                    if($uploadData['is_image'] == TRUE)
                    {
                        $image = $uploadData['file_name'];
                    }
                    elseif(file_exists($pathImage.$dir_image.'/'.$uploadData['file_name']))
                    {
                        @unlink($pathImage.$dir_image.'/'.$uploadData['file_name']);
                        
                    }
                    unset($uploadData);
                     // xoa anh dai dien cũ và anh thumb cu
                    $item=$this->raovat_model->getFirstRowWhere('product_phutung',array('id'=>$_POST['edit']));
                    $dir_image_old = $item->pro_dir;
                    // xoa anh san pham
                    if(file_exists($pathImage.$dir_image_old.'/'.$item->image))
                    {
                        @unlink($pathImage.$dir_image_old.'/'.$item->image);
                    }
        

                    // xoa anh thumb
                    for($j = 1; $j <= 3; $j++)
                    {
                        if(file_exists($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item2->image))
                        {
                            @unlink($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item2->image);
                        }
                    }
                }
            }

            if($image !='')
            {
                #BEGIN: Create thumbnail tạo anh thumb chen chữ
                $wm_font_size = 28;
                if(file_exists($pathImage.$dir_image.'/'.$image))
                {
                    $this->load->helper('email_helper');
                    $link =  $pathImage.$dir_image.'/'.$image;
                    // $mt = add_water_mark($link,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);

                    // if(!$mt){
                    //     $this->session->set_flashdata("mess", "Up ảnh không thành công !");
                    // }
                    for($j = 1; $j <= 3; $j++)
                    {
                        switch($j)
                        {
                            case 1:
                                $maxWidth = 300;#px
                                $maxHeight = 300;#px
                                $wm_font_size = 28;
                                break;
                            case 3:
                                $maxWidth = 63;#px
                                $maxHeight = 63;#px
                                $wm_font_size = 9;
                                break;
                            default:
                                $maxWidth = 600;#px
                                $maxHeight = 600;#px
                        }
                        $sizeImage = size_thumbnail($pathImage.$dir_image.'/'.$image, $maxWidth, $maxHeight);
                        $configImage['source_image'] = $pathImage.$dir_image.'/'.$image;
                        $configImage['new_image'] = $pathImage.$dir_image.'/thumbnail_'.$j.'_'.$image;
                        $configImage['maintain_ratio'] = TRUE;
                        $configImage['width'] = $sizeImage['width'];
                        $configImage['height'] = $sizeImage['height'];
                        // $this->image_lib->initialize($configImage);
                        // $this->image_lib->resize();
                        // $this->image_lib->clear();
                    }
                }
                // cap nhat anh moi
                
                $this->productmodel->Update_where('product_phutung', array('id'=>$_POST['edit']), array(
                    'image' => @$image,
                    'pro_dir' => $dir_image,
                ));
            }
            if(@$image == 'none.gif')
            {
                #Remove dir
                $this->load->library('file');
                if(trim($dir_image) != '' && trim($dir_image) != 'default' && is_dir('upload/img/product/'.$dir_image) && count($this->file->load('upload/img/product/'.$dir_image,'index.html')) == 0)
                {
                    if(file_exists('upload/img/products/'.$dir_image.'/index.html'))
                    {
                        @unlink('upload/img/products/'.$dir_image.'/index.html');
                    }
                    @rmdir('upload/img/products/'.$dir_image);
                }
                $dir_image = 'default';
            }

            //upload multi images
            $config2['upload_path'] = './upload/img/products_multi/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF';
            $config2['max_size'] = '*';
            $config2['max_width'] = '2000';
            $config2['max_height'] = '1400';
            $config2['encrypt_name'] = true;
            $this->upload->initialize($config2);
            if(!empty($_FILES['files'])){
                $name_array = array();
                $count = count(@$_FILES['files']['size']);


                foreach ($_FILES as $key => $value) {
                    for ($s = 0; $s <= $count - 1; $s++) {
                        $_FILES['files']['name'] = $value['name'][$s];
                        $_FILES['files']['type'] = $value['type'][$s];
                        $_FILES['files']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['files']['error'] = $value['error'][$s];
                        $_FILES['files']['size'] = $value['size'][$s];

                        if($this->upload->do_upload('files')){
                            $fileData = $this->upload->data();
                            $uploadData[$s]['file_name'] = $fileData['file_name'];
                            $link = 'upload/img/products_multi/' . $fileData['file_name'];
                            $id_i = $this->productmodel->Add('p_images',array(
                                'image' => $link,
                                'id_phutung' => $_POST['edit'],
                            ));
                            //watermark
                            $this->load->helper('email_helper');
                              // cap nhat anh moi
                            
                            
                            // $mt = add_water_mark($link,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);
                        }
                   
                    }
                }
            }
            redirect(base_url('vnadmin/phu_tung/products'));
        }

        $data['cate'] = $this->productmodel->get_data('product_danhmuc_phutung',array(
            // 'lang' => $this->language
        ),array());
        // 
        $data['cate_phutung'] = $this->productmodel->get_data('product_danhmuc_phutung',array(
            // 'lang' => $this->language
        ),array());
        // 
        $data['cate_selected'] = $this->productmodel->getField_array('product_to_phutung','id_dm_phutung',
        array('id_phutung'=>$id_edit));
        foreach ($this->session->userdata('phanquyen') as $key => $cat) {
            if($cat->resource == 'attribute'){
                $data['attribute'] =  $cat;
                foreach ($data['attribute']->cat_sub as $key2 => $cat2) {
                    if($cat2->resource == 'listBrand'){
                        // hiên thị phan quyen thương hiệu
                        $data['show_listBrand'] =  $cat2;
                        $data['cat_brand'] = $this->productmodel->get_data('product_brand',array(
                            'lang' => $this->language
                        ),null);
                    }   
                    if($cat2->resource == 'listLocale'){
                        // hiên thị phan quyen xuất sứ
                        $data['show_listLocale'] =  $cat2;
                        $data['cat_locales'] = $this->productmodel->get_data('product_locale',array(
                            'lang' => $this->language
                        ),null);
                    }   
                    if($cat2->resource == 'listColor'){
                        // hiên thị phan quyen màu sắc
                        $data['show_listColor'] =  $cat2;
                        $data['color'] = $this->productmodel->get_data('product_color',array(
                            'lang' => $this->language
                        ),null);
                    }   
                    if($cat2->resource == 'listOption'){
                        // hiên thị phan quyen kich thuoc
                        $data['show_listOption'] =  $cat2;
                        $data['size'] = $this->productmodel->get_data('product_size',array(
                            'lang' => $this->language
                        ),null);
                    }   
                }
            }
        }


        // hien thi danh sach nut
        $data['show_home'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'home',));
        $data['show_hot'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'hot',));
        $data['show_focus'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'focus',));
        $data['show_coupon'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product','field' => 'coupon',));
        
        $data['headerTitle'] = $data['btn_name']." sản phẩm";
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/phu_tung/add', $data);
        $this->load->view('admin/footer');
    }
    #achor edit
     public function edit($id){
       $this->add($id);
    }
   //Xóa nhieu ban ghi
    public function deletes()
    {
        if($this->input->post('checkone') && is_array($this->input->post('checkone')) && count($this->input->post('checkone')) > 0)
        {
            $ids = $this->input->post('checkone');
            foreach($ids as $id)
            {
                $this->delete_once($id);
            }
        }
        $this->session->set_flashdata("mess", "Xóa thành công!");
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_once($id){
        // $this->check_acl();
        if (is_numeric($id)) {
            $item=$this->productmodel->getFirstRowWhere('product_phutung',array('id'=>$id));
            
            $pathImage = "upload/img/products/";
            $pathImage_thumb = "upload/img/products/";
            $dir_image = $item->pro_dir;
            // xoa anh san pham
            if(file_exists($pathImage.$dir_image.'/'.$item->image))
            {
                @unlink($pathImage.$dir_image.'/'.$item->image);
            }
            //xoa anh thumb
            for($j = 1; $j <= 3; $j++)
            {
                if(file_exists($pathImage_thumb.$dir_image.'/thumbnail_'.$j.'_'.$item->image))
                {
                    @unlink($pathImage_thumb.$dir_image.'/thumbnail_'.$j.'_'.$item->image);
                }
            }
            
            
            
            $item_alias =$this->productmodel->getFirstRowWhere('alias',array('pro'=>$id));
            if(!empty($item_alias)){
                $this->productmodel->Delete_where('alias',array('pro' => $id));
            }
            $this->productmodel->Delete_where('product_to_category',array('id_product'=>$id));
           $this->productmodel->Delete_where('pro_values',array('pro_id'=>$id));
            //delete more image
            $m_images = $this->productmodel->getFields('p_images','id,image',array(
                'id_phutung' => $id ));
// echo '<pre>';
// print_r($m_images);
// die();


           
            foreach($m_images as $image){
                @unlink($image->image);
              
            }
            $this->productmodel->Delete_where('p_images', array('id_phutung'=>$id));
            $this->productmodel->Delete_where('product_phutung',array('id' => $id));
            $this->session->set_flashdata("mess", "Xóa thành công!");
            redirect($_SERVER['HTTP_REFERER']);
        } else{
            $this->productmodel->Delete_where('product_phutung',array('id' => $id));
        } 
    }
    // xoa 1 ban ghi
    public function delete($id)
    {
        $this->delete_once($id);
        $this->session->set_flashdata("mess", "Xóa thành công!");
        redirect($_SERVER['HTTP_REFERER']);
    }
 //Them anh cho san pham===========================
    public function images($id)
    {
        $this->check_acl();

        $pro = $this->productmodel->getFirstRowWhere('product_phutung', array('id' => $id));
        $data['product_name'] = $pro->name;
        $data['pro_image'] = $this->productmodel->getProImage($id);
        $data['id'] = $id;
        $data['headerTitle'] = "Tải thêm ảnh cho san phẩm";
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/products/view_product/view_images', $data);
        $this->load->view('admin/footer');
    }
      public function images_add()
    {
       $this->check_acl();
        $config['upload_path'] = './upload/img/products_multi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF';
        $config['max_size'] = '*';
        $config['max_width'] = '2000';
        $config['max_height'] = '1400';
        $this->load->library('upload', $config);
        if (isset($_POST['Upload']))
        {
            $id = $this->input->post('id_pro');
            $pro = $this->productmodel->getFirstRowWhere('product_phutung', array('id' => $id));

            $db_data = array(
                'link' => '',
                'name' => $this->input->post('title'),
                'sort' => $this->input->post('sort'),
                'id_item' => $id
            );
            if (!empty($_POST['edit'])){
                $this->productmodel->Update_where('p_images', array('id' => $_POST['edit']), array('name' => $this->input->post('title'),));
                $id_img = $_POST['edit'];
            }else{
                $id_img = $this->productmodel->Add('p_images', $db_data);
            }
            
            if (!empty($_FILES['userfile']['name'])) {
                $type_image = explode(".", $_FILES['userfile']['name']);
                $a = make_alias($type_image[0]);
                $file_name = $a.'.'.$type_image[1];
                $_FILES['userfile']['name'] =  $file_name;
                if (!$this->upload->do_upload('userfile')) {
                  $this->session->set_flashdata("mess", "".$this->upload->display_errors());
                } else {
                    $upload = array('upload_data' => $this->upload->data());
                    $image = 'upload/img/products_multi/' . $upload['upload_data']['file_name'];
                    $this->load->helper('email_helper');
                    $mt = add_water_mark($image,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);
                    $abd = $this->productmodel->Update_where('p_images', array('id' => $id_img), array('image' => $image));
                    $this->session->set_flashdata("mess", "Thêm ảnh thành công!");
                }
            }

          redirect(base_url('vnadmin/product/images/'.$id));
        }

        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id = $_GET['id'];
            $data['detail'] = $item = $this->productmodel->getFirstRowWhere('p_images', array('id' => $id));
            $data['id'] = $id;
        }  
        $this->load->view('admin/modal/view_add_image',$data);
    }
     public function images_edit()
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id = $_GET['id'];
            $data['detail'] = $item = $this->productmodel->getFirstRowWhere('p_images', array('id' => $id));
            $data['id'] = $data['detail']->id_item;
        }       
          $this->load->view('admin/modal/view_add_image',$data);
    }
// xoa anh multi san pham
    public function delete_images($id){
        $img = $this->productmodel->getFirstRowWhere('p_images',array(
            'id' => $id
        ));
        if(file_exists($img->image)){
            unlink(($img->image));
        }
        $this->productmodel->Delete_where('p_images',array('id' => $id));
        $this->session->set_flashdata("mess", "Xóa thành công!");
        redirect($_SERVER['HTTP_REFERER']);
    }
//******* danh muc ********************************************************
    public function categories()
    {
        $this->check_acl();
        $data['cate'] = $this->productmodel->get_data('product_category',array(
            'lang' => $this->language
        ),array('sort'=>'desc'));
         $data['show_home'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'home',));
        $data['show_hot'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'hot',));
        $data['show_focus'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'focus',));
        $data['show_coupon'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'coupon',));
        $data['headerTitle'] = 'Danh mục sản phẩm';
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/products/view_category/list_cat', $data);
        $this->load->view('admin/footer');
    }
    public function cat_add($id_edit=null)
    {
        $this->check_acl();
        $config['upload_path'] = './upload/img/category/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
        $config['max_size']      = '1000';
        $config['max_width']     = '1200';
        $config['max_height']    = '1000';
        $this->load->library('upload', $config);
        $data['btn_name']='Thêm';
        $data['max_sort']=$max_sort=$this->productmodel->SelectMax('product_category','sort')+1;
        if($id_edit!=null){
            $data['edit']=$this->productmodel->get_data('product_category',array('id'=>$id_edit),array(),true);
            $data['max_sort']=$max_sort=$data['edit']->sort;
            $data['btn_name']='Cập nhật';
        }
        if (isset($_POST['addnews'])) {
            $alias = make_alias($this->input->post('alias'));
            $arr = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'parent_id' => $this->input->post('parent'),
                'alias' => $alias,
                'home' => $this->input->post('home'),
                'hot' => $this->input->post('hot'),
                'focus' => $this->input->post('focus'),
                'coupon' => $this->input->post('coupon'),
                'sort' => $max_sort,
                'title_seo' => $this->input->post('title_seo'),
                'keyword_seo' => $this->input->post('keyword'),
                'description_seo' => $this->input->post('description_seo'),
                'lang'            => $this->language,
            );
            if (!empty($_POST['edit'])){
                $id = $this->productmodel->Update_where('product_category', array('id'=>$id_edit), $arr);
                $this->session->set_flashdata("mess", "Cập nhật thành công!");
            } else {
                $id = $this->productmodel->Add('product_category', $arr);
                $this->session->set_flashdata("mess", "Thêm mới thành công!");
            }
            if ($id_edit != null) {
                $id = $id_edit;
            } else $id = $id;
            // check alias
            $checkAlias = $this->productmodel->getFirstRowWhere('alias',array(
                'pro_cat'=> $id
            ));
            if(empty($checkAlias)){
                $this->productmodel->Add('alias', array(
                    'alias' => $alias,
                    'pro_cat' => $id,
                    'type'  => 'cate-pro'
                ));
            }else{
                $this->productmodel->Update_where('alias',array('pro_cat'=>$id),array(
                    'alias' => $this->input->post('alias')
                ));
            }

            if ($_FILES['userfile']['name'] != '') {
                $type_image = explode(".", $_FILES['userfile']['name']);
                $a = make_alias($type_image[0]);
                $file_name = $a.'.'.$type_image[1];
                $_FILES['userfile']['name'] =  $file_name;
                if (!$this->upload->do_upload()) {
                   $this->session->set_flashdata("mess", "".$this->upload->display_errors());
                } else {
                    $upload = array('upload_data' => $this->upload->data());
                    $image = 'upload/img/category/' . $upload['upload_data']['file_name'];

                    $this->productmodel->Update_where('product_category',array('id'=>$id),array('image'=>$image));
                }
            }
            redirect(base_url('vnadmin/product/categories'));
        }
        $data['cate'] = $this->productmodel->get_data('product_category',array(
            'lang' => $this->language
        ),array('sort'=>'asc'));
         $data['show_home'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'home',));
        $data['show_hot'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'hot',));
        $data['show_focus'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'focus',));
        $data['show_coupon'] = $this->productmodel->getFirstRowWhere('config_checkpro',array('type' => 'product_category','field' => 'coupon',));
        $data['headerTitle'] = $data['btn_name']." danh mục sản phẩm";
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/products/view_category/cat_add', $data);
        $this->load->view('admin/footer');
    }
    public function cat_edit($id){
        $this->cat_add($id);
    }
    public function deletes_category(){
        $ids = $this->input->post('checkone');
        foreach($ids as $id)
        {
            $this->del_cat_once($id);
        }
        $this->session->set_flashdata("mess", "Xóa thành công!");
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function del_cat_once($id){
        $this->check_acl();
        $cat_parent =$this->productmodel->getFirstRowWhere('product_category',array('parent_id'=>$id));
        if(empty($cat_parent)){
            // xoa ban ghi trong product_category
            $item = $this->productmodel->getFirstRowWhere('product_category',array(
                'id' => $id
            ));
            // xoa anh trong thu muc
            if(file_exists($item->image)){ @unlink($item->image);}
            if(file_exists($item->banner)){ @unlink($item->banner);}

            $this->productmodel->Delete_where('product_category',array('id' => $id));
            $this->productmodel->Delete_Where('product_to_brand', array('id_category'=>$id));
            $item_alias =$this->productmodel->getFirstRowWhere('alias',array('pro_cat'=>$id));
            if(!empty($item_alias)){
                $this->productmodel->Delete_where('alias',array('pro_cat' => $id));
            }
        }

    }
    public function deletecategory($id)
    {
        if (is_numeric($id)&&$id>1) {
            $cat_parent =$this->productmodel->getFirstRowWhere('product_category',array('parent_id'=>$id));
             if(empty($cat_parent)){
                $this->del_cat_once($id);
                $this->session->set_flashdata("mess", "Xóa danh mục thành công!");
             }else{
                $this->session->set_flashdata("mess_err", "Xóa không thành công ! <br />Còn danh mục con");
             }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
////// end product categories ///////////
////// the tag /////////////////////////////////////////////////
    public function getTagsByAlias(){
        $name   = $this->input->post('name');
        $data['nameget']    =$this->productmodel->searchtag($name);
        $subnametal='';
        foreach ($data['nameget'] as $nameget){
            $subname=$nameget->tagname;
            if($subnametal==null){
                $subnametal="'".$subname."'";
            }
            else{
                $subnametal= $subnametal.","."'".$subname."'";
            }
        }
        echo $subnametal;
    }

    //Hàm lấy dòng xe khi chọn hãng xe
    public function select_dongxe(){
        $id = $this->input->post('id');
        $data['list_dongxe'] = $this->raovat_model->get_data('raovat_dongxe',array('id_hangxe'=>$id));

        if(isset($data['list_dongxe'])){
            foreach($data['list_dongxe'] as $value){
                echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                
            }
        }else {
            echo ' <option value="">Chưa cập nhật dòng xe</option>';
        }
        
    }                                                                                                           

//Hàm lấy đời xe khi chọn hãng xe
    public function select_doixe(){
        $id = $this->input->post('id');
        $data['list_doixe'] = $this->raovat_model->get_data('raovat_doixe',array('id_dongxe'=>$id));

        if(isset($data['list_doixe'])){
            foreach($data['list_doixe'] as $value){ 
                echo '<option value="'.$value->id.'">'.$value->name.'</option>';
            }
        }
        
    }
// Hàm lấy danh sách danh mục phụ tùng
    public function ds_dm_phutung(){
        $data['list'] = $this->raovat_model->get_data('product_danhmuc_phutung',array());
        // echo '<pre>';
        // print_r($data['list']);
        // die();
        //Load vieư
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/phu_tung/list_dm',$data);
        $this->load->view('admin/footer');
    }
// Hàm Thêm mới danh mục phụ tùng
    public function add_danhmuc_phutung($id_edit=null){
        $data['list_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array());
        $data['xuat_xu'] = $this->raovat_model->get_data('raovat_xuatxu',array());
        $data['list_parent'] = $this->raovat_model->get_data(' product_danhmuc_phutung',array());


        if(isset($_POST['add_news'])){
            $arr = array(
                'name' => $this->input->post('name'),
                'alias' => $this->input->post('alias'),
                'status' => $this->input->post('status'),
                'id_hangxe' => $this->input->post('id_hangxe'),
                'id_dongxe' => $this->input->post('id_dongxe'),
                'id_doixe' => $this->input->post('id_doixe'),
                'xuat_xu' => $this->input->post('xuat_xu'),
                'parent_id' => $this->input->post('parent_id'),
            );
            // Kiểm tra rỗng các giá trị đầu vào
            if($this->input->post('name')== ''){ unset($arr['ten_phu_tung']);}
            if($this->input->post('alias')== ''){ unset($arr['alias']);}
            if($this->input->post('status')== ''){ unset($arr['status']);}
            if($this->input->post('id_hangxe')== ''){ unset($arr['id_hangxe']);}
            if($this->input->post('id_dongxe')== ''){ unset($arr['id_dongxe']);}
            if($this->input->post('id_doixe')== ''){ unset($arr['id_doixe']);}
            if($this->input->post('xuat_xu')== ''){ unset($arr['xuat_xu']);}
            if($this->input->post('parent_id')== ''){ unset($arr['parent_id']);}
            // Kiểm tra tồn tại của bản ghi
            $checkAlias = $this->productmodel->getFirstRowWhere('product_danhmuc_phutung',array(
                'alias' => $this->input->post('alias'),
            ));
            if(isset($checkAlias)){
                $this->session->set_flashdata("mess", "Đường dẫn alias đã tồn tại,vui lòng chọn đường dẫn khác !");
                redirect($_SERVER['HTTP_REFERER']);
            }
            //Nếu tồn tại $id_edit thì update còn ko thì thêm mới
            if (!empty($_POST['edit'])){
                // echo '<pre>';
                // print_r($arr);
                // die();
                $id = $this->productmodel->Update_where('product_danhmuc_phutung', array('id'=>$_POST['edit']), $arr);
                $this->session->set_flashdata("mess", "Cập nhật thành công!");
            } else {
             
                $id = $this->productmodel->Add('product_danhmuc_phutung', $arr);
                $this->session->set_flashdata("mess", "Thêm mới thành công!");
                
            }


        }
        $data['btn_name']='Thêm';
        // Load view
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/phu_tung/add_dm',$data);
        $this->load->view('admin/footer');
    }

}