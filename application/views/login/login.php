<!-- menu main -->
    <div class="clearfix"></div>
        <!--search theo danh mục-->
    <div class="banner_register">
      <div class="owl-carousel slider_resgister">
        <div class="item">
            <a href=""><img src="<?php echo base_url()?>assets/img/banner.png" alt=""></a>
        </div>
        <div class="item">
            <a href=""><img src="<?php echo base_url()?>assets/img/banner.png" alt=""></a>
        </div>
        <div class="item">
            <a href=""><img src="<?php echo base_url()?>assets/img/banner.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

</header><!-- /.header content -->
<div class="clearfix-30"></div>
<!-- main content -->
<main>
 
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
  <div class="container">
    <div class="row_pc">
      <div class="row flex-reverse">
        <div class="col-md-6">
          <div class="box-register">
            <div class="text-register">
              <p>Xin chào !</p>
              <p>Để có thể đăng nhập tại netcar.vn bạn vui lòng đăng ký tài khoản hoặc đăng nhập bằng goole hoặc face</p>
            </div>
            <form class="form-register validate" method="post" action="<?php echo base_url('login')?>">
              <div class="item-register">
                <label>Điện thoại</label>
                <input class="validate[required]" type="number" name="phone">
              </div>
              <div class="item-register">
                <label>Email</label>
                <input class="validate[required,custom[email]]" type="email" name="email">
              </div>
              <div class="item-register">
                <label>Mật khẩu</label>
                <input class="validate[required]" type="password" name="password">
              </div>
              <div class="item-register">
                <label></label>
                <button name="dang_nhap" class="button-res">Đăng nhập</button>
                <button class="forget-pass">Quên mật khẩu</button>
              </div>
              <div class="item-register item-another-account">
                <label></label>
                <div class="another_account">
                  <p>Đăng nhập với tài khoản khác</p>
                  <a href="" class="acc-gg"><i class="fa fa-google-plus" aria-hidden="true"></i> Google</a>
                  <a href="" class="acc-fb"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                </div>
                
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box-register">
            <div class="text-register">
              <p>Tạo tài khoản</p>
              <p>ạn sẽ nhận được email từ raovat.com để kích hoạt tài khoản vui lòng kiểm tra email mà bạn đã đăng ký kích hoạt trước khi sử dụng</p>
            </div>
            <form class="form-register validate" method="post" action="<?php echo base_url('users_frontend/createpost')?>" >
              <div class="item-register">
                <label>Tên liên hệ</label>
                <input class="validate[required]" type="text" name="full_name">
              </div>
              <div class="item-register">
                <label>Email</label>
                <input class="validate[required,custom[email]]" type="text" name="email">
              </div>
              <div class="item-register">
                <label>Điện thoại</label>
                <input class="validate[required]" type="text" name="phone">
              </div>
              <div class="item-register">
                <label>Mật khẩu</label>
                <input class="validate[required]" type="text" name="password">
              </div>
              <div class="item-register">
                <label>Nhập lại</label>
                <input class="validate[required]" type="text" name="re_password">
              </div>
              <div class="item-register">
                <label></label>
                <button class="button-res" name="dang_ky" type="submit">Đăng ký</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<div class="clearfix-50"></div>