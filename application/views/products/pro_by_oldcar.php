<div class="clearfix"></div>
      <!-- main content -->
      <!-- end introduct_banner -->
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="<?php echo base_url()?>">Trang chủ</a> 
                  <a href="<?php echo base_url('xe-cu')?>.html">Xe cũ</a>
               </div>
            </div>
         </div>
      </div>
      <main>
         <div class="container">
            <div class="row_pc">
               <div class="row flex-reverse">
                  <aside class="col-md-3 col-xs-12">
                     <!-- menu dọc -->
                     <h2 class="title_box_menu">Danh mục Sản phẩm</h2>
                     <div class="menu_left">
                        <ul class="list_partent">
                           <li>
                              <a href="#" title="" rel="">Xe Mới</a>
                              <ul class="list_child">
                              <?php if(isset($cate_new)){
                                  foreach($cate_new as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=Limitstring($value->name,15);?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                        <ul class="list_partent">
                           <li class="">
                              <a href="#" title="" rel="">Xe cũ</a>
                              <ul class="list_child">
                              <?php if(isset($cate_all)){
                                  foreach($cate_all as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc-xe-cu/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=Limitstring($value->name,15);?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                        <ul class="list_partent">
                           <li>
                              <a href="#" title="" rel="">Phụ tùng</a>
                              <ul class="list_child">
                              <ul class="list_child">
                              <?php if(isset($phutung)){
                                  foreach($phutung as $value){
                                  ?>
                                 <li><a href="<?= base_url('danh-muc-phu-tung/'.$value->alias); ?>.html" rel="" title="<?=$value->name;?>"><?=Limitstring($value->name,15);?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                     </div>
                     <!-- /menu dọc -->
                     <div class="qcCarold">
                        <p>Banner Quảng cáo xe cũ</p>
                     </div>
                     <div class="qcCarold">
                        <p>Xe cũ</p>
                     </div>
                  </aside>
                  <section class="col-md-9 col-xs-12">
                     <div class="carFeatured">
                        <div class=" heard_title_xecu">
                           <h3 class="tit_mid"><a href="">Xe Cũ </a></h3>
                        </div>
                        <div class="clearfix-30"></div>
                        <div class="sc_prod_home">
                           <div class="row_pc">
                              <div class="row-30 imgRow">

<?php if(isset($lists)){
    foreach($lists as $value){
    ?>


                                 <div class="col-md-4 col-sm-4 col-xs-6 col-480-12 pdd-30">
                                    <div class="box_prod">
                                       <a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html" class="img_prod reRenderImg"><img src="<?php if(isset($value->image)){echo base_url().$value->img_dir.'/'.$value->image;}?>" class="w_100" alt=""></a>
                                       <div class="sub_prod clearfix">
                                          <h3 class="name_prod"><a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html"><?php if(isset($value->name)){echo Limitstring($value->name,15);}?></a></h3>
                                          <p>Giá: <span><?php if(isset($value->price)){echo number_format($value->price);}?> <sup>đ</sup></span></p>
                                          <ul class="des_prod">
                                             <li>Số chỗ:<span><?php if(isset($value->so_ghe_ngoi)){echo $value->so_ghe_ngoi;}?></span></li>
                                             <li>Vận hành: <span> <?php if(isset($value->hop_so)){echo $value->hop_so;}?></span></li>
                                             <li>Động cơ:  <span>  <?php if(isset($value->dan_dong)){echo $value->dan_dong;}?></span></li>
                                             <li>Màu xe:   <span><?php if(isset($value->mau_ngoai_that)){echo $value->mau_ngoai_that;}?></span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>


    <?php }}?>





                                 <div class="clearfix"></div>
                                 <div class="phantrang">
                                 <?php echo $this->pagination->create_links();?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>