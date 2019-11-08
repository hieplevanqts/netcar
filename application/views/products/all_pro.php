<div class="owl-carousel slider_main">
            <div class="item">
               <a href=""><img src="img/slider.png" alt=""></a>
            </div>
            <div class="item">
               <a href=""><img src="img/slider.png" alt=""></a>
            </div>
         </div>
      </header>
      <!-- /.header content -->
      <div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="<?php echo base_url()?>">Trang chủ</a> 
                  <a href="<?php echo base_url('xe-moi')?>.html">Xe mới</a>
               </div>
            </div>
         </div>
      </div>
      <!-- main content -->
      <main>
         <div class="container">
            <div class="row_pc">
               <div class="row flex-reverse">
                 <!-- danh muc -->
                 <?=$danhmuc;?>
                  <section class="col-md-9 col-xs-12">
                     <div class="carFeatured">
                        <div class=" heard_title_xecu lightSpeedIn wow">
                           <h3 class="tit_mid"><a href="">Xe Mới</a></h3>
                        </div>
                        <div class="clearfix-30"></div>
                        <div class="sc_prod_home ">
                           <div class="row_pc">
                              <div class="row-30 row row-flex imgRow">

                              <?php if(isset($lists)){
                                  foreach($lists as $value){
                                  ?>
                                 <div class="col-md-4 col-sm-4 col-xs-6 col-480-12 pdd-30">
                                    <div class="box_prod">
                                       <a href="<?=base_url('thong-tin-xe-moi/').$value->alias?>.html" class="img_prod reRenderImg"><img src="<?= base_url('upload/img/products/' . $value->pro_dir . '/' . @$value->image) ?>" style="height:180px;" class="w_100" alt=""></a>
                                       <div class="sub_prod clearfix lightSpeedIn wow">
                                          <h3 class="name_prod"><a href=""><?=@$value->name;?></a></h3>
                                          <p>Giá: <span><?=number_format(@$value->price);?> <sup>đ</sup></span></p>
                                          <ul class="des_prod">
                                             <li>Số chỗ:<span><?=@$value->so_ghe;?></span></li>
                                             <li>Vận hành: <span> <?=@$value->van_hanh;?></span></li>
                                             <li>Động cơ:  <span>  <?=@$value->dong_co;?></span></li>
                                             <li>Màu xe:   <span>   <?=@$value->mau_xe;?></span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                  <?php }}?>
                                 <div class="clearfix"></div>
                                
                              </div>
                              <div class="phantrang lightSpeedIn wow">
                                 <?php echo $this->pagination->create_links();?>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>