
<script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/readmore.min.js"></script>
     
     <script>
    $('article').readmore({
  speed: 75,
  lessLink: '<a href="#">Read less</a>'
});
     </script>
      <!-- /.header content -->
      <div class="clearfix"></div>
      <section id="content">
        <div class="container">
          <div id="tongquan" class="row">
          
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
           
                <section class="qts_left_content">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane active">
                                <img src="<?=base_url('upload/img/products/'.$item->pro_dir.'/'.@$item->image)?>" alt="" class="w_100" style="height:350px;">
                        </div>
                        <div id="menu2" class="tab-pane fade">
                        <img src="<?=base_url('upload/img/products/'.$item->pro_dir.'/'.@$item->image)?>" alt=""  class="w_100" style="height:350px;">
                         
                        </div>
                        <div id="menu3" class="tab-pane fade">
                                <img src="<?=base_url('upload/img/products/'.$item->pro_dir.'/'.@$item->image)?>" alt=""  class="w_100" style="height:350px;">
                        </div>
                    </div>
                       <!--  -->
                       <div class="menutab-car-new lightSpeedIn wow">
                     <!-- Nav tabs -->
                       
                                <a data-toggle="tab active" href="#menu1"><div style="width:30px;height:30px;background-color:#eceded;margin:5px;"></div></a>
                               
                               
                                <a data-toggle="tab" href="#menu2"><div style="width:30px;height:30px;background-color:#a22600;margin:5px;"></div></a>
                               
                                
                                <a data-toggle="tab" href="#menu3"><div style="width:30px;height:30px;background-color:yellow;margin:5px;"></div></a>
                               
                              
                                <a data-toggle="tab" href="#menu3"><div style="width:30px;height:30px;background-color:#babdc1;margin:5px;"></div></a>
                              
                               
                                <a data-toggle="tab" href="#menu3"><div style="width:30px;height:30px;background-color:#1b1d1e;margin:5px;"></div></a>
                          
                        </div>
                     <!-- Tab panes -->
                     
                     <!--  -->
                     </section>





                     
              
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
              <div class="col_ctn">
                <div class="title_ctn_mid">
                  <p class="title_ctn_top"><?=$item->name;?></p>
                  <div class="cnt_mid">
                    <p>Thay đổi để bứt phá</p>
                    <span><?=number_format($item->price)?> VND</span>
                  </div>
                  <div class="cnt_bot">
                    <p>Giá lăn bánh:</p>
                    <span><?=number_format($item->price)?> VND</span>
                    <p>
                      <ul class="list">
                        <li>Số chỗ ngồi : <?=@$item->so_ghe?></li>
                        <li>Kiểu dáng : <?=@$item->van_hanh?></li>
                        <li>Nhiên liệu : <?@$item->dong_co?></li>
                        <li>Xuất xứ : <?=@$xuat_xu?></li>
                        <?php if (isset($thuoctinh)) {
                                $stt=0;
                                foreach ($thuoctinh as $key=>$v) { $stt++;
                                    if($v->type=='text'){
                                    ?>
                        <li><?= $v->name?>: <?= $v->content?> </li>
                                    <?php }  } }?>   </div>
                      </ul>
                    </p>
                   
                  </div>  
                </div>
                <div class="btn_ctn">
                  <button type="submit" class="btn_p11">Đăng ký lái thử</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end thông tin -->
      <div class="clearfix"></div>
      <section id="library">
        <div class="container">
          <div class="row">
            <div id="thu_vien" class="slider_part owl-carousel">
            <?php if(isset($p_images)){
              foreach($p_images as $value){
              ?>
              <div class="item">
                <a data-toggle="modal" data-target="#myModal3" href=""><img src="<?php echo base_url(@$value->image)?>" style="width:280px;height:200px;" alt=""/></a>
              </div>
              <?php }}?>
              
            </div>
          </div>
        </div>
      </section>
      <section id="library_p23">
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
                       
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="library_mid">
                <div class="img_title1">
                  <a href="#tongquan"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Tổng quan</p>
                </div>
                <div class="img_title">
                  <a href="#thu_vien"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Thư viện</p>
                </div>
                <div class="img_title1">
                  <a href="#ngoaithat" ><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Ngoại thất</p>
                </div>
                <div class="img_title">
                  <a href="#noi_that"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Nội thất</p>
                </div>
                <div class="img_title1">
                  <a href="#tinh_nang"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Tính năng</p>
                </div>
                <div class="img_title">
                  <a href="#phu_kien"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Phụ kiện</p>
                </div>
                <div class="img_title1">
                  <a href="#ts_kt"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Thông số kỹ thuật</p>
                </div>
                <div class="img_title">
                  <a href="#tai_cat"><img src="<?php echo base_url()?>assets/img/icon2.png"></a>
                  <p>Tải catalogue</p>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      <div class="clearfix"></div>
      <section id="exterior">
        <div class="container">
          <div id="ngoaithat" class="row exte">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="title_ext">
                  <div class="tt_top_ext">
                    <p>NGOẠI THẤT</p>
                    <span>CUỐN HÚT MỌI ÁNH NHÌN</span>
                  </div>

                  <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/readmore.min.js"></script>
     
     <script>
    $('article').readmore({
  speed: 75,
  lessLink: '<a href="#">Read less</a>'
});
     </script>
                  <div class="mid_ext">
                  <article data-readmore="" aria-expanded="false" id="rmjs-1" style="max-height: none; height: 200px;">
                  <?=@$item->mota_ngoaithat;?>
                  
      </article>
                  
            
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="img_ext">
                  <a href=""><img src="<?php echo base_url(@$img_firts_xemoi->image)?>"></a>
                </div>
              </div>
              
            </div>
        </div>
      </section>

      <section id="ext_bot">
        <div class="container">
          <div class="row">
          <div class="slide_sm">
              <div class="owl-carousel slide_img_sm">
          <?php if(isset($img_xemoi)){
                foreach($img_xemoi as $value){
          ?>
          <?php if($value->image != ''){?>
          
              <div class="item"> 
              <div class="image_ext">
                <a data-toggle="modal" data-target="#myModal2" href=""><img src="<?php echo base_url(@$value->image);?>" style="width:100%;height:180px;" class="image"></a>
                <div class="overlay">Allbum ngoại thất</div>
              </div>
            </div>
                <?php } }}?>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section id="exterior">
        <div class="container">
          <div class="row exte">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="img_ext1">
                  <a href=""><img src="<?=base_url(@$img_firts_noithat->image)?>"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="noi_that" class="title_ext1">
                  <div class="tt_top_ext1">
                    <p>NỘI THẤT</p>
                    <span>NỘI THẤT TINH TẾ </span><br>
                    <span>KHÔNG GIAN THOÁNG ĐÃNG</span>
                  </div>
                  <div class="mid_ext">
                  <?=@$item->mota_noithat;?>
                    <a href=""><p>Xem thêm....</p></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

      <section id="ext_bot">
        <div class="container">
        <div class="slide_sm">
              <div class="owl-carousel slide_img_sm">
              <?php if(isset($img_noithat)){
                foreach($img_noithat as $value){
                ?>
                <div class="item">
                  <div class="image_ext">
                    <a data-toggle="modal" data-target="#myModal" href=""><img src="<?=base_url(@$value->image)?>" class="image" style="width:260px;height:180px;"></a>
                    <div class="overlay">Allbum nội thất</div>
                  </div>
                </div>
              <?php }}?>
              </div>
            </div>
        </div>
      </section>   
      <div class="clearfix"></div>

      <style>
ul.tab_tinh_nang{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tab_tinh_nang li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tab_tinh_nang li.current{
			background: #ededed;
			color: #222;
		}

		.tabtn_1{
			display: none;
			background: #ededed;
			padding: 15px;
		}

		.tabtn_1.current{
			display: inherit;
		}
</style>




      <section id="feature">
        <div class="container">
          <div id="tinh_nang" class="row">
            <div class="feat_top">
              <p>TÍNH NĂNG</p>
              <span>TÍNH NĂNG NỔI BẬT</span>
            </div>
            <!--  -->
            <div class="container">

	<ul class="tabs tab_tinh_nang">
		<li class="tab-link current li_tinhnang" data-tab="tab-1">Vận hành</li>
		<li class="tab-link" data-tab="tab-2">An toàn</li>
		
	</ul>
  <div id="tab-1" class="tab-content current tabtn_1">
   <?php if(isset($list_tinhnang)){
  foreach($list_tinhnang as $value){
  ?> 
	<div class="col-md-3 tinh_nang">
    <a href=""><img src="<?=base_url().$value->image?>" style="width:100%;height:180px;" alt=""></a>
    <?=Limitstring($value->content,80);?>
  </div>
  	
	<?php }}?>
  </div>

  <div id="tab-2" class="tab-content tabtn_1">
   <?php if(isset($list_vanhanh)){
  foreach($list_vanhanh as $value){
  ?> 
	<div class="col-md-3 tinh_nang">
    <a href=""><img src="<?=base_url().$value->image?>" style="width:100%;height:180px;" alt=""></a>
    <?=Limitstring($value->content,80);?>
  </div>
  	
	<?php }}?>
  </div>
</div><!-- container -->
            

            
          </div>
        </div>
      </section>
      <div class="clearfix"></div>

      <section id="feature">


        <div id="phu_kien" class="container">
        <div class="feat_top">
                <p>PHỤ TÙNG</p>
                <span>PHỤ TÙNG CHÍNH HÃNG :</span>
        </div>
        
        <link rel="stylesheet" href="<?=base_url('assets/css/front_end/')?>menu_tab.css">
                <div class="tab">
                <?php if(isset($dm_phutung)){
                  $i=1;
                      foreach($dm_phutung as $value){
                        if($i==1){
                  ?>
                  <button class="tablinks" onclick="openCity(event, '<?=$value->name;?>')" id="defaultOpen"><?=$value->name;?></button>
                      <?php }else{?>

                  <button class="tablinks" onclick="openCity(event, '<?=$value->name;?>')"><?=$value->name;?></button>
                      <?php } $i++;}}?>
                  
                </div>
          <?php if(isset($dm_phutung)){
            $i=1;
            foreach($dm_phutung as $value){
            ?>
            <div id="<?=$value->name;?>" class="tabcontent">
             <?php if(isset($value->products)){?>              
                                  
                    <?php
                    foreach($value->products as $value){
                    ?>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="img_feat">
                    <a href=""><img src="<?= base_url('upload/img/products/' . $value->pro_dir . '/' . @$value->image) ?>" class="w_100 rollIn wow" style="height:180px;" alt=""></a>
                  </div>
                  <div class="tt_feat">
                    <p><?=Limitstring(@$value->ten_phu_tung,15);?></p>
                    <span>Giá: <strong><?=number_format(@$value->price)?></strong> VND</span>
                  </div>
                </div>
               
                <?php }}?>
                </div> 
<?php $i++; }}?>
        
        </div>
      </section>
      <div class="clearfix"></div>

      <section id="feature">
        <div id="ts_kt" class="container">
          <div class="row">
            <div class="feat_top">
              <p>THÔNG SỐ KỸ THUẬT</p>
              <span>ĐỘNG CƠ XE VÀ KHẢ NĂNG VẬN HÀNH</span>
            </div>
            <div class="feat_mid">
              <div class="txt_feat">
       
              </div>
              <div class="mid_col_feat">
                






             <ul class="tabs1 tab_tinh_nang">
                  <?php if(isset($list_thongsokythuat)){
                    $i=1;
                    foreach($list_thongsokythuat as $value){
                    ?>
                    
                    <?php if($i==1){?>
                      <li class="tab-link current li_tinhnang" data-tab="tab_thongso_<?=$i;?>"><?=@$value->vitri;?></li>
                    <?php }else{?>
                      <li class="tab-link li_tinhnang" data-tab="tab_thongso_<?=$i;?>"><?=@$value->vitri;?></li>
                    <?php }?> 
                    <?php $i++;}}?>         
                </ul>

                <?php if(isset($list_thongsokythuat)){
                    $j=1;
                    foreach($list_thongsokythuat as $value){
                    ?>
                    <?php if($j==1){?>
                          <div id="tab_thongso_<?=$j;?>" class="tab-content1 current tabtn_1">
                    <?php }else{?>
                          <div id="tab_thongso_<?=$j;?>" class="tab-content1 tabtn_1">
                    <?php }?>  
                         <?=@$value->content;?>
                          </div>
                          <?php $j++;}}?>
                          </div>


















              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <section id="download">
        <div id="tai_cat" class="container">
          <div class="row">
            <div class="title_down">
              <p>TẢI CATALOGUE</p>
              <span>Leaflet Yatis 31052019</span>
            </div>
          </div>
        </div>
      </section>
      <section id="col_down">
        <div class="container">
          <div class="row col_bot_down">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="tt_down1">
                  <strong>Liên hệ đại lý</strong>
                  <p>PEUGEOT LONG BIÊN</p>
                  <span>Địa chỉ: 541 nguyên An Cừ, Long  Biên, Hà Nội</span><br>
                  <span>Điện thoại: 0938905072</span><br>
                  <span>Email: info@netcar.com.vn</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="tt_down">
                  <strong>Liên hệ đại lý</strong>
                  <p>PEUGEOT LONG BIÊN</p>
                  <span>Địa chỉ: 541 nguyên An Cừ, Long  Biên, Hà Nội</span><br>
                  <span>Điện thoại: 0938905072</span><br>
                  <span>Email: info@netcar.com.vn</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="tt_down">
                  <strong>Liên hệ đại lý</strong>
                  <p>PEUGEOT LONG BIÊN</p>
                  <span>Địa chỉ: 541 nguyên An Cừ, Long  Biên, Hà Nội</span><br>
                  <span>Điện thoại: 0938905072</span><br>
                  <span>Email: info@netcar.com.vn</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <section id="relate">
        <div class="container">
          <div class="row_pc">
            <div class="title_relate">
              <p>XE LIÊN QUAN</p>
            </div>
            <div class="col_relate">




            <?php if(isset($list_item)){
              foreach($list_item as $value){
              ?>
              <div class="col-lg-3 col-md-3 co-sm-3 col-xs-12">
                <div class="img_relate">
                  <a href="<?=base_url('thong-tin-xe-moi/').$value->alias?>.html"><img src="<?= base_url('upload/img/products/' . $value->pro_dir . '/' . @$value->image) ?>" class="w_100" style="height:180px;"></a>
                </div>
                <div class="txt_relate">
                  <div class="tt_relate">
                    <p><?=@$value->name;?></p>
                    <span>Giá từ: <strong><?=number_format(@$value->price);?> đ</strong></span>
                  </div>
                  <div class="box_relate">
                    <p><i class="fa fa-caret-right" aria-hidden="true"></i> Số chỗ: <span><?=@$value->so_ghe;?></span></p>
                    <p><i class="fa fa-caret-right" aria-hidden="true"></i> Vận hành: <span><?=@$value->van_hanh;?></span></p>
                    <p><i class="fa fa-caret-right" aria-hidden="true"></i> Động cơ: <span><?=@$value->dong_co;?></span></p>
                    <p><i class="fa fa-caret-right" aria-hidden="true"></i> Màu: <span><?=@$value->mau_xe;?></span></p>
                  </div>
                </div>
              </div>
              <?php }}?>






            </div>
          </div>
        </div>
      </section>  
      <div class="clearfix"></div>

      <script type="text/javascript">

$(function() {
    $(".slider_part").owlCarousel({

        items: 4,
        responsive: {
            1200: { item: 4  }, // breakpoint from 1200 up
            982: { items: 3 },
            768: { items: 1 },
            480: { items: 1 },
            0: { items: 1 }
        },
        loop: true,
        rewind: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 500, //slide speed smooth

        dots: false,
        dotsEach: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
        // navSpeed: 250, //slide speed when click button

        autoWidth: false,
        margin: 10,
    });
});

</script>


<!-- menu tab -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">

$(function() {
    $(".slider_part").owlCarousel({

        items: 4,
        responsive: {
            1200: { item: 4  }, // breakpoint from 1200 up
            982: { items: 3 },
            768: { items: 1 },
            480: { items: 1 },
            0: { items: 1 }
        },
        loop: true,
        rewind: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 500, //slide speed smooth

        dots: false,
        dotsEach: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
        // navSpeed: 250, //slide speed when click button

        autoWidth: false,
        margin: 10,
    });
});

</script>
<script type="text/javascript">

        $(function() {
            $(".slide_img_sm").owlCarousel({

                items: 4,
                responsive: {
                    1200: { item: 4  }, // breakpoint from 1200 up
                    982: { items: 3 },
                    768: { items: 2 },
                    480: { items: 1 },
                    0: { items: 1 }
                },
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 500, //slide speed smooth

                dots: false,
                dotsEach: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 10,
            });
        });
        // **********
        $(function() {
            $(".slide_img_sm2").owlCarousel({

                items: 1,
                responsive: {
                    1200: { item: 4  }, // breakpoint from 1200 up
                    982: { items: 3 },
                    768: { items: 2 },
                    480: { items: 1 },
                    0: { items: 1 }
                },
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 500, //slide speed smooth

                dots: false,
                dotsEach: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 10,
            });
        });
        // *********
        $(function() {
            $(".slide_img_sm3").owlCarousel({

                items: 1,
                responsive: {
                    1200: { item: 4  }, // breakpoint from 1200 up
                    982: { items: 3 },
                    768: { items: 2 },
                    480: { items: 1 },
                    0: { items: 1 }
                },
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 500, //slide speed smooth

                dots: false,
                dotsEach: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 10,
            });
        });
        // *********
        $(function() {
            $(".slide_img_sm4").owlCarousel({

                items: 1,
                responsive: {
                    1200: { item: 4  }, // breakpoint from 1200 up
                    982: { items: 3 },
                    768: { items: 2 },
                    480: { items: 1 },
                    0: { items: 1 }
                },
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 500, //slide speed smooth

                dots: false,
                dotsEach: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 10,
            });
        });
    </script>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Allbum nội thất</h4>
      </div>
      <div class="modal-body">
       <!-- ********** -->
       <div class="owl-carousel slide_img_sm2">
          <?php if(isset($img_noithat)){
                foreach($img_noithat as $value){
          ?>
          <?php if($value->image != ''){?>
          
              <div class="item"> 
              <div class="image_ext">
                <a href=""><img src="<?php echo base_url(@$value->image);?>" style="width:100%;height:400px;" class="image"></a>
                <div class="overlay">Allbum nội thất</div>
              </div>
            </div>
                <?php } }}?>
                </div>
       <!-- *********** -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  -->
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Allbum ngoại thất</h4>
      </div>
      <div class="modal-body">
       <!-- ********** -->
       <div class="owl-carousel slide_img_sm3">
          <?php if(isset($img_xemoi)){
                foreach($img_xemoi as $value){
          ?>
          <?php if($value->image != ''){?>
          
              <div class="item"> 
              <div class="image_ext">
                <a href=""><img src="<?php echo base_url(@$value->image);?>" style="width:100%;height:400px;" class="image"></a>
                <div class="overlay">Allbum ngoại thất</div>
              </div>
            </div>
                <?php } }}?>
                </div>
       <!-- *********** -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  -->
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Allbum tổng quan</h4>
      </div>
      <div class="modal-body">
       <!-- ********** -->
       <div class="owl-carousel slide_img_sm4">
          <?php if(isset($p_images)){
                foreach($p_images as $value){
          ?>
          <?php if($value->image != ''){?>
          
              <div class="item"> 
              <div class="image_ext">
                <a href=""><img src="<?php echo base_url(@$value->image);?>" style="width:100%;height:400px;" class="image"></a>
                <div class="overlay">Allbum tổng quan</div>
              </div>
            </div>
                <?php } }}?>
                </div>
       <!-- *********** -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>
<script>
$(document).ready(function(){
	
	$('ul.tabs1 li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs1 li').removeClass('current');
		$('.tab-content1').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>