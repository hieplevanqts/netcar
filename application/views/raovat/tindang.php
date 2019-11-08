

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

<script>
     function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#chooseFile_one').click();
		    });
		});

    </script>

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
  $( "#chooseFile_one" ).validate({
    rules: {
        myselect: { required: true }
    }
});
</script>



<div class="clearfix-100"></div>
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
<input type="hidden" value="<?=base_url();?>" id="url_redriect">
  <form action="<?= base_url('raovat/add_raovat')?>" method="post" enctype="multipart/form-data" id="register_user_frm" class="validate" name="form_u_register">
  <input type="hidden" name="token" value="<?=$form_key;?>" />
  <div class="container">
      <div class="row mar-15">
        <p class="titile_post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng tin mua bán</p>
        <div class="col-md-8 w_670">
          <div class="personal_information Post_purchase_info">
            <form class="form_info">
              <div class="row">
              <p style="color:blue;font-size: 12px;"><i>Vui lòng chọn theo thứ tự: Hãng xe -> Dòng xe -> Đời xe </i></p>
              <p style="color:blue;font-size: 12px;"><i>Những mục còn lại chọn mục nào trước cũng được ! </i></p>
                <div class="col-md-6">
                  <div class="item_info item-post">
 
                    <label>Hãng xe (*)</label>
                    <select id="hang_xe" class="form-control hangxe" name="hang_xe">
                    <option value="">--Chọn hãng xe--</option>
					<?php if(isset($raovat_hangxe)):
						foreach($raovat_hangxe as $value):
						?>
                      <option value="<?=$value->id;?>"><?=$value->name;?></option>
						<?php endforeach;
								endif;
						?>
                    </select>
                  </div>

                  <div class="item_info item-post">
                    <label>Năm sản xuất (*)</label>
                    <select name="nam_san_xuat" class="form-control">
						<?php $i = 1950;
						$now = getdate(); 
						for($i = 1950;$i <=$now["year"];$i++){
						?>
                      <option value="<?=$i;?>"><?=$i;?></option>
                     
						<?php }?>
                    </select>
                  </div>
                  <div class="item_info item-post item-post-label">
                    <label>Phiên bản (*)</label>
                    <input class="validate" type="text" name="version">
                  </div>
                  <div class="item_info item-post">
                    <label>Tình trạng (*)</label>
                    <select name="status" class="form-control">
                      <option>Chọn</option>
                      <option value="1">Mới cứng</option>
                      <option value="0">Qua sử dụng</option>
                    </select>
                  </div>
                  <div class="item_info item-post">
                    <label>Dáng xe</label>
                    <select class="form-control" name="dang_xe">
                      <option>Chọn</option>
                      <option value="Cổ điển">Cổ điển</option>
					  <option value="Cổ điển">Thể thao</option>
					  <option value="Cổ điển">Hiện đại</option>
                    </select>
                  </div>
                  <div class="item_info item-post price_posst">
                    <label>Giá bán (*)</label>
                    <input class="validate" type="text" name="price">
                    <p>(triệu đồng)</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="item_info item-post">
                    <label>Dòng xe (*)</label>
                    <select id="dong_xe" class="dongxe form-control" name="dong_xe">
					  <option value="">--Chọn dòng xe--</option>
					  
					
                    </select>
                  </div>
                  <div class="item_info item-post">
                    <label>Đời xe</label>
					<select name="doi_xe" class="form-control doixe">
				
                  <option value="">--- Chọn đời xe ---</option>
        
                      
                     
						
                    </select>
                  </div>
                  <div class="item_info email-person clearfix item-post">
                    <label>Xuất xứ (*)</label>
                    <select name="xuat_xu" class="form-control">
                      <option value="">Chọn</option>
                      <?php if(isset($list_xuatxu)){
                        foreach ($list_xuatxu as $value2) { ?>
                          <option value="<?=$value2->name;?>"><?=$value2->name;?></option>

                          <?php
                        }}
                        ?>
                      
					
                    </select>
                  </div>
                  <div class="item_info item-post">
                    <label>Màu ngoại thất</label>
                    <select class="form-control" name="mau_ngoai_that">
                      <option value="">Chọn</option>
                      <option value="Trắng">Trắng</option>
                      <option value="Đen">Đen</option>
                      <option value="Đỏ">Đỏ</option>
                      <option value="Xanh">Xanh </option>
                      <option value="Khác">Khác</option>              
                    </select>


                  </div>
                  <div class="item_info item-post">
                    <label>Màu nội thất</label>
                    <select class="form-control" name="mau_noi_that">
                      <option>Chọn</option>
                      
                      <option>Trắng</option>
					  <option>Đen</option>
					  <option>Đỏ</option>
					  <option>Xanh </option>
					  <option>Khác</option>
                    </select>
                  </div>
                  <div class="item_info item-post item-post-label">
                    <label>Số km đã đi (*)</label>
                    <input class="validate[required]" type="text" name="km_dadi">
                  </div>
                </div>
              </div>
              <div class="item_info item-select title_post">
                <label>Tiêu đề (*)</label>
                <input class="validate" type="text" name="name">
              </div>
              <div class="item_info item-select">
                <label>Nội dung (*)</label>
                <div class="content_post" >
                <script src="<?php echo base_url()?>assets/ckeditor2/ckeditor.js"></script>
                
                  <textarea id="ckeditor_description" name="description" cols="10" rows="5" placeholder="Mô tả chi tiết về xe được rao bán kèm các ưu đãi khác (nếu có)"></textarea>
                  <p>0/3000 kí tự. Nhập tối thiểu 200 kí tự</p>
                  <script>CKEDITOR.replace('ckeditor_description');</script>
                </div>
              </div> 
            
          </div>

          <!--  -->
          <div class="detail-left">
            <h2>Thông số cơ bản</h2>
            <div class="row">
                <div class="col-md-6">
                  <div class="item_info">
                    <label>Số cửa</label>
                    <input class="validate" type="text" name="so_cua">
                  </div>
                  <div class="item_info">
                    <label>Hộp số</label>
                    <select name="hop_so" class="form-control">
                      <option value="">Chọn</option>
                      <option value="Hộp số sàn">Hộp số sàn</option>
                      <option value="Hộp số tự động">Hộp số tự động</option>
                    </select>
                  </div>
                  <div class="item_info email-person clearfix">
                    <label>Nhiên liệu</label>
                    <select name="nhien_lieu" class="form-control">
                      <option value="">Chọn</option>
                      <option value="Xăng">Xăng</option>
                      <option value="Dầu">Dầu</option>
                      <option value="Dầu">Điện</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="item_info">
                    <label>Số chỗ ngồi</label>
                    <input class="validate" type="text" name="so_ghe_ngoi">
                  </div>
                  <div class="item_info">
                    <label>Dẫn động</label>
                    <select name="dan_dong" class="form-control">
                      <option value="">Chọn</option>
                      <option value="Dẫn động 1 cầu">Dẫn động 1 cầu</option>
                      <option value="Dẫn động 2 cầu">Dẫn động 2 cầu</option>
                    </select>
                  </div>
                  <div class="item_info email-person clearfix">
                    <label>Mức tiêu thụ</label>
                    <div class="consumption_pots">
                      <input type="text" name="muc_tieu_thu_do_thi">
                      <p>(đô thị)</p>
                    </div>
                  </div>
                  <div class="item_info">
                    <label>Mức tiêu thụ</label>
                    <div class="consumption_pots">
                      <input class="validate" type="text" name="muc_tieu_thu_duong_truong">
                      <p>(đường trường)</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!--  -->
          <div class="detail-left clearfix">
            <h2>Hình ảnh <span>(Vui lòng không chèn thêm link của bất kỳ website nào khác)</span></h2>
            <div class="img_post">
              <p>Ảnh đầu tiên sẽ là đại diện cho tin của bạn (*)</p>
              <div class="list_img_post">
                <ul class="">
                  <!-- <li >
                    <div class="box_img_post">
                      <img src="<?php echo base_url()?>assets/img/car.png" alt="">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm hình</div>
                          <input type="file" name="chooseFile" id="chooseFile">
                        </div>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li >
                    <div class="box_img_post">
                      <img src="<?php echo base_url()?>assets/img/car.png" alt="">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm hình</div>
                          <input type="file" name="chooseFile" id="chooseFile">
                        </div>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li >
                  
                    <div class="box_img_post">
                      <img src="<?php echo base_url()?>assets/img/car.png" alt="">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm hình</div>
                          <input type="file" name="chooseFile" id="chooseFile">
                        </div>
                      </div>
                    </div>
                  </li> -->
                  <li >
                    <div class="box_img_post">
                      <img id="avatar" src="<?php echo base_url()?>assets/img/car.png" alt="">
                      <div class="file-upload">
                        <div class="file-select">
                          <div style="color:red;" class="file-select-button" id="fileName"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm avatar</div>
                          <input type="file" name="chooseFile_one" id="chooseFile_one" onchange="changeImg(this)">
                        </div>
                      </div>
                    </div>
                  </li>

<div class="img_post">
              
              <div class="list_img_post">
                  <script type="text/javascript">
var count =0;
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {

      var files = e.target.files,
        filesLength = files.length;
        console.log(filesLength);
        count++;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<li class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"removeImg\">x</span>" +
            "</li>").insertAfter("#files");
          $(".removeImg").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>


<!-- <form id="imageform" method="post" enctype="multipart/form-data" action="upload.php">
 -->  <div class="field " align="left">
      <input style="padding-left:30px;" type="file" id="files" name="files[]" multiple/>
    </div>
    <!-- <input type="submit" name="submit" value="Submit"> -->
<!-- </form>
 -->                </ul>
              </div>
            </div>
          </div>
<!-- 
                  <li class="post_img">
                    <div class="box_img_post">
                      <p><i class="fa fa-camera-retro" aria-hidden="true"></i></p>
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName">Tải ảnh lên</div>
                          <input type="file" multiple name="files[]" id="files" > 
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->

          <!--  -->
          <div class="detail-left clearfix">
            <h2>Thông tin liên lạc</span></h2>
            <div class="ct_post">
              <div class="row">
                <div class="col-md-6">
                  <div class="item_info">
                    <input class="validate[required]" type="text" name="ten_nguoi_ban" placeholder="Tên người bán (*)">
                  </div>
                  <div class="item_info">
                    <input class="validate[required,custom[number]]" type="text" name="phone_nguoi_ban" placeholder="Điện thoại (*)">
                  </div>
                  <div class="item_info email-person clearfix">
                    <select name="tinh_thanh_pho" class="form-control">
                      <option value="">Tỉnh/ Thành phố (*)</option>
                      <option value="Hà Nội">TP Hà nội</option>
                      <option value="Hồ Chí Minh">TP Hồ Chí Minh</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="item_info">
                    <input class="validate[required]" type="text" name="dia_chi" placeholder="Địa chỉ">
                  </div>
                  <div class="item_info">
                    <input class="validate[required,custom[email]]" type="email" name="email_nguoi_ban" placeholder="Email">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="detail-left">
            <h2>Thời gian đăng</span></h2>
            <div class="time_post">
              <div class="start_post">
                <div class="item_time_post">
                  <label for="">Bắt đầu (*)</label>
                  <input name="time_start" type="date">
                </div>
                <div class="item_time_post">
                  <label for="">Kết thúc (*)</label>
               <input name="time_end" type="date">
                </div>
                <div class="item_time_post">
                  <p><i class="fa fa-minus-circle" aria-hidden="true"></i></p>
                  <input type="text" name="" placeholder="30 ngày">
                  <p><i class="fa fa-plus-circle" aria-hidden="true"></i></p>
                </div>
              </div>
              <div class="money_post clearfix">
                <p class="clearfix">Thành tiền</p>
                <table class="table table-bordered">
                  <tr>
                    <td>Thời gian đăng tin</td>
                    <td>30 ngày</td>
                  </tr>
                  <tr>
                    <td>Loại tin</td>
                    <td>Tin thường</td>
                  </tr>
                  <tr>
                    <td>Phí đăng tin</td>
                    <td>1.000 đồng/ ngày</td>
                  </tr>
                  <tr>
                    <td>Tổng tiền</td>
                    <td>30.000 vnđ</td>
                  </tr>
                </table>
                <!-- captcha -->

                <div class="col-md-5 col-sm-5">
                    <div style="position: relative">
                        <div id="error_captcha" class="text-danger"></div>
                    </div>
                    <div class="cost_post1">
                      <p>Mã xác nhận</p>
                      <img src="<?php echo base_url().$imageCaptchaPostAds; ?>" width="151" height="30" />
                      <div class="clearfix-20"></div>
                      <input class="form-control" type="text" name="captcha_user" id="captcha_user">
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    
                    <!-- <div id="captcha_img" class="pull-left"></div>
                    <div  class="pull-left" style="padding: 5px 10px 10px 15px">
                            <i class="fa fa-refresh" onclick="refresh_capcha()"></i>
                        </div>
                    -->
                    <input type="hidden" id="captcha_check" value="<?=@$captcha_check;?>">
                    </div>
                <!--  -->

               
              </div>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="col-md-4 w_320">
          <div class="col-post-right">
            <div class="Technical_specifications">
              <h2>Thông số kĩ thuật <i class="fa fa-chevron-up" aria-hidden="true"></i></h2>
              <div class="detail-post-right">
                <div class="item-post-right">
                  <label>Dài x rộng x cao (mm)</label>
                  <input class="validate[required]" type="text" name="kich_thuoc">
                </div>
                <div class="item-post-right">
                  <label>Chiều dài cơ sở (mm)</label>
                  <input class="validate[required]" type="text" name="chieu_dai_co_so">
                </div>
                <div class="item-post-right">
                  <label>Trọng lượng không tải (kg)</label>
                  <input class="validate[required]" type="text" name="trong_luong_ko_tai">
                </div>
                <div class="item-post-right">
                  <label>Dung tích xi lanh (cc)</label>
                  <input class="validate[required]" type="text" name="dung_tich_xi_lanh">
                </div>
                <div class="item-post-right">
                  <label>Dung tích bình nhiên liệu (lít)</label>
                  <input class="validate[required]" type="text" name="dung_tich_binh_nhien_lieu">
                </div>
                <div class="item-post-right">
                  <label>Phanh</label>
                  <input class="validate[required]" type="text" name="ph">
                </div>
                <div class="item-post-right">
                  <label>Giảm xóc</label>
                  <input class="validate[required]" type="text" name="giam_xoc">
                </div>
                <div class="item-post-right">
                  <label>Thông số lốp</label>
                  <input class="validate[required]" type="text" name="thong_so_lop">
                </div>
                <div class="item-post-right">
                  <label>Vành mâm xe</label>
                  <input class="validate[required]" type="text" name="vanh_mam_xe">
                </div>
              </div>
            </div>

            <!--  -->
            <div class="Technical_specifications">
              <h2>Tiện nghi <i class="fa fa-chevron-up" aria-hidden="true"></i></h2>
              <div class="detail-right">
              <?php if(isset($list_tiennghi)){
                foreach($list_tiennghi as $value){
                ?>
                <div class="item-right">
                  <label><input class="validate[required]" name="tien_nghi[]"class="tien_nghi" type="checkbox" value="<?=$value->sort;?>"><?=$value->content;?></label>
                </div>
                <?php }
              }
                ?>
              </div>
            </div>

            <!--  -->
            <div class="Technical_specifications">
              <h2>An toàn <i class="fa fa-chevron-up" aria-hidden="true"></i></h2>
              <div class="detail-right">
              <?php if(isset($list_antoan)){
                  foreach ($list_antoan as $row) {                  
                ?>
                <div class="item-right">
                  <label><input class="validate[required]" name="an_toan[]" type="checkbox" value="<?=$row->sort;?>"><?=$row->content;?></label>
                </div>
                  <?php }
              }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
  </div>
  <div class="container">
    <div class="button_post">
      <a href="#">Xem trước</a>
     
      <button type="submit" class="btn btn-primary" name="dang_tin" value="Đăng tin" id="btn-signups">Đăng tin</button>
      <input type="hidden" name="dang_tin" value="1">
    </div>
  </div>
  
  

</main>
<div class="clearfix-50"></div>
  <style>
  .button_post form{
    display: inline;
  }
  </style>	


  <script type="text/javascript">
    $(document).ready(function(){
        $('#btn-signups').click(function(event ){
            event.preventDefault();
            $('#error_captcha').empty();
            jQuery('#register_user_frm').validationEngine({ focusFirstField: true });
            var valid = jQuery("#register_user_frm").validationEngine('validate');
            if(valid){
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: base_url() + 'captchacode/checkCaptchaUser',
                    data: {code_captcha:$('#captcha_user').val(),captcha_check:$('#captcha_check').val()},
                    success: function (result) {
                        if(result.check==true){
                            document.form_u_register.submit();
                        }else{
                            $('#error_captcha').html(result.ms);
                        }
                    }
                })
            }
        });
    })

</script>				
</form>