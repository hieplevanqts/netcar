<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    //index
    public function index(){

        if(isset($_POST['sendcontact'])){
            


            $arr=array('full_name' => $this->input->post('full_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
                'comment' => $this->input->post('comment'),
                'time' => time(),
                // 'sendcontact'=> $this->input->post('sendcontact'),
            );

            // echo '<pre>';
            // print_r($arr['sendcontact']);
            // die();
            $id=$this->system_model->Add('contact',$arr);

            if($id){
                $this->session->set_flashdata("mess", "Bạn đã gửi thông tin liên hệ thành công!");
                $_SESSION['mess'] = 'Bạn đã gửi thông tin liên hệ thành công!';
            }
            // redirect($_SERVER['HTTP_REFERER']);
        }
        $data['info_contact']=$this->system_model->getFirstRowWhere('staticpage',array(
            'lang' => $this->language,
            'contact_page' => 1
        ));
        // LẤY THÔNG TIN EMAIL NGƯỜI BÁN
        $data['email']=$this->system_model->getFirstRowWhere('raovat',array(
            // 'lang' => $this->language,
            'id' => $this->input->post('sendcontact'),
        ));
            
        $email = $data['email']->email_nguoi_ban;
            // echo '<pre>';
            // print_r($email);
            // die();     
        // Hàm gửi email đến ngưới bán
                $config = Array(
                    'protocol'  => 'smtp',
                    'smtp_host' => $this->config->item('smtp.gmail.com'),
                    'smtp_port' => $this->config->item('465'),
                    'smtp_user' => $this->config->item('vanhiep2008@gmail.com'), // change it to yours
                    'smtp_pass' => $this->config->item('qwhzkbqksksojnil'), // change it to yours
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'wordwrap'  => TRUE
                );
                $this->load->library('email', $config);
                $subject = 'Liên hệ từ - '.$this->input->post('full_name');
                $message = '<p><h2>'.$this->option->site_name.'</h2></p>';
                $message .= '<p><i>Thông tin của khách hàng liên hệ như sau:</i></p>';
                $message .='<p><i>Họ và tên :</i>'.$this->input->post('full_name').',<p>';
                $message .='<p><i>Số điện thoại</i> :'.$this->input->post('phone').'</p>';
                $message .='<p><i>Nội dung liên hệ</i></p>';
                $message .='<p>'.$this->input->post('comment').'</p>';
                // Get full html:
                $body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                            <title>' . htmlspecialchars($subject, ENT_QUOTES, $this->email->charset) . '</title>
                            <style type="text/css">
                                body {
                                    font-family: Arial, Verdana, Helvetica, sans-serif;
                                    font-size: 16px;
                                }
                                table{border-color:#ddd}
                                table td{border-color:#ddd;padding:10px}
                                .list-f{padding:5px;}
                                ul li{padding:5px}
                                img{max-width:100%}
                            </style>
                        </head>
                        <body>
                        ' . $message . '
                        </body>
                        </html>';
                $subject = "Thông tin liên hệ";
                $receiver_email = $email;
                $this->email->set_newline("\r\n");
                $this->email->from(@$this->option->site_email,'KHÁCH HÀNG LIÊN HỆ MUA XE'); // change it to yours to yours
                $this->email->to($receiver_email); // change it to yours
                $this->email->subject($subject);
                $this->email->message($body);
                $this->email->send();
                //   echo "<pre>";
                //   print_r($arr);
                //   die();
        

        // Kết thúc hàm gửi mail đến người bán
            
        redirect($_SERVER['HTTP_REFERER']);
        $data['hotlines'] = $this->system_model->get_data('support_online',array(
            'type' => 2
        ));
        $data['home_left']=$this->load->widget('home_left');
        $data['doitac']=$this->load->widget('doitac');
        $seo = array(
            'title' => 'Liên Hệ'
        );
        $this->license_level2();
        $this->LoadHeader(null,$seo,true);
        $this->load->view('contact/contact',$data);
        $this->LoadFooter();
    }
     // dang ky  mail tran manh
    public  function add_email(){
        if(isset($_POST['email'])){
            $arr=array(
              //  'name' => $_POST['name'],
                'email' => $_POST['email'],
              //  'content' => $_POST['content'],
                'time' => time()
            );
            $item = $this->system_model->getFirstRowWhere('emails',array('email',$_POST['email']));
            if(!empty($item)){
                $this->system_model->Update_where('emails',array('if',$item->id),$arr);
            }
            else{
                $this->system_model->Add('emails',$arr);
            }
            $this->session->set_flashdata("mess", "Email của bạn đăng ký thành công!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
   // dat cau hoi dap
    public function  sendQuestion(){
        if(isset($_POST['sendcontact'])){
            $arr=array('full_name' => $this->input->post('full_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'comment' => $this->input->post('comment'),
                'cat_name' => $this->input->post('cat_name'),
                'time' => time(),
            );
            $id=$this->system_model->Add('contact',$arr);

            if($id){
                $this->session->set_userData('mess','Bạn đã gửi thông tin thành công!!!');
            }
            // redirect($_SERVER['HTTP_REFERER']);
        }
    }

    
}