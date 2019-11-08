
                                         
<div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="">Trang chủ</a> 
                  <a href="<?php echo base_url('san-pham')?>.html">Xe mới</a>
                  <a href="<?php if(isset($cate_curent->alias)){echo base_url('danh-muc/').@$cate_curent->alias;}?>.html"><?=@$cate_curent->name;?></a>
               </div>
            </div>
         </div>
      </div>
      <!-- main content -->
      <main>
         <div class="container">
            <div class="row_pc">
               <div class="row ">
                  <section class="col-md-12 col-xs-12">
                     <div class="carFeatured">
                        <div class=" heard_title_xecu">
                           <h3 class="tit_mid"><a href=""><?=@$cate_curent->name;?></a></h3>
                        </div>
                        <div class="clearfix-30 hidden-sm hidden-xs"></div>
                        <div class="sc_prod_home">
                           <div class="row_pc">
                              <div class="row-30 imgRow">
                                 <!--  -->
                                 <div class="menutab-car-new">
                                    <!-- Nav tabs -->
                                    <ul class="tab_toyotaNew clearfix" role="">
                                       <li class="active">
                                          <a class="" data-toggle="tab" href="#home_all">Tất cả  </a>
                                       </li>
                                       <?php if(isset($cate)){
                                           $i=1;
                                            foreach($cate as $value){
                                       ?>
                                      <?php if($i==1){?> <li class="active"><?php }else{?>
                                      <li><?php }?>
                                       <a class="" data-toggle="tab" href="#tab<?=$i;?>"><?=@$value->name;?></a>
                                       </li>
                                       
                                            <?php $i++;}}?>
                                    </ul>
                                    <!-- Tab panes -->
                                    <?php if(isset($lists0)){
                                              foreach($lists0 as $value){
                                              ?>
                                             <div class="col-md-3 col-sm-3 col-xs-6 col-480-12 pdd-30">
                                                <div class="box_prod">
                                                   <a href="<?=base_url('thong-tin-xe-moi/').$value->alias?>.html" class="img_prod reRenderImg"><img src="<?= base_url('upload/img/products/' . $value->pro_dir . '/' . @$value->image) ?>" class="w_100 rollIn wow" style="height:180px;" alt=""></a>
                                                   <div class="sub_prod clearfix">
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
                                          </div>
                                          <div class="toyota_img">
                                          <?php if(isset($banner)){
                                             foreach($banner as $value){
                                             ?>
                                             <div class="col-md-6 col-sm-6 col-xs-12 col-480-12 pdd-30 clearfix bounceInLeft wow">
                                                <div class="box_prod">
                                                   <span  class="img_prod reRenderImg w_100"><a href="<?=base_url(@$banner->url);?>"><img src="<?=base_url(@$value->image);?>" alt=""></a></span>
                                                </div>
                                             </div>
                                             <?php }}?>
                                             <div class="col-md-6 col-sm-6 col-xs-12 col-480-12 pdd-30 bounceInRight wow">
                                                <div class="box_prod">
                                                   <iframe width="100%" height="330" src="https://www.youtube.com/embed/mYunDvfMs84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <!-- ----------------------------------------------------------------------- -->





















                                       <?php if(isset($cate)){
                                           $i=1;
                                            foreach($cate as $value){
                                       ?>

                                       <div id="tab<?=$i;?>" class=" tab-pane fade">
                                       <?php if(isset($value->product)){
                                              foreach($value->product as $value){
                                              ?>
                                             <div class="col-md-3 col-sm-3 col-xs-6 col-480-12 pdd-30">
                                                <div class="box_prod">
                                                   <a href="" class="img_prod reRenderImg"><img src="<?= base_url('upload/img/products/' . $value->pro_dir . '/' . @$value->image) ?>" class="w_100 rollIn wow" style="height:180px;" alt=""></a>
                                                   <div class="sub_prod clearfix">
                                                      <h3 class="name_prod"><a href="">Mazda 6 2019</a></h3>
                                                      <p>Giá: <span>932,000,000 <sup>đ</sup></span></p>
                                                      <ul class="des_prod">
                                                         <li>Số chỗ:<span>05</span></li>
                                                         <li>Vận hành: <span> số tự động vô cấp</span></li>
                                                         <li>Động cơ:  <span>  2.0</span></li>
                                                         <li>Màu xe:   <span>   Đen, Xám, Bạc, Nâu, Trắng</span></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                        
                                              <?php }}?>
                                       </div>
 
                                       <?php $i++;}}?>
                                    </div>
                                                                                                           
                                 <!--  -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <!-- dịch vụ -->
                  <?=@$dichvu;?>
               </div>
            </div>
         </div>
      </main>