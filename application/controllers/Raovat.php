<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Raovat extends MY_Controller
{
    protected $module_name="Raovat";
    public function __construct() {
        parent::__construct();
        $this->load->helper('url','file','upload');
        $this->load->model('raovat_model');
        $this->load->library('pagination');
    }

    public function index($tinh='toan-quoc'){
        $_SESSION['tinh_raovat']=$tinh;
        $config['base_url'] = base_url('rao-vat');
        $config['total_rows'] = $this->raovat_model->countuser_post($tinh); // xác định tổng số record
        $config['per_page'] = 20; // xác định số record ở mỗi trang
        $config['uri_segment'] = 2; // xác định segment chứa page number

        $config['full_tag_open'] = "<ul class='pagination pagination-sm '>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $data = array();
        $data['list'] = $this->raovat_model->getuser_post($tinh,$config['per_page'], $this->uri->segment(2));
        $data['banner_right'] = $this->raovat_model->Get_where('images',array('type'=>'ads_right'));
        $data['cate'] = $this->raovat_model->getList('post_cate');
        $data['tinhthanh'] = $this->raovat_model->getList('province');
        $arr=array();
        foreach($data['list'] as $v){
            $arr[]=$v->id;
        }
        $data['post_image'] = $this->raovat_model->getpost_image($arr);
        $this->LoadHeader('Rao vặt');
        $this->load->view('raovat_index',$data);
        $this->LoadFooter();
    }

    public function danhmuc_raovat($alias,$tinh='toan-quoc'){

        isset($_SESSION['tinh_thanh'])?$tinh=$_SESSION['tinh_thanh']:$tinh=$tinh;
        $config['base_url'] = base_url('rao-vat-'.$tinh.'/'.$alias);
        $config['total_rows'] = $this->raovat_model->countuser_post_bycate($alias,$tinh); // xác định tổng số record
        $config['per_page'] = 20; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number

        $config['full_tag_open'] = "<ul class='pagination pagination-sm '>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $data = array();
        $data['list'] = $this->raovat_model->getuser_post_bycate($alias,$tinh,$config['per_page'], $this->uri->segment(3));
        $data['cate'] = $this->raovat_model->getList('post_cate');
        $data['curent_cate'] = $alias;
        $data['tinhthanh'] = $this->raovat_model->getList('province');
        $arr=array();
        foreach($data['list'] as $v){
            $arr[]=$v->id;
        }
        $data['post_image'] = $this->raovat_model->getpost_image($arr);
        $this->LoadHeader('Rao vặt');
        $this->load->view('raovat_index',$data);
        $this->LoadFooter();
    }

    public function chitiet_raovat($alias){

        $data['item'] = $this->raovat_model->getDetail($alias);
        $this->raovat_model->Update_where('user_post',array('id'=>$data['item']->id),array('dientich'=>$data['item']->dientich+1));
        $data['banner_right'] = $this->raovat_model->Get_where('images',array('type'=>'ads_right'));
//        $data['menu_right'] = $this->raovat_model->getMenuRightRoot();
        $data['images'] = $this->raovat_model->Get_where('user_post_images',array('id_item'=>$data['item']->id));
        $this->LoadHeader();
        $this->load->view('raovat_chitiet',$data);
        $this->LoadFooter();
    }


    public function raovat_list(){
        $this->auth->checkUserLogin();
        $config['base_url'] = base_url('trang-ca-nhan');
        $config['total_rows'] = $this->raovat_model->count_user_post('user_post'); // xác định tổng số record
        $config['per_page'] = 20; // xác định số record ở mỗi trang
        $config['uri_segment'] = 2; // xác định segment chứa page number
        $this->pagination->initialize($config);
        $data = array();
        $data['userslist'] = $this->raovat_model->User_post($config['per_page'], $this->uri->segment(2));
        $data['cate'] = $this->raovat_model->getList('post_cate');

        $this->LoadHeader();
        $this->load->view('raovat_list',$data);
        $this->LoadFooter();
    }


    public function raovat_bycate($alias){
        $this->auth->checkUserLogin();
        $config['base_url'] = base_url('ds-rao-vat/'.$alias);
        $config['total_rows'] = $this->raovat_model->countuser_post_bycate_manager($alias); // xác định tổng số record
        $config['per_page'] = 20; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number
        $this->pagination->initialize($config);
        $data = array();
        $data['userslist'] = $this->raovat_model->getuser_post_bycate_manager($alias,$config['per_page'], $this->uri->segment(3));
        $data['cate'] = $this->raovat_model->getList('post_cate');
        $data['curent_cate'] = $alias;

        $this->LoadHeader();
        $this->load->view('raovat_list',$data);
        $this->LoadFooter();
    }

    //Edit rao vat
    public function edit1($id)
    {
        $this->auth->checkUserLogin();
        $this->load->helper('ckeditor_helper');
        $this->load->helper('model_helper');
        $data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ckeditor',
            'path' => 'assets/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' =>  array(
                    array( 'Source','NumberedList','BulletedList', '-', 'Bold', 'Italic', 'Underline', 'Strike' ,'-', 'Link', 'Unlink', 'Anchor','Image')
                ), //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '300px', //Setting a custom height
            ));
        $config['upload_path']   = './upload/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '1000';
        $config['max_width']     = '1500';
        $config['max_height']    = '1000';
        $this->load->library('upload', $config);

        $raovat = $this->raovat_model->getNewsByID($id);

        if($raovat->view==1) redirect(base_url('trang-ca-nhan'));
        
        if (isset($_POST['editraovat'])) {
            $tieude        = $this->input->post('tieude');
            $ma            = $this->input->post('ma');
            $loai_giaodich = $this->input->post('loai_giaodich');
            $loai_nhatdat  = $this->input->post('loai_nhatdat');
            $ngay_batdau   = strtotime(date_fomat_en($this->input->post('ngay_batdau')));
            $ngay_ketthuc  = strtotime(date_fomat_en($this->input->post('ngay_ketthuc')));
            $tinh_thanh    = $this->input->post('tinh_thanh');
            $quan_huyen    = $this->input->post('quan_huyen');
            $dientich     = $this->input->post('dientich');
            $gia_m     = $this->input->post('gia_m');
            $diachi     = $this->input->post('diachi');
            $sophong     = $this->input->post('sophong');
            $sotang    = $this->input->post('sotang');
            $mattien   = $this->input->post('mattien');
            $noidung  = $this->input->post('noidung');
            $ten_lienhe  = $this->input->post('ten_lienhe');
            $diachi_lienhe  = $this->input->post('diachi_lienhe');
            $dienthoai_lienhe  = $this->input->post('dienthoai_lienhe');
            $email_lienhe  = $this->input->post('email_lienhe');
            $userid  = $this->session->userdata('userid');
            $alias       = make_alias($tieude) . '-' . $raovat->id;

            if ($_FILES['userfile']['name'] != '') {
                if (!$this->upload->do_upload()) {
                    $data['error'] = 'Ảnh không thỏa mãn';
                } else {
                    $upload = array('upload_data' => $this->upload->data());
                    $image  = 'upload/img/' . $upload['upload_data']['file_name'];
                    $raovat = array('tieude' => $tieude,
                        'ma' => $ma,
                        'alias' => $alias ,
                        'loai_giaodich' => $loai_giaodich,
                        'loai_nhatdat' => $loai_nhatdat,
                        'ngay_batdau' => $ngay_batdau,
                        'ngay_ketthuc' => $ngay_ketthuc,
                        'tinh_thanh' => $tinh_thanh,
                        'quan_huyen' =>$quan_huyen ,
                        'dientich' => $dientich,
                        'gia_m' => str_replace(',','',$gia_m),
                        'diachi' => $diachi,
                        'sophong' => $sophong,
                        'sotang' => $sotang,
                        'mattien' => $mattien,
                        'noidung' => $noidung,
                        'ten_lienhe' => $ten_lienhe,
                        'diachi_lienhe' => $diachi_lienhe,
                        'dienthoai_lienhe' => $dienthoai_lienhe,
                        'email_lienhe' => $email_lienhe,
                        'userid' => $userid, );
                    $this->raovat_model->Update('user_post', $id, $raovat);

                    redirect( base_url('quan-ly-rao-vat'));
                }
            } else {
                $raovat = array('tieude' => $tieude,
                    'ma' => $ma,
                    'alias' => $alias ,
                    'loai_giaodich' => $loai_giaodich,
                    'loai_nhatdat' => $loai_nhatdat,
                    'ngay_batdau' => $ngay_batdau,
                    'ngay_ketthuc' => $ngay_ketthuc,
                    'tinh_thanh' => $tinh_thanh,
                    'quan_huyen' =>$quan_huyen ,
                    'dientich' => $dientich,
                    'gia_m' => str_replace(',','',$gia_m),
                    'diachi' => $diachi,
                    'sophong' => $sophong,
                    'sotang' => $sotang,
                    'mattien' => $mattien,
                    'noidung' => $noidung,
                    'ten_lienhe' => $ten_lienhe,
                    'diachi_lienhe' => $diachi_lienhe,
                    'dienthoai_lienhe' => $dienthoai_lienhe,
                    'email_lienhe' => $email_lienhe,
                    'userid' => $userid, );

                $this->raovat_model->Update('user_post', $id, $raovat);

                redirect( base_url('quan-ly-rao-vat'));
            }
        }
        $data['raovat']   = $raovat;

        $data['district'] = $this->raovat_model->Get_where('district',array('provinceid'=>$raovat->tinh_thanh));

        $data['pro_image'] = $this->raovat_model->getProImage($id);

        $data['province'] = $this->raovat_model->getList('province');

        $this->LoadHeader();
        $this->load->view('raovat_edit',$data);
        $this->LoadFooter();
    }

    //Delete rao vat
    public function delete($id){
        $this->raovat_model->Delete('user_post',$id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function active_item(){
        //$this->auth->check();
        $u=$this->raovat_model->getFirstRowWhere('user_post',array('id'=>$_POST['id']));

        if($u->view==1){
            $this->raovat_model->Update_where('user_post', array('id' => $_POST['id']), array('view'=>0));

        }else if($u->view==0){
            $this->raovat_model->Update_where('user_post', array('id' => $_POST['id']), array('view'=>1));
        }
        echo 1;
    }

    public function getdistric()
    {
        if (isset($_POST['id'])) {
            $list        = $this->f_user_post->Get_where('district', array('provinceid' => $_POST['id']));
            echo json_encode($list);
        }
    }



    public function convert_vi_to_en($str) {
        $str = preg_replace(“/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/”, ‘a’, $str);
        $str = preg_replace(“/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/”, ‘e’, $str);
        $str = preg_replace(“/(ì|í|ị|ỉ|ĩ)/”, ‘i’, $str);
        $str = preg_replace(“/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/”, ‘o’, $str);
        $str = preg_replace(“/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/”, ‘u’, $str);
        $str = preg_replace(“/(ỳ|ý|ỵ|ỷ|ỹ)/”, ‘y’, $str);
        $str = preg_replace(“/(đ)/”, ‘d’, $str);
        $str = preg_replace(“/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/”, ‘A’, $str);
        $str = preg_replace(“/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/”, ‘E’, $str);
        $str = preg_replace(“/(Ì|Í|Ị|Ỉ|Ĩ)/”, ‘I’, $str);
        $str = preg_replace(“/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/”, ‘O’, $str);
        $str = preg_replace(“/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/”, ‘U’, $str);
        $str = preg_replace(“/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/”, ‘Y’, $str);
        $str = preg_replace(“/(Đ)/”, ‘D’, $str);
        //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
        return $str;
    }






    public function add_raovat($id_edit=null)
    {

		// $this->check_acl();
        // $data['admin'] = $this->session->userdata('adminid');
        if($this->session->userdata('user_id_login')){
        
        $this->load->helper('thumbnail_helper');
        $data['btn_name']='Thêm';
        $data['btn_demo'] = "Upload file demo";
        $data['max_sort']=$max_sort=$this->raovat_model->SelectMax('raovat','sort')+1;
        if($id_edit!=null){
			$data['edit']=$this->raovat_model->getFirstRowWhere('raovat',array('id'=>$id_edit));

			$data['cate_selected'] = $this->raovat_model->getField_array('raovat_to_category','id_category',
                array('id_raovat'=>$id_edit));
			// danh sách ảnh hụ
			$data['listimg'] = $this->raovat_model->get_data('raovat_images',array('id_item'=>$id_edit));
            $data['btn_name']='Cập nhật';
			$data['max_sort']=$max_sort=$data['edit']->sort;
        }
		
		
		if(isset($_POST['tien_nghi'])){
         
			$tien_nghi = json_encode($_POST['tien_nghi']);
		}
		if(isset($_POST['an_toan'])){
					$an_toan = json_encode($_POST['an_toan']);
                }
               
		if (isset($_POST['dang_tin'])) {

            $id_start  = (int)$this->input->post('downloaded');
            $arrTags = explode(",",$this->input->post('tags'));
            $price       = str_replace(array(';','.',',',' '),'',$this->input->post('price'));
            $price_sale      = str_replace(array(';','.',',',' '),'',$this->input->post('price_sale'));
            $alias = make_alias($this->input->post('alias'));
            
			$arr = array(
                'name'            => $this->input->post('name'),
                'alias'			  => make_alias($this->input->post('name')).time(),
               
                'description'     => $this->input->post('description'),
                'code'            => $this->input->post('code'),
                'detail'          => $this->input->post('detail'),
                'price'           => $price,
                'price_sale'      => $price_sale,
                'status'       => $this->input->post('status'),
                'home'            => $this->input->post('home'),
                'hot'             => $this->input->post('hot'),
                'focus'           => $this->input->post('focus'),
                'active'          => $this->input->post('active'),
                'description_seo' => $this->input->post('description_seo'),
                'title_seo'       => $this->input->post('title_seo'),
                'keyword_seo'     => $this->input->post('keyword_seo'),
                'caption_3'     => $this->input->post('caption_3'),
                'brand'            => $this->input->post('brand'),
                'style'           => $this->input->post('style'),
                'caption_2'       => $this->input->post('caption_2'),
                'locale'          => $this->input->post('locale'),
                'view'            => $this->input->post('view'),
                'sort'            => $max_sort,
                'lang'            => $this->language,
                'tags'          => $this->input->post('tags'),
                'time'			=>time(),
                // 'user_id'			=>$data['admin']->id,
                // Update by Lê Văn Hiệp
                'id_hangxe'                  =>$this->input->post('hang_xe'),
                'nam_san_xuat' =>$this->input->post('nam_san_xuat'),
                'version' =>$this->input->post('version'),
                'status' =>$this->input->post('status'),
                'dang_xe' =>$this->input->post('dang_xe'),
                // 'price' =>$this->input->post('price'),
                'content_post' =>$this->input->post('content_post'),
                'dong_xe' =>$this->input->post('dong_xe'),
                'doi_xe' =>$this->input->post('doi_xe'),
                'xuat_xu' =>$this->input->post('xuat_xu'),
                'mau_ngoai_that' =>$this->input->post('mau_ngoai_that'),
                'mau_noi_that' =>$this->input->post('mau_noi_that'),
                'km_dadi' =>$this->input->post('km_dadi'),
                'kich_thuoc' =>$this->input->post('kich_thuoc'),
                'chieu_dai_co_so' =>$this->input->post('chieu_dai_co_so'),
                'trong_luong_ko_tai' =>$this->input->post('trong_luong_ko_tai'),
                'dung_tich_xi_lanh' =>$this->input->post('dung_tich_xi_lanh'),
                'dung_tich_binh_nhien_lieu' =>$this->input->post('dung_tich_binh_nhien_lieu'),
                'ph' =>$this->input->post('ph'),
                'giam_xoc' =>$this->input->post('giam_xoc'),
                'thong_so_lop' =>$this->input->post('thong_so_lop'),
                'vanh_mam_xe' =>$this->input->post('vanh_mam_xe'),
                'so_cua' =>$this->input->post('so_cua'),
                'hop_so' =>$this->input->post('hop_so'),
                'nhien_lieu' =>$this->input->post('nhien_lieu'),
                'so_ghe_ngoi' =>$this->input->post('so_ghe_ngoi'),
                'dan_dong' =>$this->input->post('dan_dong'),
                'muc_tieu_thu_do_thi' =>$this->input->post('muc_tieu_thu_do_thi'),
                'muc_tieu_thu_duong_truong' =>$this->input->post('muc_tieu_thu_duong_truong'),
                //file ảnh
                // 'choose_file' =>$this->input->post('choose_file'),
                //Thông tin người bán
                'ten_nguoi_ban' =>$this->input->post('ten_nguoi_ban'),
                'phone_nguoi_ban' =>$this->input->post('phone_nguoi_ban'),
                'tinh_thanh_pho' =>$this->input->post('tinh_thanh_pho'),
                'dia_chi' =>$this->input->post('dia_chi'),
                'email_nguoi_ban' =>$this->input->post('email_nguoi_ban'),
                'tien_nghi' =>$tien_nghi,
                'an_toan'=>$an_toan,
                'time_start' =>$this->input->post('time_start'),
                'time_end' =>$this->input->post('time_end'),
                'create_at'=>date("YmdHis",time()),
                'active'=>0,


            );
           
            $kiemtra=$this->raovat_model->getFirstRowWhere('raovat',array('alias'=>$arr['alias']));
            if(isset($kiemtra)){
                $_SESSION['error'] = "Đường dẫn đã tồn tại,hãy nhập đường dẫn khác !"; 
                redirect($_SERVER['HTTP_REFERER']);
            }
            // echo '<pre>';
            // print_r($arr);
            // die();
           
            /////////////////////////////////////
            //upload images ảnh đại diện
            $this->load->library('upload');
            $pathImage = "upload/img/raovats/";
            $dir_image = date('dmY');
            if(!is_dir($pathImage.$dir_image))
            {
                @mkdir($pathImage.$dir_image);
                $this->load->helper('file');
                @write_file($pathImage.$dir_image.'/index.html', '<p>Directory access is forbidden.</p>');
            }
            $config['upload_path'] = $pathImage.$dir_image.'/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|GIF';
            $config['max_size'] = '*';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';
            $config['encrypt_name'] = true;

        

            $this->upload->initialize($config);
            $image = '';
           
            if($this->upload->do_upload('chooseFile_one'))
            {
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
				
            }
            if(!$this->upload->do_upload('chooseFile_one'))
            {
                $_SESSION['error'] = "Bạn phải chọn ảnh đại diện ở ô đầu tiên !"; 
                redirect($_SERVER['HTTP_REFERER']);          
            }

///////////////////////////////////////////////
            if (!empty($_POST['edit'])){
				$id = $this->raovat_model->Update_where('raovat', array('id'=>$id_edit), $arr);
				$this->session->set_flashdata("mess", "Cập nhật thành công! đang chờ duyệt...!");
			} else {
				$id = $this->raovat_model->Add('raovat', $arr);
				$this->session->set_flashdata("mess", "Thêm mới thành công! đang chờ duyệt..!");
            }
          
           
                // xoa anh dai dien cũ và anh thumb cu
                $item=$this->raovat_model->getFirstRowWhere('raovat',array('id'=>$id));
                $dir_image_old = $item->raovat_dir;

                // xoa anh san pham
                if(file_exists($pathImage.$dir_image_old.'/'.$item->image))
                {
                    @unlink($pathImage.$dir_image_old.'/'.$item->image);
                }
                // xoa anh thumb
                for($j = 1; $j <= 3; $j++)
                {
                    if(file_exists($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item->image))
                    {
                        @unlink($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item->image);
                    }
                }
            
            

			if ($id_edit != null) {
					$id = $id_edit;
				} else $id = $id;
            $checkAlias = $this->raovat_model->getFirstRowWhere('alias',array(
                'services' => $id
            ));
            if(empty($checkAlias)){
                $this->raovat_model->Add('alias',array(
                    'services' => $id,
                    'type' => 'services',
                    'alias' => $alias
                ));
            }else{
                $this->raovat_model->Update_where('alias',array('services' => $id),array(
                    'alias' => $alias
                ));
            }
			/*
             * tags
             */
            $this->raovat_model->Delete_where('raovat_tag',array(
                'raovat_id' => $id
            ));
            foreach($arrTags as $tag)
            {
                $tag = trim($tag);
                if($tag !=='')
                {
                    $this->raovat_model->Add('raovat_tag',array(
                        'raovat_id' => $id_edit,
                        'tag' => $tag,
                        'lang'  => $this->language,
                        'alias' => make_alias($tag)
                    ));
                }
            }

            if (isset($_POST['category']) && sizeof($_POST['category']) > 0) {
                $post_cat = $_POST['category'];
                $this->raovat_model->Delete_where('raovat_to_category', array('id_raovat' => $id));
                for ($i = 0; $i < sizeof($post_cat); $i++) {
                    $ca = array('id_raovat' => $id, 'id_category' => $post_cat[$i]);
                    $this->raovat_model->Add('raovat_to_category', $ca);
                }

               $a= $this->raovat_model->Update_where('raovat', array('id'=>$id), array('category_id' => end($post_cat)));

			}
			// cap nhat màu sắc
			if (isset($_POST['color']) && sizeof($_POST['color']) > 0) {
                $post_color = $_POST['color'];

				$this->raovat_model->Delete_where('raovat_to_color', array('id_raovat' => $id_edit));
                for ($i = 0; $i < sizeof($post_color); $i++) {
                    $color = array('id_raovat' => $id_edit, 'id_color' => $post_color[$i]);
                    $this->raovat_model->Add('raovat_to_color', $color);
                }
                $this->raovat_model->Update_where('raovat', array('id'=>$id_edit), array('color' => end($post_color)));
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
                    $mt='';
                    // if(!$mt){
                    //     show_404('lỗi upload ảnh');
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
				$this->raovat_model->Update_where('raovat', array('id'=>$id), array(
					'image' => @$image,
                    'raovat_dir' => $dir_image,
                    'img_dir'=> $config['upload_path'],
				));
            }
            if(@$image == 'none.gif')
            {
                #Remove dir
                $this->load->library('file');
                if(trim($dir_image) != '' && trim($dir_image) != 'default' && is_dir('upload/img/raovat/'.$dir_image) && count($this->file->load('upload/img/raovat/'.$dir_image,'index.html')) == 0)
                {
                    if(file_exists('upload/img/raovats/'.$dir_image.'/index.html'))
                    {
                        @unlink('upload/img/raovats/'.$dir_image.'/index.html');
                    }
                    @rmdir('upload/img/raovats/'.$dir_image);
                }
                $dir_image = 'default';
            }

            //upload multi images
            $config2['upload_path'] = './upload/img/raovats_multi/';
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
                            $link = 'upload/img/raovats_multi/' . $fileData['file_name'];
                            $id_i = $this->raovat_model->Add('raovat_images',array(
                                'image' => $link,
                                'id_item' => $id,
                            ));

                            
                            // //watermark
                            // $this->load->helper('email_helper');
                            // $mt = add_water_mark($link,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);
                        }

                    }
                }
            }
        
        $this->session->set_flashdata("mess", "Đăng tin thành công!");
		$_SESSION['mess'] = "Bạn đã đăng bài thành công";
        redirect($_SERVER['HTTP_REFERER']);
        }
        

    
        $data['cate'] = $this->raovat_model->get_data('raovat_category',array(
            'lang' => $this->language
        ),array('sort'=>''));
		// thương hiệu
        $data['cat_brand'] = $this->raovat_model->get_data('product_brand',array(
            'lang' => $this->language
        ),null);
		// trường xuất sứ
		$data['cat_locales'] = $this->raovat_model->get_data('product_locale',array(
            'lang' => $this->language
        ),null);
        $data['show_home'] = $this->raovat_model->getFirstRowWhere('config_checkpro',array('type' => 'raovat','field' => 'home',));
        $data['show_hot'] = $this->raovat_model->getFirstRowWhere('config_checkpro',array('type' => 'raovat','field' => 'hot',));
        $data['show_focus'] = $this->raovat_model->getFirstRowWhere('config_checkpro',array('type' => 'raovat','field' => 'focus',));
        $data['headerTitle'] = $data['btn_name']." Tin rao";
        $seo = array();

        $data['raovat_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array(),array());
        $data['list_dongxe'] = $this->raovat_model->get_data('raovat_dongxe',array());
        $data['list_xuatxu'] = $this->raovat_model->get_data('raovat_xuatxu',array());
        $data['list_doixe'] = $this->raovat_model->get_data('raovat_doixe',array());
        $data['list_tiennghi'] = $this->raovat_model->get_data('raovat_tiennghi',array());
        $data['list_antoan'] = $this->raovat_model->get_data('raovat_antoan',array());

    }else{
        $_SESSION['error'] = 'Bạn chưa đăng nhập !';
        redirect(base_url('login'));
    }

    // captcha
    
        $seo = array(
            'title' => 'Booking'
        );
        $this->load->helper('unlink');
        unlink_captcha($this->session->userdata('sessionPathCaptchaPostAds'));
        #BEGIN: Create captcha post ads
        $this->load->library('captcha');
        $codeCaptcha = $this->captcha->code(5);
        $this->session->set_userdata('sessionCaptchaPostAds', $codeCaptcha);
        $imageCaptcha = 'assets/captcha/'.md5(microtime()).'posa.jpg';
        $this->session->set_userdata('sessionPathCaptchaPostAds', $imageCaptcha);
        $this->captcha->create($codeCaptcha, $imageCaptcha);
        if(file_exists($imageCaptcha))
        {
            $data['imageCaptchaPostAds'] = $imageCaptcha;
            $data['captcha_check'] = $codeCaptcha;
        }
        $data['code_captcha'] = $codeCaptcha;
        $data['form_key'] = $keyform = rand();
        // var_dump($data['form_key']);die;
        // echo $imageCaptcha; die();
        $this->session->set_userdata('tokenkey',$keyform);

        $this->LoadHeader($view=null,$seo,true);
        $this->load->view('raovat/tindang',$data);
        $this->LoadFooter();
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
            echo '<option value="'.$value->name.'">'.$value->name.'</option>';
        }
    }
    
}







































function edit(){
    $id_edit = $this->uri->segment('2');
    
    $data['item'] =  $this->system_model->getFirstRowWhere('raovat',array('id' => $id_edit)); 
       
    $data['raovat_hangxe'] = $this->raovat_model->get_data('raovat_hangxe',array(),array());
    
    if(isset($data['item']->dong_xe)){$data['dongxe'] = $this->raovat_model->getFirstRowWhere('raovat_dongxe',array('id' => $data['item']->dong_xe));}
    // echo '<pre>';
    // print_r($data['dongxe']);
    // die();
    if(isset($data['item']->xuat_xu)){$data['xuatxu'] = $this->raovat_model->getFirstRowWhere('raovat_xuatxu',array($data['item']->xuat_xu));}
    if(isset($data['item']->doi_xe)){$data['doixe'] = $this->raovat_model->getFirstRowWhere('raovat_doixe',array('id' => $data['item']->doi_xe));}  
    $data['list_tiennghi'] = $this->raovat_model->get_data('raovat_tiennghi',array());
    $data['list_antoan'] = $this->raovat_model->get_data('raovat_antoan',array());
if(isset($_POST['tien_nghi'])){        
    $tien_nghi = json_encode($_POST['tien_nghi']);
}
if(isset($_POST['an_toan'])){
            $an_toan = json_encode($_POST['an_toan']);
        }
if (isset($_POST['dang_tin'])) {
    $id_start  = (int)$this->input->post('downloaded');
    $arrTags = explode(",",$this->input->post('tags'));
    $price       = str_replace(array(';','.',',',' '),'',$this->input->post('price'));
    $price_sale      = str_replace(array(';','.',',',' '),'',$this->input->post('price_sale'));
    $alias = make_alias($this->input->post('alias'));   
    $arr = array(
        'name'            => $this->input->post('name'),
        // 'alias'			  => make_alias($this->input->post('name')).time(),  
        'description'     => $this->input->post('description'),
        'code'            => $this->input->post('code'),
        'detail'          => $this->input->post('detail'),
        'price'           => $price,
        'price_sale'      => $price_sale,
        'status'       => $this->input->post('status'),
        'home'            => $this->input->post('home'),
        'hot'             => $this->input->post('hot'),
        'focus'           => $this->input->post('focus'),
        'active'          => $this->input->post('active'),
        'description_seo' => $this->input->post('description_seo'),
        'title_seo'       => $this->input->post('title_seo'),
        'keyword_seo'     => $this->input->post('keyword_seo'),
        'caption_3'     => $this->input->post('caption_3'),
        'brand'            => $this->input->post('brand'),
        'style'           => $this->input->post('style'),
        'caption_2'       => $this->input->post('caption_2'),
        'locale'          => $this->input->post('locale'),
        'view'            => $this->input->post('view'),
        // 'sort'            => $max_sort,
        'lang'            => $this->language,
        'tags'          => $this->input->post('tags'),
        'time'			=>time(),
        // 'user_id'			=>$data['admin']->id,
        // Update by Lê Văn Hiệp
        'id_hangxe'                  =>$this->input->post('hang_xe'),
        'nam_san_xuat' =>$this->input->post('nam_san_xuat'),
        'version' =>$this->input->post('version'),
        'status' =>$this->input->post('status'),
        'dang_xe' =>$this->input->post('dang_xe'),
        // 'price' =>$this->input->post('price'),
        'content_post' =>$this->input->post('content_post'),
        'dong_xe' =>$this->input->post('dong_xe'),
        'doi_xe' =>$this->input->post('doi_xe'),
        'xuat_xu' =>$this->input->post('xuat_xu'),
        'mau_ngoai_that' =>$this->input->post('mau_ngoai_that'),
        'mau_noi_that' =>$this->input->post('mau_noi_that'),
        'km_dadi' =>$this->input->post('km_dadi'),
        'kich_thuoc' =>$this->input->post('kich_thuoc'),
        'chieu_dai_co_so' =>$this->input->post('chieu_dai_co_so'),
        'trong_luong_ko_tai' =>$this->input->post('trong_luong_ko_tai'),
        'dung_tich_xi_lanh' =>$this->input->post('dung_tich_xi_lanh'),
        'dung_tich_binh_nhien_lieu' =>$this->input->post('dung_tich_binh_nhien_lieu'),
        'ph' =>$this->input->post('ph'),
        'giam_xoc' =>$this->input->post('giam_xoc'),
        'thong_so_lop' =>$this->input->post('thong_so_lop'),
        'vanh_mam_xe' =>$this->input->post('vanh_mam_xe'),
        'so_cua' =>$this->input->post('so_cua'),
        'hop_so' =>$this->input->post('hop_so'),
        'nhien_lieu' =>$this->input->post('nhien_lieu'),
        'so_ghe_ngoi' =>$this->input->post('so_ghe_ngoi'),
        'dan_dong' =>$this->input->post('dan_dong'),
        'muc_tieu_thu_do_thi' =>$this->input->post('muc_tieu_thu_do_thi'),
        'muc_tieu_thu_duong_truong' =>$this->input->post('muc_tieu_thu_duong_truong'),
        //file ảnh
        // 'choose_file' =>$this->input->post('choose_file'),
        //Thông tin người bán
        'ten_nguoi_ban' =>$this->input->post('ten_nguoi_ban'),
        'phone_nguoi_ban' =>$this->input->post('phone_nguoi_ban'),
        'tinh_thanh_pho' =>$this->input->post('tinh_thanh_pho'),
        'dia_chi' =>$this->input->post('dia_chi'),
        'email_nguoi_ban' =>$this->input->post('email_nguoi_ban'),
        'tien_nghi' =>$tien_nghi,
        'an_toan'=>$an_toan,
        'time_start' =>$this->input->post('time_start'),
        'time_end' =>$this->input->post('time_end'),
        // 'create_at'=>datetime('Y-m-d H:i:s'),
        'create_at'=>date("YmdHis",time()),
		'active'=>0,
    );

        $this->raovat_model->Update_where('raovat', array('id'=>$this->input->post('dang_tin')), $arr);
        $this->session->set_flashdata("mess", "Cập nhật thành công! đang chờ duyệt...!");
    
    if ($id_edit != null) {
            $id = $id_edit;
        } else $id = $id;
    $checkAlias = $this->raovat_model->getFirstRowWhere('alias',array(
        'services' => $id
    ));
    if(empty($checkAlias)){
        $this->raovat_model->Add('alias',array(
            'services' => $id,
            'type' => 'services',
            'alias' => $alias
        ));
    }else{
        $this->raovat_model->Update_where('alias',array('services' => $id),array(
            'alias' => $alias
        ));
    }
    /*
     * tags
     */
    $this->raovat_model->Delete_where('raovat_tag',array(
        'raovat_id' => $id
    ));
    foreach($arrTags as $tag)
    {
        $tag = trim($tag);
        if($tag !=='')
        {
            $this->raovat_model->Add('raovat_tag',array(
                'raovat_id' => $id_edit,
                'tag' => $tag,
                'lang'  => $this->language,
                'alias' => make_alias($tag)
            ));
        }
    }
    if (isset($_POST['category']) && sizeof($_POST['category']) > 0) {
        $post_cat = $_POST['category'];
        $this->raovat_model->Delete_where('raovat_to_category', array('id_raovat' => $id));
        for ($i = 0; $i < sizeof($post_cat); $i++) {
            $ca = array('id_raovat' => $id, 'id_category' => $post_cat[$i]);
            $this->raovat_model->Add('raovat_to_category', $ca);
        }

       $a= $this->raovat_model->Update_where('raovat', array('id'=>$id), array('category_id' => end($post_cat)));

    }
    //upload images ảnh đại diện
    $this->load->library('upload');
    $pathImage = "upload/img/raovats/";
    $dir_image = date('dmY');
    if(!is_dir($pathImage.$dir_image))
    {
        @mkdir($pathImage.$dir_image);
        $this->load->helper('file');
        @write_file($pathImage.$dir_image.'/index.html', '<p>Directory access is forbidden.</p>');
    }
    $config['upload_path'] = $pathImage.$dir_image.'/';
    $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|GIF';
    $config['max_size'] = '*';
    $config['max_width'] = '5000';
    $config['max_height'] = '5000';
    $config['encrypt_name'] = true;
    $this->upload->initialize($config);
    $image = '';
    if($this->upload->do_upload('chooseFile_one'))
    {
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
        $item=$this->raovat_model->getFirstRowWhere('raovat',array('id'=>$this->input->post('dang_tin')));
        $dir_image_old = $item->raovat_dir;

        // xoa anh san pham
        if(file_exists($pathImage.$dir_image_old.'/'.$item->image))
        {
            @unlink($pathImage.$dir_image_old.'/'.$item->image);
        }
        // xoa anh thumb
        for($j = 1; $j <= 3; $j++)
        {
            if(file_exists($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item->image))
            {
                @unlink($pathImage.$dir_image_old.'/thumbnail_'.$j.'_'.$item->image);
            }
        }

    }

    if($image !='')
    {
        #BEGIN: Create thumbnail tạo anh thumb chen chữ
        $wm_font_size = 28;
        if(file_exists($pathImage.$dir_image.'/'.$image))
        {
            // $this->load->library('upload');
            $this->load->helper('email_helper');
            $link =  $pathImage.$dir_image.'/'.$image;
            // $mt = add_water_mark($link,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);

            // if(!$mt){
            //     show_404('lỗi upload ảnh');
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
                if(isset($sizeImage)){
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
        }
        // cap nhat anh moi
        $this->raovat_model->Update_where('raovat', array('id'=>$this->input->post('dang_tin')), array(
            'image' => @$image,
            'raovat_dir' => $dir_image,
            'img_dir'=> $config['upload_path'],
        ));
    }
    if(@$image == 'none.gif')
    {
        #Remove dir
        $this->load->library('file');
        if(trim($dir_image) != '' && trim($dir_image) != 'default' && is_dir('upload/img/raovat/'.$dir_image) && count($this->file->load('upload/img/raovat/'.$dir_image,'index.html')) == 0)
        {
            if(file_exists('upload/img/raovats/'.$dir_image.'/index.html'))
            {
                @unlink('upload/img/raovats/'.$dir_image.'/index.html');
            }
            @rmdir('upload/img/raovats/'.$dir_image);
        }
        $dir_image = 'default';
    }

    //upload multi images
    $config2['upload_path'] = './upload/img/raovats_multi/';
    $config2['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF';
    $config2['max_size'] = '*';
    $config2['max_width'] = '2000';
    $config2['max_height'] = '1400';
    $config2['encrypt_name'] = true;
    $this->upload->initialize($config2);
    if(!empty($_FILES['files']['size'])){
        $name_array = array();
        $value = $_FILES['files'];
        $count = count(@$_FILES['files']['size']);
        // foreach ($_FILES as $key => $value) {
            for ($s = 0; $s <= ($count - 1); $s++) {
                $_FILES['files']['name'] = $value['name'][$s];
                $_FILES['files']['type'] = $value['type'][$s];
                $_FILES['files']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['files']['error'] = $value['error'][$s];
                $_FILES['files']['size'] = $value['size'][$s];

                if($this->upload->do_upload('files')){
                    $fileData = $this->upload->data();
                    $uploadData[$s]['file_name'] = $fileData['file_name'];
                    $link = 'upload/img/raovats_multi/' . $fileData['file_name'];
                    $id_i = $this->raovat_model->Add('raovat_images',array(
                        'image' => $link,
                        'id_item' => $this->input->post('dang_tin'),
                    ));


                    //watermark
                    // $this->load->helper('email_helper');
                    // $mt = add_water_mark($link,$this->option->WM_text,$this->option->WM_color, $this->option->WM_size);
                // }

            }
        }
    }
    $this->session->set_flashdata("mess", "Cập nhật thành công! đang chờ duyệt ...!");
    redirect(base_url('tin-rao'));


}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $seo = '';
    $this->LoadHeader(null,$seo,true);
    $this->load->view('raovat/tindang_edit',$data);
    $this->LoadFooter();
}



}