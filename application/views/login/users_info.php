<div class="clearfix-100"></div>
<!-- main content -->

<div class="container">
<?php if(isset($_SESSION['mess'])){
  echo '
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-success"></i>'.$_SESSION['mess'].'</div>';
    unset($_SESSION['mess']);
} ?>
</div>

<main>
 


  <div class="container">
    <div class="row_pc">
      <div class="row">
        <aside class="col-md-3 col-sm-3 col-xs-12">
          <div class="detail-user">
            <img src="<?php echo base_url()?>assets/img/user.png" alt="">
            <a href="" class="personal_page">Trang cá nhân</a>
            <a href="" class="Change_avatar">Đổi avatar</a>
          </div>
        </aside>
        <section class="col-md-9 col-sm-9 col-xs-12">
          <div class="personal_information">
            <p><i class="fa fa-info" aria-hidden="true"></i> thông tin cá nhân</p>
            <form method="post" action="<?php echo base_url('login/users_info')?>" class="form_info validate">
              <div class="item_info">
                <label>Họ tên</label>
                <input type="text" value="<?=$users->full_name;?>" name="full_name" placeholder="Họ tên">
              </div>
              <div class="item_info">
                <label>Email</label>
                <input type="text" value="<?=$users->email;?>" name="email" placeholder="your-name@gmail.com">
              </div>
              <div class="item_info email-person clearfix">
                <label>Email cá nhân</label>
                <div class="choose_email">
<p><input type="checkbox" name="email_view" <?php if(isset($users->email_view) && $users->email_view == 1){echo 'checked';}?> value="1">Hiển thị</p>
<p><input type="checkbox" name="email_view" <?php if(isset($users->email_hide) && $users->email_view == 0){echo 'checked';}?> value="0">Ẩn</p>
                </div>
              </div>
              <div class="item_info">
                <label>Số điện thoại</label>
                <input value="<?=$users->phone;?>" type="text" name="phone">
              </div>
              <div class="item_info">
                <label>Địa chỉ</label>
                <input value="<?=$users->address;?>" type="text" name="address" >
              </div>
              <div class="item_info">
                <label>Ngày sinh</label>
                <input value="<?=$users->birthday;?>" type="date" name="birthday" class="validate[required]">
              </div>
              <div class="item_info item-select">
                <label>Tỉnh/Thành</label>
                <select name="city" class="form-control">
                  <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                  <option value="TP Hà Nội">TP Hà Nội</option>
                  <option value="TP Huế">TP Huế</option>
                  <option value="TP Đà Nẵng">TP Đà Nẵng</option>
                </select>
              </div>
              <div class="item_info item-select">
                <label>Quận/Huyện</label>
                <select name="huyen" class="form-control">
                  <option value="Quận 1">Quận 1</option>
                  <option value="Quận 2">Quận 2</option>
                  <option value="Quận 3">Quận 3</option>
                </select>
              </div>
              <div name="xa" class="item_info item-select">
                <label>Phường/Xã</label>
                <select name="xa" class="form-control">
                  <option value="Xã 1">Xã 1</option>
                  <option value="Xã 2">Xã 2</option>
                  <option value="Xã 3">Xã 3</option>
                </select>
              </div>
              <div class="item_info email-person clearfix">
                <label>Giới tính</label>
                <div class="choose_email">
                  <p><input type="checkbox" name="sex" <?php if(isset($users->sex) && $users->sex == 1){echo 'checked';}?> value="1">Nam</p>
                  <p><input type="checkbox" name="sex" <?php if(isset($users->sex) && $users->sex == 0){echo 'checked';}?> value="0">Nữ</p>
                </div>
              </div>
              <div class="button_save">
                <button name="save" type="submit">Lưu dữ liệu</button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>

</main>