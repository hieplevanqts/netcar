<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->check->is_logined($this->session->userdata('sessionUserAdmin'), $this->session->userdata('sessionGroupAdmin')))
        {
            redirect(base_url().'vnadmin', 'location');
            die();
        }
        $this->load->model('ordermodel');
        $this->load->model('m_sale');
        $this->load->library('pagination');
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
    public function orders()
    {
		$this->check_acl();
		$data['list'] = $this->ordermodel->get_data('order',array(),array('id' => 'desc'));
        $data['headerTitle'] = "Đơn đặt hàng";
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/order/oder_list', $data);
        $this->load->view('admin/footer');
    }
// xoa gio hang
	public function deletes()
        {
            $ids = $this->input->post('checkone');
            foreach($ids as $id)
            {
                $this->delete_once_orders($id);
            }
			$this->session->set_flashdata("mess", "Xóa thành công!");
            redirect($_SERVER['HTTP_REFERER']);
        }
	public function delete_once_orders($id){
		$this->check_acl();
		$this->ordermodel->Delete_where('order',array('id' => $id));
		$this->ordermodel->Delete_where('order_item',array('order_id'=>$id));
        }
	public function delete($id){
		if (is_numeric($id)) {
			$this->ordermodel->Delete_where('order',array('id' => $id));
			$this->ordermodel->Delete_where('order_item',array('order_id'=>$id));
			$this->session->set_flashdata("mess", "Xóa thành công!");
			redirect($_SERVER['HTTP_REFERER']);
		} else return false;
	}

    /**
     * update status order
     * @return bool
     */
    public function update_order_status(){
        $id=$this->input->post('item');
        $rs=array();
        $rs['check']=false;
        $rs['status']='';

        $this->ordermodel->Update_where('order', array('id' => $id),array('status'=>$this->input->post('value')));

        $rs['check']=true;

        if($this->input->post('value')==1){
            $rs['status']='Hoàn thành';
            $rs['color']='success';

            $dateNow = date('Y-m-d',time());

            $date = strtotime($dateNow);

            $order = $this->ordermodel->getFirstRowWhere('order',array(
                'id' => $id
            ));

            $customer = $this->ordermodel->getFirstRowWhere('customer',array(
                'code' => 'KHACHLE'
            ));

            if(empty($customer)){
                $arrCustomer = array(
                    'name' => 'Khách lẻ',
                    'code' => 'KHACHLE'
                );

                $this->ordermodel->Add('customer',$arrCustomer);

                $customer = $this->ordermodel->getFirstRowWhere('customer',array(
                    'code' => 'KHACHLE'
                ));
            }

            $userId = $this->session->userdata('adminid');

            $details = $this->ordermodel->get_data('order_item',array(
                'order_id' => $id
            ));

            $total = 0;$totalQty = 0;

            foreach($details as $detail){
                $total += $detail->price_sale;
                $totalQty += $detail->count;
            }

            $debt = $total;
            $cid = $customer->id;

            $lp = array();
            $lp = $this->m_sale->geLinvoices($cid);
            $arrInvoices = array(
                'date' => date('d/m/Y',time()),
                'time' => date('H:i',time()),
                'datetime' => strtotime($dateNow),
                'timeupdate' => time(),
                'customer_id' => $cid,
                'user_sale' => $userId,
                'user_create' => $userId,
                'usersale_name' => $this->session->userdata('adminname'),
                'customer_name' => 'Khách lẻ',
                'note' => $order->note,
                'count' => $totalQty,
                'total_price' => $total,
                'price_sale' => '',
                'customer_pay' => $total,
                'customer_payted' => 0,
                'refund' => 0,
                'status' => 1,
                'time_buy' => time(),
                'type' => 0,
                'debt' => $debt,
            );

            $invoice_id = $this->m_sale->Add('invoices',$arrInvoices);

            if($invoice_id){
                $code = 'HD'.$invoice_id;
                $nkd = 0;$nkc = 0;
                $this->m_sale->Update_where('invoices',array(
                    'id' => $invoice_id
                ),array('code' => $code));

                $this->m_sale->Update_where('order',array(
                    'id' => $id
                ),array('invoice_id' => $invoice_id));


                //no ky
                $nkd += @$lp->nkc;
                $nkc += @$lp->nkc + $debt;
                $this->m_sale->Update_where('invoices',array('id' => $invoice_id),array(
                    'nkd' => $nkd,
                    'nkc' => $nkc
                ));
                //cal debt
                $debt_customer = $this->m_sale->getCustomerDebt($cid);
                $cDebt = array(
                    'code' => $code,
                    'id_customer' => $cid,
                    'id_create' => $this->session->userData('adminid'),
                    'type' => 'Bán hàng',
                    'nkd' => @$debt_customer->nkc + 0,
                    'nkc' => @$debt_customer->nkc + $debt,
                    'ghino' => $total,
                    'ghico' => 0,
                    'date_time' => $date,
                    'time_insert' => time(),
                    'note' => ''
                );

                $this->m_sale->Add('customer_debt',$cDebt);

                foreach($details as $d){
                    $p = $this->m_sale->getFirstRowWhere('product',array('id' => $detail->item_id));
                    $detail = array(
                        'inv_id' => $invoice_id,
                        'code' => $p->code,
                        'name' => $p->name,
                        'quantity' => $d->count,
                        'price' => $p->price,
                        'price_sale' => $d->price_sale,
                        'product_id' => $d->item_id,
                        'price_imp' => $p->price_imp,
                    );

                    $this->m_sale->add('invoices_detail',$detail);

                    $inout = $this->m_sale->getFirstRowWhere('tbl_xnt',array(
                        'date_time' => $date,
                        'product_id' => $d->item_id,
                    ));

                    //update quantity product

                    $this->m_sale->Update_where('product',array('id' => $d->item_id),array(
                        'quantity' => ($p->quantity - $d->count) < 0 ? 0 : $p->quantity - $d->count
                    ));


                    if(count($inout)){
                        $this->m_sale->Update_where('tbl_xnt',array('id' => $inout->id),array(
                            'slx' => $d->count + $inout->slx,
                            'sltc' => ($p->quantity - $d->count) < 0 ? 0 : $p->quantity - $d->count
                        ));
                    }else{
                        $this->m_sale->Add('tbl_xnt',array(
                            'date' => $date,
                            'date_time' => time(),
                            'mahh' => $p->code,
                            'sltd' => $p->quantity,
                            'sln' => 0,
                            'slx' => $d->count,
                            'sltc' => ($p->quantity - $d->count) < 0 ? 0 : $p->quantity - $d->count,
                            'sltt' => 1,
                            'price' => $p->price_sale,
                            'product_id' => $d->item_id,
                        ));
                    }

                }
            }

        }
        if($this->input->post('value')==2){
            $rs['status']='Đã hủy';
            $rs['color']='danger';
        }
        if($this->input->post('value')==0){
            $rs['status']='Chờ duyệt';
            $rs['color']='primary';
        }
        echo  json_encode($rs);
    }
	// popup hien thị don hang
	public function popupdata()
    {

        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id   = $_GET['id'];
            $data['detail'] = $item = $this->ordermodel->getFirstRowWhere('order', array('id' => $id));
			$data['id']='id';
			$data['detail_order'] = $this->ordermodel->get_data('order_item',array(
			'order_id' => $id
			),array('id' => 'desc'));
			$this->load->view('admin/modal/view_order',$data);
          //json_encode($rs);
        }
    }
// danh sach ma giam gia
    public function listSale()
    {
        $this->check_acl();
        $data['list'] = $this->ordermodel->get_data('code_sale',array());
        $data['headerTitle'] = 'Danh mục sản phẩm';
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/products/product_sale/list', $data);
        $this->load->view('admin/footer');
    }
// them ma giam gia
public function addSale($id_edit=null)
    {
        $this->check_acl();
        $data['btn_name']='Thêm';
        if($id_edit!=null){
            $data['edit']=$this->ordermodel->get_data('code_sale',array('id'=>$id_edit),array(),true);
            $data['btn_name']='Cập nhật';
        }
        if (isset($_POST['addnews'])) {
            $arr = array(
                'name' => $this->input->post('name'),
                'code' => $this->input->post('code'),
                'price' => $this->input->post('price'),
            );
            if (!empty($_POST['edit'])){
                $id = $this->ordermodel->Update_where('code_sale', array('id'=>$id_edit), $arr);
                $this->session->set_flashdata("mess", "Cập nhật thành công!");
            } else {
                $id = $this->ordermodel->Add('code_sale', $arr);
                $this->session->set_flashdata("mess", "Thêm mới thành công!");
            }
            redirect(base_url('vnadmin/product_sale/listSale'));
        }

        $data['headerTitle'] = $data['btn_name']." mã giảm giá";
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/products/product_sale/add', $data);
        $this->load->view('admin/footer');
    }
    public function editsale($id){
        $this->addSale($id);
    }
    public function deletes_list(){
        $ids = $this->input->post('checkone');
        foreach($ids as $id)
        {
            $this->del_once_sale($id);
        }
        $this->session->set_flashdata("mess", "Xóa thành công!");
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function del_once_sale($id){
        $this->check_acl();
        $this->ordermodel->Delete_where('code_sale',array('id' => $id));
    }
    public function deletesale($id)
    {
        if (is_numeric($id)&&$id>1) {
            $this->del_once_sale($id);
            $this->session->set_flashdata("mess", "Xóa mã giảm giá thành công!");
            $_SESSION['mess']='Xóa danh mục thành công!';
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
// quan ly phi van chuyen ship

    public function listProvince()
    {
        $this->check_acl();
        $data['list'] = $this->ordermodel->get_data('province',array(
        ),array('sort' => 'desc'));
        $data['headerTitle'] = 'Quản lý phí vận chuyển ship';
        $this->LoadHeaderAdmin($data);
        $this->load->view('admin/province/list', $data);
        $this->load->view('admin/footer');
    }

    public function update_order_status1(){
        $id=$this->input->post('item');
        $rs=array();
        $rs['check']=false;
        $rs['status']='';

        $this->ordermodel->Update_where('order', array('id' => $id),array('status'=>$this->input->post('value')));

        $rs['check']=true;
        if($this->input->post('value')==1){
            $rs['status']='Hoàn thành';
            $rs['color']='success';
        }
        if($this->input->post('value')==2){
            $rs['status']='Đã hủy';
            $rs['color']='danger';
        }
        if($this->input->post('value')==0){
            $rs['status']='Chờ duyệt';
            $rs['color']='primary';
        }
        echo  json_encode($rs);
    }

    public function UpdateOrder(){
        //id = $this->input->get('id');
        $id = 10;
        $dateNow = date('Y-m-d',time());
        $date = strtotime($dateNow);

        $order = $this->ordermodel->getFirstRowWhere('order',array(
            'id' => $id
        ));

        $customer = $this->ordermodel->getFirstRowWhere('customer',array(
            'code' => 'KHACHLE'
        ));



        if(empty($customer)){
            $arrCustomer = array(
                'name' => 'Khách lẻ',
                'code' => 'KHACHLE'
            );
            $this->ordermodel->ordermodel->Add('customer',$arrCustomer);
            $customer = $this->ordermodel->getFirstRowWhere('customer',array(
                'code' => 'KHACHLE'
            ));
        }


        $userId = $this->session->userdata('adminid');

        $details = $this->ordermodel->get_data('order_item',array(
            'order_id' => $id
        ));

        $total = 0;$totalQty = 0;

        foreach($details as $detail){
            $total += $detail->price_sale;
            $totalQty += $detail->count;
        }

        $debt = $total;
        $cid = $customer->id;
        $lp = array();
        $lp = $this->m_sale->geLinvoices($cid);
        $arrInvoices = array(
            'date' => date('d/m/Y',time()),
            'time' => date('H:i',time()),
            'datetime' => strtotime($dateNow),
            'timeupdate' => time(),
            'customer_id' => 0,
            'user_sale' => $userId,
            'note' => $order->note,
            'count' => $totalQty,
            'total_price' => $total,
            'price_sale' => '',
            'customer_pay' => $total,
            'customer_payted' => 0,
            'refund' => 0,
            'status' => 1,
            'time_buy' => time(),
            'type' => 0,
            'debt' => $debt,
        );
        //echo "<pre>";print_r($order);die;

        $id = $this->m_sale->Add('invoices',$arrInvoices);

        if($id){
            $code = 'HD'.$id;
            $nkd = 0;$nkc = 0;
            $this->m_sale->Update_where('invoices',array(
                'id' => $id
            ),array('code' => $code));
            //no ky
            $nkd += $lp->nkc;
            $nkc += $lp->nkc + $debt;
            $this->m_sale->Update_where('invoices',array('id' => $id),array(
                'nkd' => $nkd,
                'nkc' => $nkc
            ));
            //cal debt
            $debt_customer = $this->m_sale->getCustomerDebt($cid);
            $cDebt = array(
                'code' => $code,
                'id_customer' => 0,
                'id_create' => $this->session->userData('adminid'),
                'type' => 'Bán hàng',
                'nkd' => @$debt_customer->nkc + 0,
                'nkc' => @$debt_customer->nkc + $debt,
                'ghino' => $total,
                'ghico' => 0,
                'date_time' => $date,
                'time_insert' => time(),
                'note' => ''
            );
            $this->m_sale->Add('customer_debt',$cDebt);

            foreach($details as $detail){
                $p = $this->m_sale->getFirstRowWhere('product',array('id' => $detail->item_id));
                $detail = array(
                    'inv_id' => $id,
                    'code' => $p->code,
                    'name' => $p->name,
                    'quantity' => $detail->count,
                    'price' => $p->price,
                    'price_sale' => $detail->price_sale,
                    'product_id' => $detail->item_id,
                    'price_imp' => $p->price_imp,
                );

                $this->m_sale->add('invoices_detail',$detail);

                $inout = $this->m_sale->getFirstRowWhere('tbl_xnt',array(
                    'date_time' => $date,
                    'product_id' => $detail->item_id,
                ));

                //update quantity product

                $this->m_sale->Update_where('product',array('id' => $detail->item_id),array(
                    'quantity' => ($p->quantity-$cat['quantity']) < 0 ? 0 : $p->quantity-$cat['quantity']
                ));


                if(count($inout)){
                    $this->m_sale->Update_where('tbl_xnt',array('id' => $inout->id),array(
                        'slx' => $detail->count + $inout->slx,
                        'sltc' => ($p->quantity - $detail->count) < 0 ? 0 : $p->quantity - $detail->count
                    ));
                }else{
                    $this->m_sale->Add('tbl_xnt',array(
                        'date' => $date,
                        'date_time' => time(),
                        'mahh' => $p->code,
                        'sltd' => $p->quantity,
                        'sln' => 0,
                        'slx' => $detail->count,
                        'sltc' => ($p->quantity - $detail->count) < 0 ? 0 : $p->quantity - $detail->count,
                        'sltt' => 1,
                        'price' => $p->price_sale,
                        'product_id' => $detail->item_id,
                    ));
                }

            }
        }
    }
}