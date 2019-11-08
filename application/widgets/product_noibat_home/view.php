<section class="col-md-12 col-xs-12">
                     <div class="heard_title fadeInDown wow">
                        <h3 class="title_menu"><a href=""> Xe mới nổi bật nhất</a></h3>
                        <ul class="menu_child ">
                        <?php if(isset($cate_all)){
                                  foreach($cate_all as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
                        </ul>
                     </div>
                     <div class="clearfix"></div>
                     <div class="owl-carousel slider_boxCarnew fadeInDown wow">
                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">
                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new" style="border: none;">
                                          <a href="<?=base_url('san-pham/').$pros_1->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$pros_1->pro_dir.'/'.@$pros_1->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$pros_1->alias;?>.html"><?=$pros_1->name;?></a></h3>
                                             <p>Giá: <span><?=number_format($pros_1->price)?> <sup>đ</sup></span></p>
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
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" style="height:180px;" class="w_100 pulse wow" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="">Toyota Corolla Altis 2.0 </a></h3>
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
                              <div class="clearfix-10"></div>
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">
                                 <?php if(isset($pros_3)){
                                    foreach($pros_3 as $value){
                                 ?>
                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new " style="border: none;">
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html">Toyota Corolla Altis 2.0 Sport 2019</a></h3>
                                             <p>Giá: <span>932,000,000 <sup>đ</sup></span></p>
                                          </div>
                                       </div>
                                    </div>
                                    <?php }}?>
                                 </div>
                                 <div class="box_childe imgRow">
                                 <div class="box_childe imgRow">
                                 <?php if(isset($pros_4)){
                                    foreach($pros_4 as $value){ 
                                    ?>
                                    <div class="col-vd-3 col-vd-3 col-xs-6 col-480-12 pdd-30">
                                       <div style="border-right: none;border-left:1px solid #ccc;" class="box_prod">
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" class="w_100 pulse wow" style="height:180px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html">Toyota Corolla Altis 2.0 </a></h3>
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
                        </div>
                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">
                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new" style="border: none;">
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$pros_1->pro_dir.'/'.@$pros_1->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html"><?=$pros_1->name;?></a></h3>
                                             <p>Giá: <span><?=number_format($pros_1->price)?> <sup>đ</sup></span></p>
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
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" style="height:180px;" class="w_100 pulse wow" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html">Toyota Corolla Altis 2.0 </a></h3>
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
                              <div class="clearfix-10"></div>
                              <div class="newCars_standout clearfix">
                                 <div class="imgRow">
                                 <?php if(isset($pros_3)){
                                    foreach($pros_3 as $value){
                                 ?>
                                    <div class="col-pr-3 col-pr-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod box_prod-new " style="border: none;">
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" class="w_100 pulse wow" style="height:300px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html">Toyota Corolla Altis 2.0 Sport 2019</a></h3>
                                             <p>Giá: <span>932,000,000 <sup>đ</sup></span></p>
                                          </div>
                                       </div>
                                    </div>
                                    <?php }}?>
                                 </div>
                                 <div class="box_childe imgRow">
                                 <div class="box_childe imgRow">
                                 <?php if(isset($pros_4)){
                                    foreach($pros_4 as $value){ 
                                    ?>
                                    <div class="col-vd-3 col-vd-3 col-xs-6 col-480-12 pdd-30">
                                       <div style="border-right: none;border-left:1px solid #ccc;" class="box_prod">
                                          <a href="<?=base_url('san-pham/').$value->alias;?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" class="w_100 pulse wow" style="height:180px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').$value->alias;?>.html">Toyota Corolla Altis 2.0 </a></h3>
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
                        </div>
                     </div>
                     <div class="chitiet lightSpeedIn wow">
                        <a href="<?=base_url('san-pham')?>.html"> xem tất cả</a>
                     </div>
                  </section>