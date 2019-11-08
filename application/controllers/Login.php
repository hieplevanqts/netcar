<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Login extends MY_Controller

{

    function __construct()

    {

        

        parent::__construct();

        $CI =& get_instance();

        $this->load->model('f_productmodel');

        $this->load->library('pagination');
        // $this->load->library('session');
    }

    public function index(){
       
		//Nếu đã đang nhập chuyển về controller user
        if($this->session->userdata('user_id_login'))
        {
            // $_SESSION['mess'] = 'bạn đã đăng nhập rồi  !';
            $data['user_id_login'] = $this->session->userdata('user_id_login');
            redirect(base_url('tin-rao'));  
        }
		
		if(isset($_POST['dang_nhap'])){
            $email = $this->input->post('email');
            $data['users'] = $this->f_productmodel->getFirstRowWhere('raovat_users',array('email'=>$email));
    
     
    
    
    
            if(isset($data['users'])){
                    $pass = md5($this->input->post('password'));
                    $phone = $this->input->post('phone');
                    if($pass == $data['users']->pass){
                    $_SESSION['mess_done'] = 'Đăng nhập thành công !';
                    $this->session->set_userdata('user_id_login', $data['users']->id);
                    
                   
                    redirect(base_url('tin-rao'));
                    }else{
                        $_SESSION['error'] = 'Mật khẩu hoặc số điện thoại không khớp !';
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }else {
                    $_SESSION['error'] = 'Đăng nhập thất bại !';
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
		
	
		$data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');
		
		
                $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

                   'description'=>@$data['cate_curent']->description_seo,

                   'keyword'=>@$data['cate_curent']->keyword_seo,

                   'image'=>@$data['cate_curent']->image,

                   'type'=>'products');



        $this->LoadHeader(null,$seo,true);

        $this->load->view('login/login',$data);

        $this->LoadFooter();

    }

    public function dang_nhap(){

		
		if(isset($_POST['dang_nhap'])){
        $email = $this->input->post('email');
        $data['users'] = $this->f_productmodel->getFirstRowWhere('raovat_users',array('email'=>$email));

 



        if(isset($data['users'])){
                $pass = md5($this->input->post('password'));
                $phone = $this->input->post('phone');
                if($pass == $data['users']->pass){
                $_SESSION['mess'] = 'Đăng nhập thành công !';
                $this->session->set_userdata('user_id_login', $data['users']->id);
                
               
                redirect(base_url('tin-rao'));
                }else{
                    $_SESSION['error'] = 'Mật khẩu hoặc số điện thoại không khớp !';
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else {
                $_SESSION['error'] = 'Đăng nhập thất bại !';
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }	


    // HÀM ĐĂNG XUẤT


    public function dang_xuat(){

        if($this->session->userdata('user_id_login'))
        {
            // $_SESSION['mess'] = 'bạn đã đăng nhập rồi  !';
            session_destroy();
            redirect(base_url('login'));  
        }
	
    }	



    // Hàm xử lý thông tin cá nhân

    public function users_info(){

        if($this->session->userdata('user_id_login'))
        {
            $data['users'] = $this->f_productmodel->getFirstRowWhere('raovat_users',array('id'=>$this->session->userdata('user_id_login')));
 
        }else {
            $_SESSION['error'] = 'Bạn chưa đăng nhập !';
            redirect(base_url('login'));
        }
        if (isset($_POST['save'])){
            $arr = array(
                'full_name'            => $this->input->post('full_name'),
                'email'			  => $this->input->post('email'),
                'email_view'     => $this->input->post('email_view'),
                'phone'            => $this->input->post('phone'),
                'address'          => $this->input->post('address'),
                'birthday'          => $this->input->post('birthday'),
                'city'          => $this->input->post('city'),
                'huyen'          => $this->input->post('huyen'),
                'xa'          => $this->input->post('xa'),
                'sex'          => $this->input->post('sex'),               
            );
            $this->f_productmodel->Update_where('raovat_users', array('id'=>$this->session->userdata('user_id_login')), $arr);
            $_SESSION['mess'] = 'Cập nhật thành công !';
            redirect($_SERVER['HTTP_REFERER']);
        }







	
        $data['cate_curent'] = $this->f_productmodel->getFirstRowWhere('product');
		
		
        $seo=array('title'=>@$data['cate_curent']->title_seo==''?$data['cate_curent']->name:$data['cate_curent']->title_seo,

           'description'=>@$data['cate_curent']->description_seo,

           'keyword'=>@$data['cate_curent']->keyword_seo,

           'image'=>@$data['cate_curent']->image,

           'type'=>'products');
        $this->LoadHeader(null,$seo,true);

        $this->load->view('login/users_info',$data);

        $this->LoadFooter();

}
}