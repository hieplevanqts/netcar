 <!-- /.header content -->
 <div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="<?php echo base_url()?>">Trang chủ</a> 
                  <a href="">Phụ tùng</a>
               </div>
            </div>
         </div>
      </div>
      <!-- main content -->
      <main>
         <div class="container">
            <div class="row_pc">
               <div class="row flex-reverse">
                  <aside class="col-md-3 col-xs-12 bounceInDown wow">
                     <!-- menu dọc -->
                     <?=$menu_left?>
                     <!-- /menu dọc -->
                     <div class="qcCarold">
                        <p>Banner Quảng cáo xe cũ</p>
                     </div>
                     <div class="qcCarold">
                        <p>Xe cũ</p>
                     </div>
                  </aside>
                  <section class="col-md-9 col-xs-12 ">
                     <div class="clearfix clearfix-5"></div>
                     <div class="tit_mid clearfix lightSpeedIn wow">
                        <div class="pull-left">
                           <h2><a href="">TẤT CẢ CÁC PHỤ TÙNG</a></h2>
                        </div>
                     </div>
                     <div class="boxCarnew pulse wow">
                        <div class="newCars_phutung clearfix">
                           <div class="row row-flex">
<?php if(isset($lists)){
  foreach($lists as $value){
?>

                              <div class="col-md25-4 col-xs-6 col-480-12 pdd_7 ">
                                 <div class="box_prd_mid pulse wow">
                                    <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html" class="img_prd reRenderImg"><img src="<?php echo base_url('upload/img/products/'.$value->pro_dir.'/'.$value->image);?>" style="height: 200px;" class="w_100" alt=""></a>
                                    <h3 class="name_prd">
                                       <a href=""><?=Limitstring($value->ten_phu_tung,25)?></a>
                                    </h3>
                                    <span class="price">Giá: <?=number_format($value->price);?><small>0đ</small></span>
                                    <span class="size">Liên hệ: </span>
                                    <div class="btn_buy">
                                       <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html">Chi tiết</a>
                                    </div>
                                 </div>
                              </div>
  <?php }}?>

                              


                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="phantrang bounceInUp wow">
                     <?php echo $this->pagination->create_links();?>
                     </div>
            <!--  -->
            
            <div class="clearfix"></div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>