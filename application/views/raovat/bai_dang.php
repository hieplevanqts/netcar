
<div class="clearfix-30"></div>

<!-- main content -->
<main > 
 
<div class="container">
  <?php if(isset($_SESSION['error'])){
    echo '
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-success"></i>'.$_SESSION['error'].'</div>';
      unset($_SESSION['error']);
  } ?>

<?php if(isset($_SESSION['mess'])){
    echo '
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-success"></i>'.$_SESSION['mess'].'</div>';
      unset($_SESSION['mess']);
  } ?>
</div>

  <div class="container">
    <div class="row_pc">
      <div class="row flex-reverse">
        <aside class="col-md-3 col-xs-12">
        <div class="sidebar Contact_seller">
            <h2 class="title_sidebar">Thông tin người bán</h2>
            <div class="info_ct">
              <div class="info_seller clearfix">
                <img src="<?php echo base_url()?>assets/img/thongtin.png" alt="">
                <div class="text-info">
                  <h2><?=$item->ten_nguoi_ban;?></h2>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$item->dia_chi;?></p>
                </div>
                
              </div>
              <p class="phone"><span><i class="fa fa-phone" aria-hidden="true"></i> <?=$item->phone_nguoi_ban;?></span></p>
              <p class="advertised"><a href="<?php echo base_url('raovat2/all_cung_nguoi_ban/').$item->id;?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> Tin rao cùng người bán (<?=count($lists)?> tin)</a></p>
            </div>
            
          </div>
          <!-- menu dọc -->
          <div class="sidebar">
            <h2 class="title_sidebar">Có thể bạn quan tâm</h2>
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
          <!-- 
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
           -->
        </aside>
        <section class="col-md-9 col-xs-12">
          <div class="car_new clearfix">
            <div class="detail-car">
              <h2><?=$item->name;?></h2>
              <p>Phân hạng: Xe <?php if(isset($hang_xe->name)){echo $hang_xe->name;}?>  ><?php if(isset($dong_xe->name)){echo $dong_xe->name;}?> > <?php if(isset($item->nam_san_xuat)){echo $item->nam_san_xuat;}?></p>
              <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12 col-480-12">
                  <div class="img-detail-car">
                    <input type="hidden" id="__VIEWxSTATE"/>
                    <script src="<?php echo base_url()?>assets/js/front_end/modernizr.custom.js" type="text/javascript"></script>
                    <link href="<?php echo base_url()?>assets/css/front_end/glasscase.minf195.css" rel="stylesheet" />
                    <ul id='zoom1' class='gc-start'>
					<?php if(isset($images)){
						$i=1;
					foreach($images as $value){?>
						<li><img src="<?=base_url().$value->image;?>" alt="image<?=$i?>"/></li>
						
					<?php $i++; }}
						?>
                        
                     
                    </ul>


                    <script src="<?php echo base_url()?>assets/js/front_end/jquery.glasscase.minf195.js"></script>
                    <script type="text/javascript">
                        $(function () {
                            //ZOOM
                            $("#zoom1").glassCase({
                                'widthDisplay': 514,
                                'heightDisplay': 262,
                                'nrThumbsPerRow': 4,
                                'isSlowZoom': true,
                                'colorIcons': '#F15129',
                                'colorActiveThumb': '#F15129'
                            });

                        });
                    </script>

                  </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 col-480-12">
                  <div class="text-detail-car">
                    <p class="price">Giá bán</p>
                    <p class="price-car"><?=number_format($item->price);?> VND</p>
                    <p class="news-code">Mã tin: <span><?=$item->id;?> (<?=$item->create_at;?>)</span></p>
                    <?php if($item->status==1){?><p><span>Tình trạng:</span><?php echo 'Mới</p>';}?>
                    <?php if($item->status==0){?><p><span>Tình trạng:</span><?php echo 'Qua sử dụng</p>';}?>
                    <p><span>Xuất xứ:</span> <?=$item->xuat_xu;?></p>
                    <p><span>Năm SX:</span> <?=$item->nam_san_xuat;?></p>
                    <p><span>Đời xe:</span> <?=$item->doi_xe;?></p>
                    <p><span>Kiểu dáng:</span> <?=$item->dang_xe;?></p>
                    <p><span>Hộp số:</span> <?=$item->hop_so;?></p>
                  </div>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="menutab-car-new">
               <!-- Nav tabs -->
              <ul class="clearfix" role="">
                <li class="active">
                  <a class=""  href="#home">Mô tả</a>
                </li>
                <li class="">
                  <a class=""  href="#menu1">Thông số cơ bản</a>
                </li>
                <li class="">
                  <a class=""  href="#menu2">Thông số kỹ thuật</a>
                </li>
                <li class="">
                  <a class="" rel="menu1" href="#menu3">Tiện nghi</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home" class=" tab-pane active"><br>
                  <div class="detail-tab-ct">
                    <?=$item->description;?>
                    <div style="border: 1px solid #99f;padding:10px;margin: 10px 0px 10px 0px;" class="bao_quanh">
                                                        <div id="menu1" class="row"><h3 style="padding: 10px 0px 10px 20px;color:blue;font-size:18px;font-weight:bold;">Thông số cơ bản</h3></div>
                                                        <div class="row">
                                                            <div style="padding-right:30px;" class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                                  <table class="table table-striped">
                                                                    
                                                                      <tbody>
                                                                        <tr>
                                                                          
                                                                          <td>Số cửa: </td>
                                                                          <td><?=$item->so_cua;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Số chỗ:</td>
                                                                          <td><?=$item->so_ghe_ngoi;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Hộp số</td>
                                                                          <td><?=$item->hop_so;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Dẫn động</td>
                                                                          <td><?=$item->dan_dong;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Dung tích bình nhiên liệu</td>
                                                                          <td><?=$item->dung_tich_binh_nhien_lieu;?></td>
                                                                          
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                            </div>
                                                            <div style="padding-left:30px;" class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                            <table class="table table-striped">
                                                                    
                                                                    <tbody>
                                                                      <tr>
                                                                      
                                                                        <td>Tiêu thụ NL (đường trường)</td>
                                                                        <td><?=$item->muc_tieu_thu_duong_truong;?></td>
                                                                      
                                                                      </tr>
                                                                      <tr>
                                                                        
                                                                        <td>Tiêu thụ NL (đô thị)</td>
                                                                        <td><?=$item->muc_tieu_thu_do_thi;?></td>
                                                                      
                                                                      </tr>
                                                                      <tr>
                                                                        
                                                                        <td>Màu xe</td>
                                                                        <td><?=$item->mau_ngoai_that;?></td>
                                                                        
                                                                      </tr>
                                                                      <tr>
                                                                        
                                                                        <td>Màu nội thất</td>
                                                                        <td><?=$item->mau_noi_that;?></td>
                                                                        
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>                        
                                                            </div>
                                                        </div>





                                                        <!--  -->






                                                        <div id="menu2" class="row"><h3 style="padding: 10px 0px 10px 20px;color:blue;font-size:18px;font-weight:bold;">Thông số kỹ thuật</h3></div>
                                                        <div class="row">
                                                            <div style="padding-right:30px;"  class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                                  <table class="table table-striped">
                                                                    
                                                                      <tbody>
                                                                        <tr>
                                                                          
                                                                          <td>Dài x rộng x cao (mm)</td>
                                                                          <td><?=$item->kich_thuoc;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Chiều dài cơ sở(mm)</td>
                                                                          <td><?=$item->chieu_dai_co_so;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Trọng lượng không tải(kg)</td>
                                                                          <td><?=$item->trong_luong_ko_tai;?></td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                          
                                                                          <td>Dung tích động cơ</td>
                                                                          <td><?=$item->dung_tich_xi_lanh;?></td>
                                                                          
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                            </div>
                                                            <div style="padding-left:30px;" class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                            <table class="table table-striped">
                                                                    
                                                                    <tbody>
                                                                      <tr>
                                                                      
                                                                        <td>Phanh</td>
                                                                        <td><?=$item->ph?></td>
                                                                      
                                                                      </tr>
                                                                      
                                                                      <tr>
                                                                        
                                                                        <td>Giảm xóc</td>
                                                                        <td><?=$item->giam_xoc;?></td>
                                                                      
                                                                      </tr>
                                                                      <tr>
                                                                        
                                                                        <td>Lốp xe:</td>
                                                                        <td><?=$item->thong_so_lop;?></td>
                                                                        
                                                                      </tr>
                                                                      <tr>
                                                                        
                                                                        <td>Vành mâm xe:</td>
                                                                        <td><?=$item->vanh_mam_xe;?></td>
                                                                        
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>                        
                                                            </div>
                                                        </div>


                                                        <!--  -->


                                                        <div id="menu3" class="row"><h3 style="padding: 10px 0px 10px 20px;color:blue;font-size:18px;font-weight:bold;">Tiện nghi</h3></div>
                                                        <div class="row">
                                                            <div style="padding-right:30px;" class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                                  <table class="table table-striped">
                                                                    
                                                                      <tbody>
                                                                        <?php if(isset($tien_nghi)){
                                                                          $tn = json_decode($item->tien_nghi);                                 
                                                                    $i=0;                                                        
                                                                          foreach($tien_nghi as $value){
                                                                          ?>
                                                                        <tr>
                                                                          <td><?=$value->content;?></td>  
                                                                          <td><?if(in_array($value->id, $tn)){echo '<i style="color:green;"class="fa fa-check" aria-hidden="true"></i>';}else{echo '<i style="color:red;" class="fa fa-times" aria-hidden="true"></i>';}?></td>                                                                                                                                                    
                                                                        </tr>
                                                                          <?php  $i++;}}?>
                                                                      </tbody>
                                                                    </table>
                                                            </div>
                                                            <div style="padding-left:30px;" class="col-md-6 col-sm-6 col-xs-12 col-480-12">
                                                            <table class="table table-striped">                                                                   
                                                                    <tbody>
                                                                    <?php if(isset($an_toan)){
                                                                          $at = json_decode($item->an_toan);   
                                                                          $j=0;                                                                                                                                                               
                                                                            foreach($an_toan as $key => $value){ 
                                                                              
                                                                          ?>
                                                                        <tr>
                                                                          <td><?=$value->content;?></td>  
                                                                          <td><?php if(in_array($value->id, $at)){echo '<i style="color:green;"class="fa fa-check" aria-hidden="true"></i>';}else{echo '<i style="color:red;" class="fa fa-times" aria-hidden="true"></i>';}?></td>    
                                                                        </tr>
                                                                            <?php }}?>
                                                                    </tbody>
                                                                  </table>                        
                                                            </div>
                                                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12 col- 480-12">
                        <div class="Contact_seller">
                          <h2>Liên hệ người bán</h2>
                          <form action="<?php echo base_url('contact')?>" method="POST" class="validate">
                          
                            <input class="validate[required] " type="text" name="full_name" placeholder="Họ tên (*)">
                            <input class="validate[required] " type="text" name="address" placeholder="Địa chỉ (*)">
                            <input class="validate[required,custom[number]] " type="text" name="phone" placeholder="Số điện thoại (*)">
                            <script src="http://localhost/raovat/assets/ckeditor2/ckeditor.js"></script>
                            <textarea id="ckeditor_description1" class="validate[required] des_lh" name="comment" placeholder="Xin chào, tôi quan tâm đến xe mà bạn đang rao bán, hãy liên hệ với tôi qua thông tin trên (*)"></textarea>
                            <script>CKEDITOR.replace('ckeditor_description1');</script>
                            <br>
                            
                            
                            
                                <input class="validate[required]" type="text" name="ma_xt" placeholder="Nhập mã xác nhận (*)">
                              
                            
                            
                               
<button name="sendcontact" class="sendcontact" value="<?=$item->id;?>" type="submit">Gửi</button>  
                            
                          </form>
                         
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 col- 480-12">
                        <div class="Contact_seller">
                          <h2>Thông tin người bán</h2>
                          <div class="info_seller clearfix">
                            <img src="<?php echo base_url()?>assets/img/thongtin.png" alt="">
                            <div class="text-info">
                              <h2><?=$item->ten_nguoi_ban;?></h2>
                              <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$item->dia_chi;?></p>
                            </div>
                            
                          </div>
                          <p class="phone"><span><i class="fa fa-phone" aria-hidden="true"></i> <?=$item->phone_nguoi_ban;?></span></p>
                            <p class="advertised"><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i> Tin rao cùng người bán (<?=count($lists);?> tin)</a></p>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>
                
                
                
              </div>
            </div>
            <!--  
            <div class="coming_soon clearfix">
              <div class="title-coming-soon clearfix">
                <h2>Xe liên quan</h2>
                <p><a href="<?php echo base_url('tin-rao');?>">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
              </div>
              
              <div class="row row-flex">
              
               <?php if(isset($tinrao_lienquan)):
                foreach($tinrao_lienquan as $value):
                ?>
              
                <div class="col-md-4 col-sm-4 col-xs-6 col-480-12">
                  <div class="box-coming-soon">
                    <a href="<?=$value->alias;?>.html"><img src="<?=base_url().$value->img_dir.$value->image; ?>"></a>
                    <div class="text-coming-soon">
                      <p class="title"><a href="<?=$value->alias;?>.html"><?=$value->name;?></a></p>
                      <p class="price">Giá từ: <span><?=number_format($value->price);?>đ</span></p>
                      <p class="add-time"><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$value->xuat_xu?> <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$value->create_at;?></span></p>
                    </div>
                  </div>
                </div>
                <?php endforeach;endif;?>
				
              </div>
            </div>
             -->
          </div>
          

        </section>
      </div>
    </div>
  </div>

</main>
