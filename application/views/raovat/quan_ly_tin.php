<div class="clearfix-100"></div>
<!-- main content -->
<main>
  <div class="container">
    <div class="row_pc">
      <div class="detail-user clearfix manage_postings">
        <img src="<?php echo base_url()?>assets/img/user.png" alt="">
        <div class="see_personal_page">
          <h2><?php if(isset($user_info->full_name)){echo $user_info->full_name;}?> </h2>
          <p><a href="<?php echo base_url('user-info')?>">Xem trang cá nhân của bạn</a></p>
        </div>
      </div>
      <div class="personal_information clearfix postings_manage">
        <p><i class="fa fa-folder-open" aria-hidden="true"></i> Quản lý tin đăng</p>
        <div class="menutab_posting_manage">
           <!-- Nav tabs -->
          <ul class="clearfix">
            <li class="active">
              <a class=" " data-toggle="tab" href="#home">Đang bán (6)</a>
            </li>
            <li class="">
              <a class="" data-toggle="tab" href="#menu1">Bị từ chối (0)</a>
            </li>
            <li class="">
              <a class="" data-toggle="tab" href="#menu2">Tin đã cũ (5)</a>
            </li>
            <li class="">
              <a class="" data-toggle="tab" href="#menu3">Tin đã duyệt (15)</a>
            </li>

          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="home" class=" tab-pane active">
              <?php if(isset($lists)):
                foreach($lists as $value):
                ?>
              <div class="box-pro clearfix">
                <a href="<?php echo base_url('bai-dang-chi-tiet/').$value->alias;?>.html"><img src="<?php echo base_url().$value->img_dir.$value->image;?>"></a>
                <div class="text-box-pro">
                  <h2><a href="<?php echo base_url('bai-dang-chi-tiet/').$value->alias;?>.html"><?=$value->name;?></a></h2>
                  
                  <?php if($value->price < 999000000):?>
                          <p class="price"><?=number_format($value->price);?> Triệu</p>
                <?php endif;?>
                <p><a href="<?php echo base_url('sua-tin-rao/').$value->id;?>"  class="btn btn-primary">Sửa</a></p>
                <?php if($value->price >= 1000000000):?>
                          <p class="price"><?=number_format($value->price/1000000000);?> Tỷ</p>
                <?php endif;?>
                <a onclick="return confirmAction()" href="<?php echo base_url('xoa-tin-rao/').$value->id;?>" style="float:right;margin-left:5px;" class="btn btn-danger">Xóa</a>
                
                
                  <p><i class="fa fa-eye" aria-hidden="true"></i> <?=$value->view;?> <span><?=$value->create_at;?></span></p>
                </div>
              </div>
                <?php endforeach;
                endif;
                ?>
                
            </div>
            
            
            <div id="menu1" class=" tab-pane fade">
              <h3>Menu 1</h3>
              <p>Đang cập nhật.Vui lòng quay lại sau...!</p>
            </div>
            <div id="menu2" class=" tab-pane fade">
              <h3>Menu 2</h3>
              <p>Đang cập nhật.Vui lòng quay lại sau...!</p>
            </div>
            <div id="menu3" class=" tab-pane fade">
              <h3>Menu 3</h3>
              <p>Đang cập nhật.Vui lòng quay lại sau...!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php echo $this->pagination->create_links();?>
  </div>
 
</main>
<div class="clearfix-50"></div>
<script LANGUAGE="JavaScript">
      function confirmAction() {
        return confirm("Bạn có chắc chắn xóa không ?")
      }
 
</script>