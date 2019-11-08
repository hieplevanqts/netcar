

<script>
$(document).ready(function(){
  $('.hangxe').change(function(){
    var id = $('.hangxe').val();
    $.post('<?php echo base_url()?>raovat/select_dongxe',{id: id},function(data){
      $('#dong_xe').html(data);
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $(".dongxe").change(function(){
    var id = $(".dongxe").val();
    $.post("<?php echo base_url()?>/raovat/select_doixe",{id: id},function(data){
      $(".doixe").html(data);
    });
  });
});
</script>
<div class="container">
<?php if(isset($_SESSION['mess_done'])){
  echo '
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-success"></i>'.$_SESSION['mess_done'].'</div>';
    unset($_SESSION['mess_done']);
} ?>
</div>
<div class="container">
<?php if(isset($_SESSION['mess'])){
  echo '
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-success"></i>'.$_SESSION['mess'].'</div>';
    unset($_SESSION['mess']);
} ?>
</div>
                              
                           

<div class="container">
  <?php if(isset($_SESSION['error'])){
    echo '
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-success"></i>'.$_SESSION['error'].'</div>';
      unset($_SESSION['error']);
  } ?>
</div>
<div class="search_form">
      <div class="container">
        <div class="row_pc">
          <div class="row">
            <div class="col-md-1 hidden-sm hidden-xs"></div>
            <div class="col-md-10 col-sm-12 col-xs-12 col-480-12">
              <div class="form_home">
                <form method="GET" action="<?php echo base_url('search/searchPro1')?>" class="search_box">
                  <div class="search-label">
                    <div class="input-group">
                        <input type="text" class="form-control input_search" name="key" placeholder="Bạn muốn tìm gì?">
                        <button name="searchpro" class="btn btn-default but_search_top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    </form>

                    <form method="POST" action="<?php echo base_url('search/filter1')?>" class="search_box">
                    <select name="hangxe" id="" class="btn-select choose_carrier hangxe">
                    <option value="">---- Hãng xe ----</option>
                      <?php if(isset($raovat_hangxe)):
                        foreach($raovat_hangxe as $value):
                        ?>
                        
                      <option value="<?=$value->id;?>"><?=$value->name;?></option>
                        <?php endforeach;
                        endif;
                        ?>
                    </select>
                    <select name="dongxe" id="dong_xe" class="btn-select Vehicles dongxe">
                      <option value="">---- Dòng xe ----</option>
                      
                    </select>
                  </div>
                  <div class="price-provincial">
                    <select name="price" id="" class="btn-select choose_price">
                    <option value="">---- Khoảng giá ----</option>
                    <?php 
                    $i= 0;
                    $j= 100000000;
                    $s= 0;
                    for($i=0;$i<10;$i++){
                      
                      ?>
                      <option value="<?=$j?>">Giá từ <?=number_format($j);?></option>
                    <?php 
                  $j +=100000000;
                 

                  }?>
                  <option value="1000000001">Trên 1,000,000,000</option>
                    </select>
                    <select name="city" id="" class="btn-select choose_city">
                    <option value="">---- Tỉnh/TP ----</option>
                      <?php if(isset($city)):
                        foreach($city as $value):
                        ?>
                      <option value="<?=$value->name;?>"><?=$value->name;?></option>
                        <?php endforeach;
                        endif;
                        ?>
                    </select>
                  </div>
                  <div class="date-status">
                    <select name="status" id="" class="btn-select choose_Status">
                    <option value="">---- Tình trạng xe ----</option>
                      <option value="1">Mới</option>
                      <option value="0">Qua sử dụng</option>
                     
                    </select>
                    <select name="nam_sx" id="" class="btn-select year_manufacture">
                    <option value="">---- Năm sản xuất ----</option>
                      <?php $i = 1950;
						$now = getdate(); 
						for($i = 1950;$i <=$now["year"];$i++){
						?>
                      <option value="<?=$i;?>"><?=$i;?></option>
            <?php }?>
                    </select>
                  </div>
                 
                <div class="button-search">
                  <button style="margin-left: 50px;margin-top:25px;background-color:#ce791e;border-color:white" name="search_filter" class="btn btn-primary">Tìm kiếm</button>
                  </div>
              </div>
              </form>
                
              <!--/search theo danh mục-->

            </div>
            <div class="col-md-1 hidden-sm hidden-xs"></div>
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
          <div class="car_new clearfix">
            <div class="title_car_new clearfix">
              <ul class="tree_direct_car">
                <li><a href="">Xe dành cho bạn</a></li>
                <li>Xe mới nhất</li>
              </ul>
              <div class="display_type">
                <p>Kiểu hiển thị:</p>
                <p><i class="fa fa-th-large" aria-hidden="true"></i></p>
                <p><i class="fa fa-th-list" aria-hidden="true"></i></p>
              </div>
            </div>
            <!--  -->
            <div class="list-new-car clearfix">
              
              <?php if(isset($lists)):
                foreach($lists as $value):
                ?>
                <div class="box-new-car">
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-480-12">
                    <div class="img_new_car">
                      <a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><img src="<?php if(isset($value->image)){echo base_url().$value->img_dir.$value->image;}?>"></a>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-480-12">
                    <div class="text-new-car">
                    <h2><a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><i class="fa fa-star" aria-hidden="true"></i> <?=$value->name?></a></h2>
                    
                    <div class="detail-new-car">
                      <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                <?php if($value->status == 1):?><p><i class="fa fa-info-circle" aria-hidden="true">Mới (Chưa bóc tem) </i> </p><?php endif;?>
                <?php if($value->status != 1):?><p><i class="fa fa-info-circle" aria-hidden="true">Qua sử dụng </i> </p><?php endif;?>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?=$value->nam_san_xuat;?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$value->xuat_xu;?> </p>
                            <p><i class="fa fa-car" aria-hidden="true"></i> <?php if(isset($dong_xe->name)){echo $dong_xe->name;}?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                            <p><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$value->hop_so;?></p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?=$value->nhien_lieu;?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div style="width: 100%;" class="detail-car-number">
                          
                          <?php if($value->price < 999000000):?>
                          <p><?=number_format($value->price);?> Triệu</p>
                <?php endif;?>
                <?php if($value->price >= 1000000000):?>
                          <p><?=number_format($value->price/1000000000);?> Tỷ</p>
                <?php endif;?>
                            <p name="create_at" class="date"><?=$value->create_at;?></p>
                          </div>
                        </div>
                      </div>
                      <div class="add-phone">
                        <p>Hà Nội</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <?=$value->phone_nguoi_ban;?></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
                <?php endforeach; endif;?>
              
            
            </div>
            <!--  -->
            <?php echo $this->pagination->create_links();?>
            <div class="clearfix"></div>
            <!--  -->
            <div class="coming_soon clearfix">
              <div class="title-coming-soon clearfix">
                <h2>Xe sắp ra mắt</h2>
                <p><a href="">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
              </div>
              
              <div class="row row-flex">
                <?php if(isset($list_sap_ra_mat)):
                  foreach($list_sap_ra_mat as $value):
                  ?>
                <div class="col-md-4 col-sm-4 col-xs-6 col-480-12">
                  <div class="box-coming-soon">
                    <a href="<?php echo base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><img src="<?php echo base_url().$value->img_dir.$value->image;?>"></a>
                    <div class="text-coming-soon">
                      <p class="title"><a href="<?php echo base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><?=$value->name?></a></p>
                      <p class="price">Giá từ: <span><?=number_format($value->price)?></span></p>
                      <p class="add-time"><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$value->tinh_thanh_pho;?> <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$value->create_at;?></span></p>
                    </div>
                  </div>
                </div>
                  <?php endforeach;
                  endif;
                  ?>
              </div>
            </div>
            <!--  -->
          </div>
        </section>
      </div>
    </div>
  </div>

</main>