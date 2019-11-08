<div id="ajax_loader" class="ajax-load-qa">&nbsp;</div>

<script type="text/javascript" src="http://skyquangchau.com/assets/js/front_end/jquery.2.1.1.min.js"></script>

<script type="text/javascript" src="http://skyquangchau.com/assets/js/front_end/bootstrap.min.js"></script>

<script type="text/javascript" src="http://skyquangchau.com/assets/js/front_end/menu-2.js"></script>

<script type="text/javascript" src="http://skyquangchau.com//assets/js/jquery.keyframes.min.js"></script>



<!-- <script>
$(document).ready(function(){
  $(".btn-addcart").onclick(function(){
     alert('abc');
   //  var id = $(".btn-addcart").val();
   //  alert(1);
   //  $.post("<?php echo base_url()?>/cart/addCartItemSelect",{id: id},function(data){
   //    $("#ajax_loader").html(data);
   //  });
  });
});
</script> -->

      
  <!-- /.header content -->
  <div class="clearfix"></div>
      <div class="introduct_breadcrum">
         <div class="container">
            <div class="row_pc">
               <div class="breadcrum">
                  <a href="<?php echo base_url()?>">Trang chủ</a> 
                  <a href="<?php echo base_url('tat-ca-phu-tung')?>">Phụ tùng</a>
                  <a href="#">Chi tiết</a>
               </div>
            </div>
         </div>
      </div>
      <!-- main content -->
      <main>
         <div class="container">
         <div class="row_pc">
         <div class="row flex-reverse">
         <aside class="col-md-3 col-xs-12 bounceInDown wow">
            <!-- mmmmmmmmmmmmmmmmm    menu -->
            <?=$menu_left?>
            <!--  -->
            <div class="qcCarold">
               <p>Banner Quảng cáo xe cũ</p>
            </div>
            <div class="qcCarold">
               <p>Xe cũ</p>
            </div>
         </aside>
         <section class="col-md-9 col-xs-12">
            <div class="row">
               <div class="content--left">
                  <div class="clearfix"></div>
                  <section class="qts_left_content flipInX wow">
                     <input type="hidden" id="__VIEWxSTATE"/>
                     <script src="<?php echo base_url()?>assets/js/front_end/modernizr.custom.js" type="text/javascript"></script>
                     <link href="<?php echo base_url()?>assets/css/front_end/glasscase.minf195.css" rel="stylesheet" />
                     <ul id='zoom1' class='gc-start'>
                        <?php if(isset($p_images)){
                           $i=1;
                           foreach($p_images as $value){
                           ?>
                        <li><img src="<?=base_url($value->image)?>" alt='image<?=$i;?>' /></li>
                           <?php $i++;}}?>
                     </ul>
                     <script src="<?php echo base_url()?>assets/js/front_end/jquery.glasscase.minf195.js"></script>
                     <script type="text/javascript">
                        $(function () {
                        //ZOOM
                        $("#zoom1").glassCase({
                        'widthDisplay': 590,
                        'heightDisplay': 300,
                        'nrThumbsPerRow': 4,
                        'isSlowZoom': true,
                        'colorIcons': '#F15129',
                        'colorActiveThumb': '#F15129'
                        
                        });
                        });
                     </script>
                  </section>
                  <section class="qts_mid_content">
                     <div class="text-detail-car title_ditel lightSpeedIn wow">
                        <h2><?=$item->ten_phu_tung;?></h2>
                        <p class="price-car"><?=number_format($item->price);?> VND</p>
                        <p><span>Thương hiệu: </span> <?php if(isset($hangxe->name)){echo $hangxe->name;}?></p>
                        <p id="item_select_id" value="<?=$item->id?>" ><span>Xuất xứ: </span><?php if(isset($xuatxu->name)){echo $xuatxu->name;}?></p>
                        <p><span>Bảo hành: </span> <?php if(isset($item->bao_hanh)){echo $item->bao_hanh;}?></p>
                        <p><span>Loại xe: </span> <?php if(isset($dongxe->name)){echo $dongxe->name;}?></p>
                        <span>
                        
                        <a href="<?php echo base_url('gio-hang/').$item->id?>" class="btn-addcart cart" value="<?=$item->id?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Giỏ hàng</a>
                        <a href="<?php echo base_url('gio-hang/').$item->id?>" class="ordered"><i class="fa fa-usd" aria-hidden="true"></i>Đặt mua</a>
                        </span>
                     </div>
                  </section>
               </div>
               <!--  -->
               <div class="menutab-car-new">
                  <!-- Nav tabs -->
                  <ul class="clearfix" role="">
                     <li class="active">
                        <a class="" data-toggle="tab" href="#home">Thông số kỹ thuật</a>
                     </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div id="home" class=" tab-pane active">
                        <br>
                        <div class="detail-tab-ct">
                           <?=$item->description;?>
                        </div>
                     </div>
                     <div id="menu1" class=" tab-pane fade">
                        <br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                     </div>
                     <div id="menu2" class=" tab-pane fade">
                        <br>
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                     </div>
                     <div id="menu3" class=" tab-pane fade">
                        <br>
                        <h3>Menu 3</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <section class="col-md-12 col-xs-12">
               <div class="carFeatured">
                  <div class=" heard_title_xecu">
                     <h3 class="tit_dielet"><a href="">Sản phẩm Liên quan</a></h3>
                  </div>
                  <div class="clearfix-30"></div>
                  <div class="boxCarnew bounceInDown wow">
                     <div class="newCars_phutung clearfix">
                        <?php if(isset($list_lienquan)){
                           foreach($list_lienquan as $value){
                           ?>
                        <div class="col-md25-4 col-xs-6 col-480-12 pdd_7 ">
                           <div class="box_prd_mid">
                              <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html" class="img_prd reRenderImg"><img src="<?php echo base_url('upload/img/products/'.$value->pro_dir.'/'.$value->image);?>" class="w_100" style="height: 200px;" alt=""></a>
                              <h3 class="name_prd">
                                 <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html"><?=Limitstring($value->ten_phu_tung,20)?></a>
                              </h3>
                              <span class="price">Giá: <small><?=number_format($value->price);?> đ</small></span>
                              <!-- <span class="size">Liên hệ: </span> -->
                              <div class="btn_buy">
                                 <a href="<?php echo base_url('chi-tiet-phu-tung/').$value->alias;?>.html">Chi tiết</a>
                              </div>
                           </div>
                        </div>
                           <?php }}?>
                       
            </section>
         </section>
         <div class="clearfix"></div>


         </div>
         </div>
         </div>
      </main>
      
<script>
   function addToCart(){
var id = $('#item_select_id').val();
        $.ajax({
            url:base_url() + 'cart/addCartItemSelect',
            type:"POST",
            dataType:"html",
            data:{id:id},
            beforeSend:function(){
                $("#myModal").remove();
                $('body').append('<div id="ajax_loader" class="ajax-load-qa">&nbsp;</div>');
            },
            success:function(res){
                viewCart();
                $('body').append(res);
                $("#myModal").modal();
            },
            complete: function() {
                $('#ajax_loader').remove();
            }
        });
    }
</script>

