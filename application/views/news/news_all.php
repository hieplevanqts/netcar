<div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="">Trang chủ</a> 
                  <a href="">Tin tức</a>
               </div>
            </div>
         </div>
      </div>
      <!-- main content -->
      <main>
         <div class="container">
            <div class="row_pc">
               <div class="row flex-reverse">
                  <aside class="col-md-3 col-xs-12">
                     <!-- menu dọc -->
                     <?=$news_left;?>
                     <!-- /menu dọc -->
                     <!-- menu dọc -->
                     <div class="sidebar">
                        <h2 class="title_sidebar">Đánh giá xe</h2>
                        <div class="list-sidebar row-flex">
                           <div class="box-product-left">
                              <a href=""><img src="img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                        </div>
                     </div>
                     <!-- /menu dọc -->
                     <!-- menu dọc -->
                     <div class="sidebar">
                        <h2 class="title_sidebar">Kinh nghiệm</h2>
                        <div class="experience">
                           <img src="img/kinhnghiem.png">
                           <p><a href="">Triệu chứng cho thấy bugi ô tô có vấn đề và khắc phục</a></p>
                           <ul>
                              <li><a href="">Tìm hiểu xe MPV là gì? Xe MPV nào tốt nhất hiện nay?</a></li>
                              <li><a href="">Tìm hiểu xe MPV là gì? Xe MPV nào tốt nhất hiện nay?</a></li>
                              <li><a href="">Tìm hiểu xe MPV là gì? Xe MPV nào tốt nhất hiện nay?</a></li>
                              <li><a href="">Tìm hiểu xe MPV là gì? Xe MPV nào tốt nhất hiện nay?</a></li>
                           </ul>
                           <a class="see_more" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm các tin khác</a>
                        </div>
                     </div>
                     <!-- /menu dọc -->
                     <!-- menu dọc -->
                     <div class="sidebar">
                        <h2 class="title_sidebar">Tin nhiều người đọc</h2>
                        <div class="list-sidebar row-flex">
                           <div class="box-product-left many_readers">
                              <a href=""><img src="img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                        </div>
                     </div>
                     <!-- /menu dọc -->
                  </aside>
                  <section class="col-md-9 col-xs-12">
                     <div class="carFeatured">
                        <div class=" heard_title_xecu lightSpeedIn wow">
                           <h3 class="tit_mid"><a href="">Tin Tức</a></h3>
                        </div>
                        <div class="clearfix-15"></div>
                        <div class="sc_prod_home">
                           <div class="row-30_new imgRow">


<?php if(isset($lists2)){foreach($lists2 as $value){?>
                              <div class="col-md-6 col-xs-12 row-30_new">
                                 <div class="new_big"> 
                                    <img class="w_100 pulse wow" style="height:200px;" src="<?php if(isset($value->image)){echo base_url($value->image);}?>" alt="" >

                                 </div>
                                 <a class="new_content lightSpeedIn wow" href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo Limitstring($value->title,80);}?></a>
                              </div>
                            
<?php }}?>


<div class="clearfix-5"></div>

<?php if(isset($lists3)){foreach($lists3 as $value){?>
                              

                              <div class="col-md-4 col-xs-12 row-30_new">
                                 <div class="new_big"> 

                                    <img class="w_100 pulse wow" style="height:200px;" src="<?php if(isset($value->image)){echo base_url($value->image);}?>" alt="" >

                                 </div>
                                 <a class="new_content lightSpeedIn wow" href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo Limitstring($value->title,80);}?></a>
                              </div>
<?php }}?>  

<?php if(isset($lists)):
    foreach($lists as $value):
    ?>



                              <div class="clearfix-20"></div>
                              <div class="col-md-12 col-xs-12 row-30_new ">
                                 <div class="new_cater clearfix">
                                    <img src="<?php if(isset($value->image)){echo base_url($value->image);}?>" alt="" class="pulse wow">
                                    <div class="new_dm lightSpeedIn wow">
                                       <h2><a href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo Limitstring($value->title,100);}?></a></h2>
                                       <span><?php if(isset($value->description)){echo $value->description;}?></span>
                                       </br>
                                       </span>
                                       </br>
                                       <span class="time_date"><?php echo date('d-m-Y', $value->time);?></span>
                                    </div>
                                 </div>
                              </div>
                              

    <?php endforeach;
    endif;
    ?>




                              <div class="phantrang" class="lightSpeedIn wow">
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