<section class="col-md-12 col-xs-12">
                     <div class="heard_title lightSpeedIn wow">
                        <h3 class="title_menu"><a href="<?php echo base_url('danh-muc-phu-tung/phu-tung-o-to-chinh-hang.html')?>"> Phụ Tùng Chính Hãng</a></h3>
                        <ul class="menu_child ">
                           <li><a href="<?php echo base_url('danh-muc-phu-tung/phu-tung-than-vo.html')?>"> Phụ tùng thân vỏ</a></li>
                           <li><a href="<?php echo base_url('danh-muc-phu-tung/noi-that-ghe-da.html')?>">Nội thất </a></li>
                           <li><a href="<?php echo base_url('danh-muc-phu-tung/phu-tung-ngoai-that.html')?>">Ngoại thất  </a></li>
                           <li><a href="<?php echo base_url('danh-muc-phu-tung/ac-quy-theo-hang.html')?>">Ắc Quy   </a></li>
                           <li><a href="<?php echo base_url('danh-muc-phu-tung/lop-lazang-o-to.html')?>">Lốp</a></li>
                        </ul>
                     </div>
                     <div class="clearfix"></div>
                     <div class="owl-carousel slider_boxphutung">
                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_phutung clearfix">

                              <?php if(isset($pros)){
                                 foreach($pros as $value)
                                 {
                                 ?>
                                 <div class="col-md25-5 col-xs-6 col-480-12 pdd_7 ">
                                    <div class="box_prd_mid">
                                       <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html" class="img_prd reRenderImg"><img src="<?php echo base_url('upload/img/products/'.$value->pro_dir.'/'.$value->image);?>" class="w_100" style="height: 200px;" alt=""></a>
                                       <h3 class="name_prd">
                                          <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html"><?=LimitString($value->ten_phu_tung,25)?></a>
                                       </h3>
                                       <span class="price">Giá: <small><?=number_format($value->price)?></small></span>
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
                        


                        <div class="item">
                           <div class="boxCarnew">
                              <div class="newCars_phutung clearfix">

                              <?php if(isset($pros)){
                                 foreach($pros as $value)
                                 {
                                 ?>
                                 <div class="col-md25-5 col-xs-6 col-480-12 pdd_7 ">
                                    <div class="box_prd_mid">
                                       <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html" class="img_prd reRenderImg"><img src="<?php echo base_url('upload/img/products/'.$value->pro_dir.'/'.$value->image);?>" class="w_100" style="height: 200px;" alt=""></a>
                                       <h3 class="name_prd">
                                          <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html"><?=LimitString($value->ten_phu_tung,20)?></a>
                                       </h3>
                                       <span class="price">Giá: <small><?=number_format($value->price)?></small></span>
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
                     </div>
                     <div class="chitiet">
                        <a href="<?php echo base_url('tat-ca-phu-tung')?>.html"> xem tất cả</a>
                     </div>
                  </section>