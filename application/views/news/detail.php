<div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="">Trang chủ</a> 
                  <a href="">Tin tức</a>
                  <a href="">Chi tiết</a>
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
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                           <div class="box-product-left">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p><a href="">Top 10 xe bán chạy nhất tháng 4 năm 2019: Hyundai Grand i10 và Accent lên 'ngôi'</a></p>
                           </div>
                        </div>
                     </div>
                     <!-- /menu dọc -->
                     <!-- menu dọc -->
                     <div class="sidebar">
                        <h2 class="title_sidebar">Kinh nghiệm</h2>
                        <div class="experience">
                           <img src="<?php echo base_url()?>assets/img/kinhnghiem.png">
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
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                           <div class="box-product-left many_readers">
                              <a href=""><img src="<?php echo base_url()?>assets/img/quantam.png"></a>
                              <p class="titile-readers"><a href="">Mazda CX-8 2019 quay trở lại giá thực, tăng cao nhất 50 triệu đồng </a></p>
                              <p class="date">26/06/2019</p>
                           </div>
                        </div>
                     </div>
                     <!-- /menu dọc -->
                  </aside>
                  <section class="col-md-9 col-xs-12">
                     <div class="carFeatured">
                        <div class="dichvucuuho lightSpeedIn wow">
                           <h3 class="tit_mid"><a href="<?php if(isset($news->alias)){echo base_url('tin-tuc/').$news->alias;}?>.html"><?php if(isset($news->title)){echo $news->title;}?></a></h3>
                        </div>
                        <div class="time-social clearfix lightSpeedIn wow">
                           <time><?php echo date('d-m-Y', $news->time);?></time>
                           <div class="asocial clearfix lightSpeedIn wow">
                              <ul>
                                 <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thích</a></li>
                                 <li><a href="#">Chia sẻ</a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="conntent ">
                        <img src="<?php if(isset($news->image)){echo base_url($news->image);}?>" alt="Tài xế sử dụng rượu, bia có thể bị tước bằng lái xe vĩnh viễn">
                        <?php if(isset($news->content)){echo $news->content;}?>
                     <div class="view_more lightSpeedIn wow">
                        <a href="">Xem Thêm (Tin tuyển dụng):</a>
                        <ul class="carter_new lightSpeedIn wow">
                        <?php if(isset($news_tuyendung)){
                           foreach($news_tuyendung as $value){
                           ?>
                           <li><a href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo $value->title;}?></a></li>
                           <?php }}?>
                        </ul>
                        <div class="asocial clearfix">
                           <ul class="lightSpeedIn wow">
                              <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thích</a></li>
                              <li><a href="#">Chia sẻ</a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="clearfix-10"></div>
                     <div class="view_more view_port">
                        <a href="" class="lightSpeedIn wow">Tin liên quan</a>
                        <div class="clearfix-20"></div>
                        <div class="row clearfix">
<?php if(isset($new_same)){
   foreach($new_same as $value){
   ?>


                           <div class="col-md-4 col-xs-12">
                              <div class="new_carter clearfix">
                                 <img class="pulse wow" style="width: 250px;height:200px;" src="<?php if(isset($value->image)){echo base_url($value->image);}?>" alt="" >
                                 <h2 class="lightSpeedIn wow"><a href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo Limitstring($value->title,40);}?></a></h2>
                              </div>
                           </div>
   <?php }}?>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>