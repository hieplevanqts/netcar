<footer id="footer">
  <div class="container">
    <div class="row_pc">
      <div class="ft_top clearfix">
        <div class="row">
          <div class="col-md-4">
            <div class="item_ft_top">
              <h2 class="title_ft">Xe mới</h2>
              <ul>
              <?php if(isset($cate_new)){
                                  foreach($cate_new as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item_ft_top">
              <h2 class="title_ft">Xe cũ</h2>
              <ul>
              <?php if(isset($cate_all)){
                                  foreach($cate_all as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc-xe-cu/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item_ft_top">
              <h2 class="title_ft">Phụ tùng</h2>
              <ul>
              <?php if(isset($phutung)){
                                  foreach($phutung as $value){
                                  ?>
                                 <li><a href="<?= base_url('danh-muc-phu-tung/'.$value->alias); ?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="ft_bottom clearfix">
        <div class="row">
          <div class="col-md-2 w_18">
            <div class="item_ft_bottom">
              <h2 class="title_ft">Liên hệ</h2>
              <div class="detail-ct">
                <p><span><i class="fa fa-map-marker" aria-hidden="true"></i> 6330 South 3000 East, Suite 700 Salt Lake City, UT 84121</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 800 123 456 789</p>
                <p><i class="fa fa-print" aria-hidden="true"></i> 800 123 456 789</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> info@taitailieu.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 w_18">
            <div class="item_ft_bottom">
              <h2 class="title_ft">Hỗ trợ khách hàng</h2>
              <ul>
                <li><a href="">Tư vấn chọn xe theo phong thủy</a></li>
                <li><a href="">Tư vấn chọn xe theo phong thủy</a></li>
                <li><a href="">Tư vấn chọn xe theo phong thủy</a></li>
                <li><a href="">Tư vấn chọn xe theo phong thủy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 w_18">
            <div class="item_ft_bottom">
              <h2 class="title_ft">Dịch vụ</h2>
              <ul>
                <li><a href="">Dịch vụ thầu</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 w_18">
            <div class="item_ft_bottom">
              <h2 class="title_ft">Kinh nghiệm</h2>
              <ul>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
                <li><a href="">Dịch vụ chăm sóc khách hàng</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 w_25">
            <div class="item_ft_bottom">
              <h2 class="title_ft">ĐĂNG KÝ NHẬN EMAIL</h2>
              <div class="form-register">
                <p>Nhập email của bạn để được nhận các thông tin mới nhất từ netcar.vn</p>
                <form class="clearfix validate">
                  <input style="color:black;" class="validate[required,custom[email]]" type="text" name="" placeholder="Nhập email ...">
                  <button>Đăng ký</button>
                </form>
                <p class="post-news"><a href=""><i class="fa fa-pencil-square" aria-hidden="true"></i> Đăng rao vặt - Mua bán</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!--  -->
      <div class="copyright">
        Copyright © 2019 Netcar.vn Design by <span>QTS</span>
      </div>

    </div>
  </div>

    <a href="#top" id="go_top"><i class="fa fa-angle-up"></i></a>

</footer><!-- footer -->


<div id="show_success_mss" style="position: fixed; top: 40px; right: 20px;z-index:9999;">
  </div>
               

  <script src="<?php echo base_url()?>assets/plugin/ValidationEngine/js/jquery.validationEngine-vi.js"
      charset="utf-8"></script>
      <script src="<?php echo base_url()?>assets/plugin/ValidationEngine/js/jquery.validationEngine.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.validate ').validationEngine();
        });
        setTimeout(function(){
          $('#show_success_mss').fadeOut().empty();
        }, 9000);
      </script>

    
   

</body>
</html>
