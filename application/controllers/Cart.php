<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Cart extends MY_Controller

{

    function __construct()

    {

        parent::__construct();
        $this->load->model('cartmodel');
        $this->load->library("cart");

    }
    
/************ HÀM XỬ LÝ GIỎ HÀNG - BY LÊ VĂN HIỆP - WWW.VANHIEP.NET - ******/  
public function them(){
    $id = $this->uri->rsegment('3');
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]++;
    }
    else{
        $_SESSION['cart'][$id] = 1;
    }
    // $this->load->model('f_productmodel');
    // $item = $this->system_model->getFirstRowWhere('product_phutung',array('id'=>$id));
    // if(!$item){
    //     redirect();
    // }
    // $qty = 1;
    // $price = $item->price;
    // if($item->price_sale > 0){
    //     $price = $item->price - $item->price_sale;
    // }
    // $this->load->library("cart");
    // $data = array();
    // $data['id'] = $item->id;
    // $data['qty'] = $qty;
    // $data['name'] = 'url_title($item->ten_phu_tung)';
    // $data['image_link']= 'upload/img/products/'.$item->pro_dir.'/'.$item->image;
    // $data['price'] = $price;
  


    // $this->cart->insert($data);
  
    redirect(base_url('cart'));

}

// ***************** HÀM XEM DANH SÁCH CÁC SẢN PHẨM TRONG GIỎ HÀNG ***********/
function index(){
    $this->load->library("cart");
    $carts = $this->cart->contents();
    $total_items = $this->cart->total_items();
    $data['cart'] = $carts;
    $data['total_items'] = $total_items;
    $seo=array();
    $this->LoadHeader2(null,$seo,true);
    $this->load->view('carts/view_listcart',$data);
    $this->LoadFooter();

 

}
    public function them_vao_gio(){

        
        $data = array();

        // $qty = $this->input->post('qty');

        $id = $this->uri->segment('3');

        // $color = $this->input->post('color');

        // $size = $this->input->post('size');

        // $id_code =  $id.$color.$size;

        $pro = $this->cartmodel->getFirstRowWhere('product_phutung',array(

            'id' => $id

        ));

       

        $arr = array();

        $arr = array(
            'id' => $id,
            // 'qty' => $qty,
            // 'id_code' => $id_code,
            'price_old'   => $pro->price,
            'price'   => $pro->price_sale,
            // 'color' =>  $color,
            // 'size' => $size,
            'name'    => $pro->ten_phu_tung,
            'alias'   => $pro->alias,
            'image'   => $pro->image,
            'pro_dir' => $pro->pro_dir,
        );
         $this->cart->insert($arr);
         $cart = $this->cart->insert($arr);

        // echo '<pre>';
        // print_r($cart);
        // die();



        if($this->cart->contents()){

            foreach ($this->cart->contents() as $item){
                
                if ($item['id_code']==$id_code ){
                    $arr = array('rowid'=>$item['rowid'],
                        'qty'=>$item['qty'] + $qty);
                    $this->cart->update($arr);
                    break;
                }
                else{
                    $arr = array(
                        'id' => $id,
                        // 'qty' => $qty,
                        // 'id_code' => $id_code,
                        'price_old'   => $pro->price,
                        'price'   => $pro->price_sale,
                        // 'color' =>  $color,
                        // 'size' => $size,
                        'name'    => $pro->ten_phu_tung,
                        'alias'   => $pro->alias,
                        'image'   => $pro->image,
                        'pro_dir' => $pro->pro_dir,
                    );
                    $cart = $this->cart->insert($arr);

                  
                    break;
                }
            }
        }else{

            $arr = array(

                'id' => $id,
                'id_code' => $id_code,
                // 'qty' => $qty,
                'price_old'   => $pro->price,
                'price'   => $pro->price_sale,
                'color' =>  $color,
                'size' => $size,
                'name'    => $pro->ten_phu_tung,
                'alias'   => $pro->alias,
                'image'   => $pro->image,
                'pro_dir' => $pro->pro_dir,
            );

            $this->cart->insert($arr);

        }

        $data['items'] = $this->cart->contents();
        
        $data['count']=$this->cart->total_items();

        sleep(1);

        

        $seo=array('title'=>@$data['item']->title_seo==''

         || @$data['item']->title_seo== '0' ?$data['item']->ten_phu_tung:$data['item']->title_seo,

                   'description'=>@$data['item']->description_seo == ''?strip_tags(base64_decode($data['item']->description)):@$data['item']->description_seo,

                   'keyword'=>@$data['item']->keyword_seo == ''?strip_tags($data['item']->ten_phu_tung):$data['item']->keyword_seo,

                   'image'=> $link_img,

                   'type'=>'products');



         $seo=array();

        $this->LoadHeader2(null,$seo,true);

        $this->load->view('carts/view_listcart',$data);

        $this->LoadFooter();

    }






 // them san pham sa chon vao don hang

    public function addCartItemSelect()
    {
        $data = array();
        $qty = 1;
        // $id = $this ->input->post('id');
        $id = $this->uri->segment('2');
        $color = $this->input->post('color');
        $size = $this->input->post('size');
        $id_code =  $id.$color.$size;
        $pro = $this->cartmodel->getFirstRowWhere('product_phutung',array(
            'id' => $id
        ));
        $arr = array();
        if($this->cart->contents()){
            foreach ($this->cart->contents() as $item){
                if ($item['id_code']==$id_code ){
                    $arr = array('rowid'=>$item['rowid'],
                        'qty'=>$item['qty'] + $qty);
                    $this->cart->update($arr);
                    break;
                }
                else{
                    $arr = array(
                        'id' => $id,
                        'qty' => $qty,
                        'id_code' => $id_code,
                        'price_old'   => $pro->price,
                        'price'   => $pro->price_sale,
                        'color' =>  $color,
                        'size' => $size,
                        'name'    => url_title($pro->ten_phu_tung),
                        'alias'   => $pro->alias,
                        'image'   => $pro->image,
                        'pro_dir' => $pro->pro_dir,
                    );                   
                    $this->cart->insert($arr);
                    break;
                }
            }
        }else{
            $arr = array(
                'id' => $id,
                'id_code' => $id_code,
                'qty' => $qty,
                'price_old'   => $pro->price,
                'price'   => $pro->price - $pro->price_sale,
                'color' =>  $color,
                'size' => $size,
                'name'    => url_title($pro->alias),
                'alias'   => $pro->alias,
                'image'   => $pro->image,
                'pro_dir' => $pro->pro_dir,
            );
            // echo '<pre>';
            // print_r($arr);
            // die();
            $this->cart->insert($arr);
        }
        $data['cart'] = $this->cart->contents();       
        $data['count']=$this->cart->total_items();
        sleep(1);
        $seo ='';
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/view_listcart',$data);
        $this->LoadFooter();
    }

  // cap nhat so luong don hang

public function updateQuantityP()

    {

        $item = $this->input->post('rowid');

        $qty = $this->input->post('qty');

        $total = $this->cart->total_items();

        $data = array(

            'rowid' => $item,

            'qty'   => $qty

        );

        $this->cart->update($data);

        $data['check'] = true;

        $data['count']=$this->cart->total_items();

        sleep(1);

        $data['items'] = $this->cart->contents();

        $this->load->view('carts/update_cartp',$data);

    }

// thông tin dat hang

public function order(){

        $data = array();

        $data['items'] = $this->cart->contents();

        if(count($data['items']) < 1){

            redirect(base_url('cart/cartEmpty'));

        }



        $pay_ship = '';$coupon='';

        $pay_ship = (int) @$_POST['shipping'];

        $coupon = (int) @$_POST['coupon'];

        $sub_total = (int) @$_POST['subtotal'];

        if($this->input->post('shipping')){

            $this->session->set_userData('payship',$this->input->post('shipping'));

        }

        if($this->input->post('coupon')){

            $this->session->set_userData('coupon',$this->input->post('coupon'));

        }

        if($this->input->post('subtotal')){

            $this->session->set_userData('subtotal',$this->input->post('subtotal'));

        }

        if($this->session->userData('coupon') == 0){

            $total = $this->session->userData('subtotal') + $this->session->userData('payship');

        }else{

            $total = $this->session->userData('subtotal') - ($this->session->userData('subtotal') + $this->session->userData('payship'))*$this->session->userData('coupon') / 100;

        }

        $this->session->set_userData('total',$total);

        $data['payship'] = $this->session->userData('payship');

        $data['coupon'] = $this->session->userData('coupon');

        $data['subtotal'] = $this->session->userData('subtotal');

        $data['total'] = $this->session->userData('total');

        $data['items'] = $this->cart->contents();



        $dataUser = $this->session->userData('userData');

        $data['user'] = $this->cartmodel->getFirstRowWhere('users',array(

            'email' => $dataUser['email'],

        ));

        $data['form_key'] = $keyform = rand();

        $data['ships'] =  $this->cartmodel->get_data('province',null,null);

        $this->session->set_userdata('tokenkey',$keyform);



        $seo = array(

            'title' => 'Cart info'

        );

        $this->LoadHeader(null,$seo,false);

        $this->load->view('carts/view_order',$data);

        $this->LoadFooter();

    }

// gio hang r&#7895;ng

   public function cartEmpty(){

        $data = array();

        $seo = array(

            'title' => 'Cart info'

        );

        $this->LoadHeader(null,$seo,false);

        $this->load->view('carts/cart_empty',$data);

        $this->LoadFooter();

    }

// view gio hang

    public function checkout()
    {
        $data = array();
        $seo = array(
            'title' => 'Gi&#7887; hàng'
        );

        $data['form_key'] = $keyform = rand();

        $this->session->set_userdata('form_key',$keyform);

        $data['items'] = $this->cart->contents();

        $data['ships'] = $this->cartmodel->get_data('province',null);

        $this->LoadHeader(null,$seo,false);

        $this->load->view('carts/view_checkout',$data);

        $this->LoadFooter();

    }

 //check ma giam gia

    public function checkCoupon(){

        $code = trim($_POST['code']);

        $shipping = trim($_POST['shipping']);



        $item = $this->cartmodel->getFirstRowWhere('code_sale',array(

            'code' => $code

        ));





        $check = false;

        if(!empty($item)){

            $check = true;

            $data['coupon_price'] =$couponcode = $item->price;

            $this->session->set_userData('coupon',$data['coupon_price']);

        }



        if($shipping==0){

            $price_shipping = 0;

        }else{

            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(

                'id' => $shipping

            ));

            $price_shipping = $data['item']->price;

        }

        $data['total_cart'] = $this->cart->total() - $this->cart->total()*$couponcode/100 + $price_shipping;

        $data['check'] = $check;

        echo json_encode($data);

    }
    function capnhat(){
        $carts = $this->cart->contents();
        foreach($carts as $key => $row){
            $total_qty = $this->input->post('qty_'.$row['id']);
            $data = array();
            $data['rowid'] = $key;
            $data['qty'] = $total_qty;
            $this->cart->update($data);
        }
        redirect(base_url('cart'));
    }

 //cap nhat gia don hang khi chon khu vuc shipping

    public function update_shipping(){

        $couponcode = trim($_POST['couponcode']);

        $shipping = trim($_POST['shipping']);

        $price_shipping = $this->cartmodel->getFirstRowWhere('province',array(

            'id' => $shipping

        ));

        if($shipping==0){

            $price_shipping = 0;

        }else{

            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(

                'id' => $shipping

            ));

            $price_shipping = $data['item']->price;

        }

        $data['total_cart'] = $this->cart->total() - $this->cart->total()*$couponcode/100 + $price_shipping;

        $data['price_shipping'] =$price_shipping;

        echo json_encode($data);

    }

// hi&#7879;n th&#7883; l&#7841;i &#273;&#417;n hang khi câp nh&#7853;t s&#7889; l&#432;&#7907;ng

    public function displayCart(){

        $data['items'] = $this->cart->contents();

        $this->load->view('carts/view_displaycart',$data);

    }

 // cap nhat lai gio hang khi tang so luong

public function updateQuantity()

    {

        $item = $this->input->post('rowid');

        $qty = $this->input->post('qty');

        $couponcode = $this->input->post('couponcode');

        $shipping = $this->input->post('shipping');

        $data = array(

            'rowid' => $item,

            'qty'   => $qty

        );

        $this->cart->update($data);

        $data['check'] = true;

        sleep(1);

        $price_shipping = $this->cartmodel->getFirstRowWhere('province',array(

            'id' => $shipping

        ));

        if($shipping==0){

            $price_shipping = 0;

        }else{

            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(

                'id' => $shipping

            ));

            $price_shipping = $data['item']->price;

        }

        $total1= $this->cart->total() - $this->cart->total()*$couponcode/100;

        $data['total_cart'] = $total1 + $price_shipping;

        $data['id_province'] = $shipping;

        $data['shipping'] = $price_shipping;

        $data['couponcode'] = $couponcode;

        $data['items'] = $this->cart->contents();

        $data['ships'] = $this->cartmodel->get_data('province',null);

        $this->load->view('carts/update_cart',$data);

    }

 // gui don hang

 public function sendOnpage()

    {

        if($this->input->post('token') !='' && $this->input->post('token') == $this->session->userdata('tokenkey'))

        {

            $user = $this->session->userdata('userData');

            $user_info = $this->cartmodel->getFirstRowWhere('users',array(

                'lever' => @$user['lever'],

                'email' => @$user['email'],

            ));

            $carts = $this->cart->contents();

            $payment = '';

            if($this->input->post('payment') == 1){

                $payment = "Thanh toán ti&#7873;n m&#7863;t khi nh&#7853;n hàng.";

            }elseif($this->input->post('payment') == 2){

                $payment = "Nh&#7853;n hàng và thanh toán t&#7841;i Th&#432;&#417;ng m&#7841;i th&#7911; &#273;ô";

            }else{

                $payment = "Chuyển khoản qua máy ATM &amp; Ngân hàng";

            }

            $arr = array(

                'fullname' => $this->input->post('fullname'),

                'address' => $this->input->post('address'),

                'phone' => $this->input->post('phone'),

                'email' => $this->input->post('email'),

                'address2' => $this->input->post('address2'),

                'note' => $this->input->post('comment'),

                'code_sale' => $this->input->post('coupon'),

                'price_ship' => $this->input->post('price_shipping'),

                'total_price' => $this->input->post('subtotal'),

                'mobile' => $this->input->post('phone_other'),

                'startplaces' => $payment,

                'time' => time(),

                'user_id' => @$user_info->id,

            );



            $id=$this->cartmodel->Add('order',$arr);

            if($id)

            {

                foreach ($carts as $v) {

                    $detai_order=array(

                        'order_id' => $id,

                        'item_id' => $v['id'],

                        'count' => $v['qty'],

                        'price' => $v['price_old'],

                        'price_sale' => $v['price'],

                        'name' => $v['name'],

                        'subtotal' => $v['subtotal'],

                        'pro_dir' => $v['pro_dir'],

                        'alias' => $v['alias'],

                        'image' => $v['image'],

                        'size' => $v['size'],

                        'color' => $v['color']

                    );

                    $id_order_item=$this->cartmodel->Add('order_item',$detai_order);

                }

                $code = 'DH_'.date('d').$id;

                $this->cartmodel->Update_where('order',array(

                    'id' => $id

                ),

                    array(

                        'code' => $code

                    )

                );

                $config = Array(

                            'protocol'  => 'smtp',

                            'smtp_host' => $this->config->item('smtp_hostssl'),

                            'smtp_port' => $this->config->item('smtp_portssl'),

                            'smtp_user' => $this->config->item('smtp_user'), // change it to yours

                            'smtp_pass' => $this->config->item('smtp_pass'), // change it to yours

                            'mailtype'  => 'html',

                            'charset'   => 'utf-8',

                            'wordwrap'  => TRUE

                        );

                $this->load->library('email', $config);

                $htm = '<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#caf6ea">

                            <thead>

                            <tr style="background:#92ddc9">

                                <td>Stt</td>

                                <td>Tên s&#7843;n ph&#7849;m</td>

                                <td>Màu s&#7855;c</td>
                                <td>Kích th&#432;&#7899;c</td>
                                <td>S&#7889; l&#432;&#7907;ng</td>

                                <td>&#272;&#417;n giá(vn&#273;)</td>

                                <td>Thành ti&#7873;n(vn&#273;)</td>

                            </tr>

                            </thead>

                            <tbody>';

                $subtotal = 0;

                $totals = 0;

                $tongtien = 0;

                $stt = 0;



                foreach($carts as $key => $tcat){

                    $stt ++;

                    $subtotal = $tcat['price']*$tcat['qty'];

//                    $code_sale = $this->input->post('code_sale_all');

//                    $price_ship = $this->input->post('price_ship');

//                    $total_sale= $subtotal*$code_sale/100;



                    $tongtien += $subtotal;

                    $totals += $subtotal ;

                    $htm .='<tr>';

                    $htm .='<td>'.($stt).'</td>';

                    $htm .='<td>'.$tcat['name'].'<br>';

                    $htm .='</td>';

                    $htm .='<td>'.$tcat['color'].'</td>';
                    $htm .='<td>'.$tcat['size'].'</td>';
                    $htm .='<td>'.$tcat['qty'].'</td>';

                    $htm .='<td>'.number_format($tcat['price']).'</td>';

                    $htm .='<td>'.number_format($tcat['price']*$tcat['qty']).'</td>';

                    $htm .='</tr>';

                }



                $htm .='<tr><td colspan="5" align="right"><span style="color:red">T&#7893;ng ti&#7873;n &#273;&#417;n hàng:'.number_format($tongtien).'&nbsp;vn&#273;</span></td></tr>';

                $htm .='<tr><td colspan="5" align="right"><span style="color:red">T&#7893;ng ti&#7873;n thanh toán là:'.number_format($totals).'&nbsp;vn&#273;</span></td></tr>';

                $htm .='</tbody>';

                $htm .='</table>';





                $subject = $this->option->site_name.' - Thông tin &#273;&#7863;t hàng'.'['.$code.']';

                $img ='<p><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';

                $img_footer ='<p style="float: right" class="pull-right"><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';



                $message = '';

                $message .= $img;

                $message .= '<p><h2 style="color: green">EMAIL XÁC NH&#7852;N &#272;&#416;N HÀNG !</h2></p>';

                $message .='<p>Kính chào &nbsp;'.$this->input->post('fullname').',<p>';

                $message .='<p>'.@$this->option->site_name.' &#273;ã nh&#7853;n &#273;&#432;&#7907;c &#273;&#417;n &#273;&#7863;t hàng c&#7911;a Qúy khách:<p></br>';



                $message .='<b>Thông tin khách hàng:</b></br>';

                $message .='<p>H&#7885; tên:'.$this->input->post('fullname').'<p></br>';

                $message .='<p>&#272;i&#7879;n tho&#7841;i:'.$this->input->post('phone').'<p></br>';

                $message .='<p>&#272;&#7883;a ch&#7881; nh&#7853;n hàng:'.$this->input->post('address').'<p></br>';



                $message .='<p>Quí khách vui lòng thanh toán <span style="color:red">'.number_format($totals + $this->input->post('price_ship')).'vn&#273;</span>&nbsp;khi nh&#7853;n hàng.</p>';

                $message .= '<p><b>Mã &#273;&#417;n hàng: </b>'.$code.'</p>';

                $message .='<p>Tình tr&#7841;ng : Ch&#432;a thanh toán.</p>';

                $message .='<p><b>Chi ti&#7871;t &#273;&#417;n hàng :</b></p>';

                $message .=$htm;



                $message .='<br>&#272;&#7883;a ch&#7881; :&nbsp;&nbsp;'.$this->input->post('address').',&nbsp;'.@$ward->name.',&nbsp;'.@$district->name.'</p>';

                $message .='<p style="border: 1px solid #e7d17a;padding: 8px">Ngoài hình th&#7913;c thanh toán và giao hàng t&#7853;n n&#417;i, Quí khách có th&#7875; &#273;&#7871;n v&#259;n

                    phòng giao d&#7883;ch c&#7911;a '.@$this->option->site_name.' t&#7841;i Hà N&#7897;i &#273;&#7875; thanh toán<br>';

                $message .=$this->option->address.'</p>';

                $message .='<p>N&#7871;u quí khách c&#7847;n h&#7895; tr&#7907;, vui lòng g&#7885;i <span style="color:red">'.@$this->option->hotline1.'</span> ho&#7863;c g&#7917;i &#273;&#7871;n mail :'.@$this->option->site_email.'</p>';

                $message .='<p>C&#7843;m &#417;n quí khách &#273;ã mua s&#7855;m trên '.@$this->option->site_name.'</p>';

                $message .='<p><br><br><br>(<span style="color:red">*</span>)&#272;ây là mail h&#7879; th&#7889;ng t&#7921; &#273;&#7897;ng g&#7917;i, vui lòng không tr&#7843; l&#7901;i (Reply) l&#7841;i mail này.</p>';

                $message .=$img_footer;

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

                            </style>

                        </head>

                        <body>

                        ' . $message . '

                        </body>

                        </html>';

                //$this->email->send();



                $receiver_email = $this->input->post('email') . ','.@$this->option->site_email;

                $this->email->set_newline("\r\n");

                $this->email->from(@$this->option->site_email,'Thông tin &#273;&#417;n hàng'); // change it to yours

                $this->email->to($receiver_email);

                $this->email->subject($subject);

                $this->email->message($body);

                $this->email->send();



                $this->session->unset_userdata('total');

                $this->session->unset_userdata('user_name');

                $this->session->unset_userdata('address');

                $this->session->unset_userdata('phone');

                $this->session->unset_userdata('email');

                $this->session->unset_userdata('payship');

                //unset cart

                $this->cart->destroy();

                $this->session->set_flashdata("mess", "Chúc m&#7915;ng b&#7841;n &#273;ã g&#7917;i &#273;&#417;n hàng thành công!");

                redirect(base_url(''));

            }

        }

        else{

            return false;

        }

    }

// danh hang thanh cong

 public function order_success(){

        $data = array();

        $seo = array(

            'title' => '&#272;&#7863;t hàng thành công'

        );

        $data['order'] = $this->cartmodel->getFirstRowWhere('order');

       // $data['item'] = $this->cartmodel->Get_product_order($data['order']->id);

        $this->LoadHeader(null,$seo,false);

        $this->load->view('carts/success',$data);

        $this->LoadFooter();

    }










    public function add(){
        if($this->input->post('form_key') && $this->input->post('form_key') == $this->session->userdata('keyform'))
        {
            $id = trim($this->input->post('product'));
            $color = $this->input->post('color');
            $item = $this->cartmodel->getFirstRowWhere('product',array(
                'id' => $id
            ));
            if($this->input->post('qty')){
                $qty = $this->input->post('qty');
            }else{
                $qty = 1;
            }
            $arr = array();
            if(!empty($item)){
                $arr = array(
                    'id' => $id,
                    'qty' => $qty,
                    'price_old'   => $item->price,
                    'price'   => $item->price_sale,
                    'name'    => $item->name,
                    'alias'   => $item->alias,
                    'image'   => $item->image,
                    'pro_dir' => $item->pro_dir,
                    'color' => $color
                );
                $this->cart->insert($arr);
            }else{
                return false;
            }
        }else{
            return false;
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect(base_url('gio-hang'));
    }
    public function update_ajax()
    {
        // Get the total number of items in cart
        if($this->input->post('id'))
        {
            $total = $this->cart->total_items();
            $item = $this->input->post('id');
            $qty = $this->input->post('qty');

            // Cycle true all items and update them
            $data = array(
                'rowid' => $item,
                'qty'   => $qty
            );
            // Update the cart with the new information
            $this->cart->update($data);
        }
        $total = $this->cart->total();
        $data['total'] = $total;
        echo json_encode($data);die;
    }



    public function update()

    {

        // Get the total number of items in cart

        if($this->input->post('form_key') && $this->input->post('form_key') == $this->session->userdata('form_key'))

        {

            $total = $this->cart->total_items();



            // Retrieve the posted information

            $item = $this->input->post('rowid');

            $qty = $this->input->post('qty');



            // Cycle true all items and update them

            for($i=0;$i < $total;$i++)

            {

                // Create an array with the products rowid's and quantities.

                $data = array(

                    'rowid' => @$item[$i],

                    'qty'   => @$qty[$i]

                );



                // Update the cart with the new information

                $this->cart->update($data);

            }

        }

        return redirect($_SERVER['HTTP_REFERER']);

    }

    public function deleteone()

    {

        // $rowid = (string) $this->input->get('id');
        $rowid = $this->uri->rsegment('3');
        

        if($rowid != null){

            $data = array(

                'rowid' => @$rowid,

                'qty'   => 0

            );

            $this->cart->update($data);

        }

        redirect($_SERVER['HTTP_REFERER']);

    }

    public function deleteAll()
    {
        $this->cart->destroy();

        redirect($_SERVER['HTTP_REFERER']);

    }





    public function payment()

    {

        $data = array();

        $data['payship'] = $this->session->userData('payship');

        $data['coupon'] = $this->session->userData('coupon');

        $data['subtotal'] = $this->session->userData('subtotal');

        $data['total'] = $this->session->userData('total');

        $this->session->set_userData('user_name',$this->input->post('fullname'));

        $this->session->set_userData('phone',$this->input->post('phone'));

        $this->session->set_userData('email',$this->input->post('email'));

        $this->session->set_userData('address',$this->input->post('address'));

        $data['items'] = $this->cart->contents();

        $data['form_key'] = $keyform = rand();

        $this->session->set_userData('tokenkey',$keyform);

        $seo = array(

            'title' => 'Payment'

        );

        $this->LoadHeader('common/cat_header',$seo,false);

        $this->load->view('carts/payment',$data);

        $this->LoadFooter();

    }







    public function addCart_now(){

        if($this->input->get('id'))

        {

            $id = trim($this->input->get('id'));

            $item = $this->cartmodel->getFirstRowWhere('product',array(

                'id' => $id

            ));

			

			$qty=$this->input->get('quantity');

            $arr = array();

            if(!empty($item)){

                $arr = array(

                    'id' => $id,

                    'qty' => $qty,

                    'price'   => $item->price_sale,

                    'price_old'   => $item->price,

                    'name'    => $item->name,

                    'alias'   => $item->alias,

                    'image'   => $item->image,

                    'pro_dir' => $item->pro_dir,

                    'color' => $color

                );

                $this->cart->insert($arr);

                $this->session->set_userData('mess','S&#7843;n ph&#7849;m &#273;ã &#273;&#432;&#7907;c cho vào gi&#7887; hàng !');

            }else{

                return false;

            }

        }else{

            return false;

            redirect($_SERVER['HTTP_REFERER']);

        }



        redirect($_SERVER['HTTP_REFERER']);

    }

    public function addCart_now_ajax(){

        $count = $this->cart->total_items();

        if($this->input->post('id'))

        {

            $id = trim($this->input->post('id'));

            $item = $this->cartmodel->getFirstRowWhere('product',array(

                'id' => $id

            ));

            $arr = array();

            $count = $this->cart->total_items();

            if(!empty($item)){

                $arr = array(

                    'id' => $id,

                    'qty' => 1,

                    'price'   => $item->price_sale,

                    'price_old'   => $item->price,

                    'name'    => $item->name,

                    'alias'   => $item->alias,

                    'image'   => $item->image,

                    'pro_dir' => $item->pro_dir,

                );

                $this->cart->insert($arr);

                $count = $this->cart->total_items();

                

            }else{

                echo $count;

                return false;

            }

        }else{

            echo $count;

            return false;

        }



        echo $count;

    }









}

