<section class="col-md-12 col-xs-12">
                     <div class="heard_title lightSpeedIn wow">
                        <h3 class="title_menu"><a href="<?php echo base_url('xe-cu')?>.html"> Xe Cũ nổi bật nhất</a></h3>
                        <ul class="menu_child ">
                        <?php if(isset($cate)){
                           foreach($cate as $value){
                           ?>
                           <li><a href="<?php if(isset($value->alias)){echo base_url('danh-muc-xe-cu/').$value->alias;}?>.html"><?php if(isset($value)){echo $value->name;}?></a></li>
                           <?php }}?>
                        </ul>
                     </div>
                     <div class="clearfix"></div>
                     <div class="owl-carousel slider_boxCarold">
                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">



                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new">
                                       <a href="<?php if(isset($pros_1->alias)){echo base_url('thong-tin-xe-cu/').$pros_1->alias;}?>.html" class="img_prod reRenderImg"><img src="<?=base_url($pros_1->img_dir.@$pros_1->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix">
                                             <h3 class="name_prod"><a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html"><?=$pros_1->name;?></a></h3>
                                             <p>Giá: <span><?=number_format($pros_1->price);?> <sup>đ</sup></span></p>
                                          </div>
                                       </div>
                                    </div>




                                 </div>





                                 <div class="box_childe imgRow">
                                 <?php if(isset($pros_2)){
                                    foreach($pros_2 as $value){ 
                                    ?>
                                    <div class="col-vd-3 col-vd-3 col-xs-6 col-480-12 pdd-30">
                                       <div style="border-right: none;border-left:1px solid #ccc;" class="box_prod">
                                          <a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html" class="img_prod reRenderImg"><img src="<?=base_url($value->img_dir.@$value->image)?>" style="height:180px;" class="w_100 pulse wow" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html"><?=$value->name?> </a></h3>
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
                              </div>
                           </div>
                        </div>
                       


                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">

                                 <?php if(isset($pros_3)){
                                    foreach($pros_3 as $value){ 
                                    ?>

                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new">
                                       <a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html" class="img_prod reRenderImg"><img src="<?=base_url($value->img_dir.@$value->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix">
                                             <h3 class="name_prod"><a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html"><?=$value->name;?></a></h3>
                                             <p>Giá: <span><?=number_format($value->price);?> <sup>đ</sup></span></p>
                                          </div>
                                       </div>
                                    </div>

                                    <?php }}?>


                                 </div>





                                 <div class="box_childe imgRow">
                                 <?php if(isset($pros_4)){
                                    foreach($pros_4 as $value){ 
                                    ?>
                                    <div class="col-vd-3 col-vd-3 col-xs-6 col-480-12 pdd-30">
                                       <div style="border-right: none;border-left:1px solid #ccc;" class="box_prod">
                                          <a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html" class="img_prod reRenderImg"><img src="<?=base_url($value->img_dir.'/'.@$value->image)?>" style="height:180px;" class="w_100 pulse wow" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?php if(isset($value->alias)){echo base_url('thong-tin-xe-cu/').$value->alias;}?>.html"><?=$value->name?> </a></h3>
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








                                 </div>
                              </div>
                           </div>
                        </div>













                     </div>
                     <div class="chitiet lightSpeedIn wow">
                        <a href="<?php echo base_url('xe-cu')?>.html"> xem tất cả</a>
                     </div>
                  </section>