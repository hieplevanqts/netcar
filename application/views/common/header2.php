<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?=$this->option->site_name;?></title>
      <link href="<?php echo base_url()?>assets/css/front_end/bootstrap.min.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/font-awesome.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/animate.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/owl.carousel.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/common2.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/style2.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/setmedia2.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/plugin/ValidationEngine/css/validationEngine.jquery.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/css/front_end/style123.css" rel="stylesheet"/>

      <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/owl.carousel.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/common2.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/wow.min.js3"></script>
      <script>
         new WOW().init();
      </script>

<script type="text/javascript" src="<?=base_url()?>assets/js/init.js"></script>
    <input type="hidden" value="<?=base_url()?>" id="base_url" name="">
   </head>
   <body>
      <!-- header content-->
      <header class="header">
         <div class="menu_mb visible-xs visible-sm ">
            <button class="nav-toggle">
            <span></span>
            </button>
            <a href="<?php echo base_url()?>" class="logo_mb"><img class="img_logo_mb" src="<?php echo base_url()?>assets/img/logo_03.gif" alt=""/></a>
            <!-- search mobile -->
            <div class="search_drop">
               <a href="" class="btn_search"><i class="fa fa-search"></i></a>
               <form class="form_search">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Tìm kiếm...">
                     <span class="input-group-btn">
                     <button class="btn btn-default" type="button">Tìm kiếm</button>
                     </span>
                  </div>
               </form>
            </div>
            <!-- /search mobile -->
         </div>
         <!-- /menu_mb -->
         <div class="clearfix clearfix-60 visible-sm visible-xs"></div>
         <section class="qts_head_top">
            <div class="container">
               <div class="row_pc">
                  <div class="pull-left slogan hidden-sm hidden-xs">
                     <h2>ĐẠI LÝ UỶ QUYỀN Netcar.vn</h2>
                  </div>
                  <div class="pull-right">
                     <div class="contact_top hidden-xs">
                        <a href="">
                        <i class="fa fa-phone"></i><span><?=$this->option->hotline1?></span>  -  <span class="text_name">Mr Việt:</span> <?=$this->option->hotline2?> 
                        </a>
                        <a href="">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>Chăm sóc khách hàng 
                        </a>
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Bản đồ chỉ đường
                        </a>
                        <a href="" class="btn_search"><img src="<?php echo base_url()?>assets/img/sear.gif"></a>
                        <form class="form_search">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Tìm kiếm...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Tìm kiếm</button>
                              </span>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="clearfix"></div>
         <section class="qts_head">
            <div class="head_top">
               <div class="container">
                  <div class="row_pc">
                     <div class="row">
                        <div class="col-md-2">
                           <div class="logo_pc hidden-sm hidden-xs logo_car_old">
                              <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/img/logo_03.gif" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-2 hidden-sm hidden-xs">
                           <div class="form_search form_search_header" method="get">
                              <form action="<?=base_url('search/searchPro')?>">
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="s" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                 </div>
                                 <!-- /input-group -->
                              </form>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <!-- menu main -->
                           <div class="menu_main menu_main_netcar">
                              <nav class="nav is-fixed">
                                 <div class="nav-container">
                                 <ul class="nav-menu menu clearfix">                    
                     <?php if (count($menu_main_root)) : ?>
                      <?php foreach ($menu_main_root as $key_r => $mr) : ?>   
                      <?php if((count($mr->menu_sub))){ ?>
                        <li class="menu-item has-dropdown"><a href="<?= base_url($mr->url); ?>" class="menu-link "><?= @$mr->name; ?> </a>
                      
                      <?php }else{?>
                        <li class="menu-item"><a href="<?= base_url($mr->url); ?>" class="menu-link "><?= @$mr->name; ?> </a>
                      <?php }?>                  
                 
            <?php if (count($mr->menu_sub)): ?>

                   <ul class="<?php if(!empty($mr->menu_sub)): ?> nav-dropdown <?php endif;?>  menu">                    
                     <?php foreach ($mr->menu_sub as $key => $menu_sub) { ?>
                     <li class="menu-item"> <a href="<?= base_url($menu_sub->url)?>" class="menu-link"><?= $menu_sub->name?></a></li>
                     <?php } ?> 
                   </ul>
                   <?php endif ?> 
                 </li>
                   <?php endforeach; ?>
                      <?php endif; ?>                                      
               </ul>
                                 </div>
                              </nav>
                           </div>
                           <!-- menu main -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="clearfix"></div>
         <div class="clearfix"></div>
         <!--slide-->
         <div class="owl-carousel slider_main">
            <div class="item">
               <a href=""><img src="<?php echo base_url()?>assets/img/slider.png" alt=""></a>
            </div>
            <div class="item">
               <a href=""><img src="<?php echo base_url()?>assets/img/slider.png" alt=""></a>
            </div>
         </div>
      </header>