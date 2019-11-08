


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
    <link href="<?php echo base_url()?>assets/css/front_end/common.css" rel="stylesheet"/>
    <link href="<?php echo base_url()?>assets/css/front_end/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url()?>assets/css/front_end/setmedia.css" rel="stylesheet"/>
	<link href="<?php echo base_url()?>assets/plugin/ValidationEngine/css/validationEngine.jquery.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/front_end/common.js"></script>

    
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
        <a href="" class="logo_mb"><img class="img_logo_mb" src="<?php echo base_url()?>assets/img/logo.png" alt=""/></a>
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
        </div><!-- /search mobile -->
    </div><!-- /menu_mb -->
    <div class="clearfix clearfix-60 visible-sm visible-xs"></div>
    <div class="menu_header sticky-header">
      <div class="container">
        <div class="row_pc">
          <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs">
              <a href="<?php echo base_url()?>" class="logo_pc">
                <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
              </a>
            </div>
            <div class="col-md-10 col-xs-12">
              <!-- menu main -->
              <div class="menu_main">
                  <nav class="nav is-fixed">
                      <div class="nav-container">
                          <ul class="nav-menu menu clearfix">
                              <li class="menu-item is-active"><a href="" class="menu-link search"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</a></li>
                              <li class="menu-item"><a href="" class="menu-link"><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</a></li>
                              <?php if(isset($user_info->id)){?>
                              <li class="menu-item designerqts">
                              
                                <a href="#" class="menu-link "><i class="fa fa-user" aria-hidden="true"></i> designerqts</a>
                                <ul class="menu-child">
                                  <li><a href="<?php echo base_url('user-info')?>"><i class="fa fa-user" aria-hidden="true"></i> Thông tin cá nhân</a></li>
                                  <li><a href="<?php echo base_url('quan-ly-tin')?>"><i class="fa fa-folder-open" aria-hidden="true"></i> Quản lý tin đăng</a></li>
                                  <li><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i> Tin lưu trữ</a></li>
                                  <li><a href="<?=base_url('login/dang_xuat')?>"><i class="fa fa-share-square-o" aria-hidden="true"></i> Thoát tài khoản  </a></li>
                                </ul>
                              </li>

                              <?php }else { ?>
<li class="menu-item"><a href="<?=base_url('login')?>" class="menu-link"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></li>
 <?php
}?>    
                              <li class="menu-item"><a href="#" class="menu-link "><i class="fa fa-users" aria-hidden="true"></i> Hướng dẫn</a></li>
                              <li class="menu-item"><a href="<?php echo base_url('tin-dang')?>" class="menu-link "><i class="fa fa-pencil-square" aria-hidden="true"></i> Đăng tin</a></li>
                          </ul>
                      </div>
                  </nav>
              </div><!-- menu main -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="tree_directory">
      <div class="container">
        <div class="row_pc">
          <ul class="tree_direct">
            <li><a href="<?php echo base_url()?>">Trang chủ</a></li>
            <li class="active"><a href="<?php echo base_url('tin-dang')?>">Đăng tin</a></li>
<?php if(isset($user_info->id)):?>  <li class="menu-item" ><a href="" class="menu-link "> Xin chào <?=$user_info->email;?></a>  </li> <?php endif;?>
          </ul>
        </div>
      </div>
    </div><!-- menu main -->
    <div class="clearfix"></div>
        <!--search theo danh mục-->
</header><!-- /.header content -->