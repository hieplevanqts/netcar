<?php

#****************************************#

# * @Author: Lê Văn Hiệp                   #

# * @Email: vanhiep2008@gmail.com #

# * @Website: http://qts.com             #

# * @Copyright: 2017 - 2018              #

#****************************************#

?>
<style>
.file-select input {
    z-index: 100;
    cursor: pointer;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    filter: alpha(opacity=0);
}
.removeImg {
      padding: 2px 10px;
      color: red;
      border-radius: 5px;
      background: #ccc;
      position: absolute;
      top: 15px;
      right: 20px;
   }
   .pip img {
    width: 127px;
    height: 70px;
    margin-right: 25px;
    margin-top: 25px;
}
.box_img_post img {
    width: 100%;
    max-width: 127px;
    height: 70px;
    object-fit: cover;
}
.list_img_post div {
    float: left;
    width: 50%;
   position:relative;
}
</style>
<script>
$(document).ready(function(){
  $(".id_hangxe").change(function(){
    var id = $(".id_hangxe").val();
    $.post("<?php echo base_url()?>vnadmin/phu_tung/select_dongxe",{id: id},function(data){
      $(".id_dongxe").html(data);
    });
  });
});
</script>
<!--  -->
<script>
$(document).ready(function(){
  $(".id_dongxe").change(function(){
    var id = $(".id_dongxe").val();
    $.post("<?php echo base_url()?>vnadmin/phu_tung/select_doixe",{id: id},function(data){
      $(".id_doixe").html(data);
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


    <section class="content-header">

        <h1>

        <?php if(isset($btn_name)){echo $btn_name;}?> danh mục phụ tùng

        <small></small>

    </h1>

        <ol class="breadcrumb">

            <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="history.back()" style="cursor: pointer" title="Quay lại trang trước"><i class="fa fa-reply"></i></a>

        </ol>

    </section>

    <section class="content">

        <!-- Page Heading -->

        <div class="row">

            <form class="validate form-horizontal" role="form" id="form-bk" method="POST" action="<?php echo base_url('vnadmin/phu_tung/add_danhmuc_phutung')?>" enctype="multipart/form-data">

                <input type="hidden" name="edit" id="id_edit" value="<?= @$edit->id; ?>">

                <input type="hidden" name="addnews" value="1">

                <input type="hidden" id="catcheck" value="services">

                <div class="col-md-9" style="font-size: 12px">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <div class="alert alert-dismissible" style="display:none;"></div>

                            <ul class="nav nav-tabs">

                                <li class="active"><a data-toggle="tab" href="#home">Thông tin chi tiết</a></li>

                               

                            </ul>

                        </div>

                        <div class="panel-body">

                            <div class="tab-content">

                                <div id="home" class=" tab-pane fade in active">
                              <div class="col-sm-6">
                                    <div class="form-group">

                                        <label class="col-sm-6 form-text">Nhập tên danh mục phụ tùng</label>

                                        <div class="col-sm-6">

                                            <input type="text" oninput="createAlias(this)" class="validate[required] form-control input-sm " name="name" value="<?= @$edit->name; ?>" placeholder="" />

                                        </div>

                                    </div>
                                    <!--  Nhập đường dẫn -->
                                    <div class="form-group">
                                        <label class="col-sm-6 form-text">Alias :</label>
                                        <div class="col-sm-6" id="error-alias">
                                            <input type="text" onchange="createAlias(this)" class="form-control input-sm validate[required]" name="alias" value="<?= @$edit->alias; ?>" id="alias" placeholder="" />
                                        </div>
                                    </div>
                                   
                                   
                                   
                                 
                                    <!--  chọn trạng thái -->
                                    <div class="form-group">
                                        <label class="col-sm-6 form-text">Tráng thái :</label>
                                        <div class="col-sm-6" id="error-alias">
                                            <input type="checkbox" name="status" value="1" id="alias" > Còn hàng
                                        </div>
                                    </div>
                              </div>
                        <div class="col-sm-6">
                           <p><i>Chú ý : chọn theo thứ tự từ trên xuống !</i></p>
                           <!-- Chọn hãng xe -->
                           <div class="form-group">

                           <label class="col-sm-6 form-text">Chọn hãng xe</label>

                           <div class="col-sm-6" id="error-alias">
                              <select name="id_hangxe" class="id_hangxe form-control">
                              <option  value="">---Chọn hãng xe---</option>
                                 <?php if(isset($list_hangxe)):
                                    foreach($list_hangxe as $value):
                                    ?>
                                    
                                 <option <?php if(@$edit->id_hangxe == $value->id ){echo 'selected';}?> value="<?=@$value->id;?>"><?=@$value->name;?>
                                 
                                 
                                    <?php endforeach;
                                          endif;
                                    ?>
                              </select>


                           </div>

                           </div>

                           <!-- Chọn dòng xe -->
                           <div class="form-group">
                              <label class="col-sm-6 form-text">Chọn dòng xe</label>
                                 <div class="col-sm-6" id="error-alias">
                                    <select name="id_dongxe" class="required id_dongxe form-control" >
                                    <option value="">---  Chọn  ---</option>
                                    </select>
                                 </div>
                           </div>
                           <!-- Chọn đời xe -->
                           <div class="form-group">
                              <label class="col-sm-6 form-text">Chọn đời xe</label>
                                 <div class="col-sm-6" id="error-alias">
                                    <select name="id_doixe" class="required id_doixe form-control" >
                                    <option value="">---  Chọn  ---</option>
                                    </select>
                                 </div>
                           </div>
                           <!-- Chọn xuất xứ -->
                           <div class="form-group">
                              <label class="col-sm-6 form-text">Chọn xuất xứ</label>
                                 <div class="col-sm-6" id="error-alias">
                                    <select name="xuat_xu" class="required xuat_xu form-control" >
                                    <option value="">---  Chọn  ---</option>
                                       <?php if(isset($xuat_xu)){
                                          foreach($xuat_xu as $value){
                                          ?>
                                    <option value="<?=$value->id;?>"><?=$value->name;?></option>
                                          <?php }}?>
                                    </select>
                                 </div>
                           </div>
                            <!-- Chọn danh mục cha -->
                            <div class="form-group">
                              <label class="col-sm-6 form-text">Chọn danh mục cha</label>
                                 <div class="col-sm-6" id="error-alias">
                                    <select name="parent_id" class="form-control" >
                                    <option value="0">---  Chọn  ---</option>
                                       <!--  -->
                                          <?php show_cate_menu3($list_parent,$parent=0,$text='',$edit=null);?>
                                    </select>
                                 </div>
                           </div>
                  </div>                                
																			
                                </div>

                            </div>


<button style="margin: 50px;margin-left:675px;" class="btn btn-primary" type="submit" <?php if (isset ($edit)) { ?> onclick="editItem()"
                                        <?php }else{ ?> onclick="createItem()"
                                            <?php } ?> class="btn btn-success btn-xs" name="add_news"><i class="fa fa-check"></i>
                                                <?= @$btn_name; ?>

                                    </button>
                        </div>

                    </div>

                </div>

                <div class="col-md-3" style="font-size: 12px">

                </div>

            </form>

        </div>

    </section>

    <!-- /.container-fluid -->

    <script src="http://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>

    <script src="<?=base_url('assets/js_admin/general_add.js')?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            url = base_url() + 'assets/ckfinder/';

            // ckeditor mo ta không full

            CKEDITOR.replace('ckeditor_content', {

                height: 150,

                // Configure your file manager integration. This example uses CKFinder 3 for PHP.

                filebrowserBrowseUrl: url + 'ckfinder.html',

                filebrowserImageBrowseUrl: url + 'ckfinder.html?type=Images',

                filebrowserUploadUrl: url + 'core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl: url + 'core/connector/php/connector.php?command=QuickUpload&type=Images'

            });

            CKEDITOR.replace('ckeditor', {

                height: 150,

                // Configure your file manager integration. This example uses CKFinder 3 for PHP.

                filebrowserBrowseUrl: url + 'ckfinder.html',

                filebrowserImageBrowseUrl: url + 'ckfinder.html?type=Images',

                filebrowserUploadUrl: url + 'core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl: url + 'core/connector/php/connector.php?command=QuickUpload&type=Images'

            });

        });
    </script>

    <!-- lây giau phẩy trong giá tiền và chỉ nhập số -->

    <script src="<?=base_url('assets/plugin/slimscroll/jquery.slimscroll.min.js')?>"></script>

    <script src="<?= base_url('assets/plugin/autonumber/autoNumeric.js') ?>"></script>

    <script src="<?= base_url('assets/plugin/autonumber/jquery.number.js') ?>"></script>

    <script type="text/javascript">
        $('#raovat_price,#raovat_price_sale').autoNumeric(0);

        $('.cat_checklist').slimScroll({

            height: '300px',

            alwaysVisible: true,

            railVisible: true

        });
    </script>
