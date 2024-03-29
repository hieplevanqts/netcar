<?php
#****************************************#
# * @Author: Tran Manh                   #
# * @Email: dangtranmanh051187@gmail.com #
# * @Website: http://qts.com             #
# * @Copyright: 2017 - 2018              #
#****************************************#
?>

<section class="content-header">
    <h1>
       Danh sách thành viên
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="<?= base_url('vnadmin/users/listAll')?>">Danh sách thành viên</a></li>
        <li > <a onclick="history.back()" style="cursor: pointer"><i class="fa fa-reply"></i></a></li>
    </ol>
</section>
<section class="content">
    <!-- Page Heading -->
    <div class="box">
        <div class="box-header">
            <a href="<?= base_url('vnadmin/users/add')?>" class="hidden btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Thêm mới
            </a>
            <a onclick="ActionDelete('formbk')" class="btn btn-danger btn-sm">
            <i class="fa fa-times"></i> Xóa
            </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
			<div class="col-sm-12" >
				<input type="hidden" id="autocomplete1" value="<?= $auto_fullname?>">
				<input type="hidden" id="autocomplete2" value="<?= $auto_email?>">
				<input type="hidden" id="autocomplete3" value="<?= $auto_phone?>">
				<form action="" method="get">
					<div class="form-group row">
						<div class="col-sm-2">
							<input name="fullname" type="search" id="getautocomplete1" value="<?=$this->input->get('fullname');?>"
								   placeholder="tên thành viên ..."
								   class="form-control input-sm">
						</div>
						<div class="col-sm-3">
							<input name="email" type="search" id="getautocomplete2" value="<?=$this->input->get('email');?>"
								   placeholder="email..."
								   class="form-control input-sm">
						</div>
						<div class="col-sm-3">
							<input name="phone" type="search" id="getautocomplete3" value="<?=$this->input->get('phone');?>"
								   placeholder="Số điện thoại..."
								   class="form-control input-sm">
						</div>
						<div class="col-sm-2">
							<select name="view" class="input-sm form-control" >
								<option value="">trạng thái</option>
								<option class="" value="1" <?=$this->input->get('view')=='active'?'selected':'';?> >kích hoạt</option>
							</select>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-sm btn-default">
								<i class="fa fa-search"></i>  Tìm kiếm
							</button>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
			<form name="formbk" method="post" action="<?=base_url('vnadmin/users/deletes')?>">
                <table id="example" class="table table-bordered table-striped">
					<thead>
                        <tr>
							<th width="2%" class="no-sort"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="DoCheck(this.checked,'formbk',0)" /></th>
							<th width="2%" class="no-sort">STT</th>
							<th width="7%" class="no-sort">Ảnh</th>
							<th width="15%">Tên thành viên</th>
							<th width="15%">Email</th>
							<th width="7%" class="no-sort">Điện thoại</th>
							<th width="5%" class="no-sort">active</th>
							<th width="9%" class="no-sort">Ngày Đăng ký</th>
							<th width="9%" class="no-sort text-center">Đăng nhập</th>
							<th width="5%" class="no-sort text-center">Action</th>
                        </tr>
                    </thead>
					<tbody>
						 <?php if (isset($list)) {
                            $stt=1;
                            foreach ($list as $v) {
                                ?>
						<tr>
							<td><input type="checkbox" name="checkone[]" id="checkone" value="<?php echo $v->id; ?>" ></td>
							<td><?= $stt++; ?></td>
							<td><?php if(!empty($v->avatar)) { ?>
									<img src="<?= base_url('upload/img/avatar/'.$v->avt_dir.'/'.@$v->avatar) ?>" style="height: 35px">
								<?php } else echo "No image" ?>
							</td>
							<td class="todo-list"><?= @$v->fullname ?>
							</td>
							<td><?= @$v->email ?></td>
							<td><?= @$v->phone ?></td>
							<td class="text-center">
								<label class="view_color view_active" data-value="<?=$v->id;?>" data-placement="users" data-view="active">
									<input type="checkbox" <?=$v->active==1?'checked':''?> data-toggle="toggle"  id="toggle" data-size="mini"
										   data-on="Yes" data-off="No">
								</label>
							</td>
							<td class="text-center"><?= date('Y-m-d',$v->use_regisdate);?>
							</td>
							<td class="text-center">
                               <?= date('Y-m-d H:i',$v->lastest_login);?>
                            </td>
							<td class="text-center">
								<div onclick="getModal_user(<?=$v->id;?>)" class="btn btn-xs btn-default" data-toggle="modal" title="Xem thông tin thành viên">
                                <i class="fa fa-eye" style=""></i></div>
								<a class="btn btn-xs btn-danger"
								   href="<?= base_url('vnadmin/users/delete/' . $v->id) ?>" title="Xóa"
								   onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-times"></i> </a>

							</td>
						</tr>
						<?php }  } ?>
					</tbody>
				</table>
				<?php
				echo $this->pagination->create_links(); // tạo link phân trang
				?>				
			</form>	      
		</div>
	</div>
</section>
<link href="<?=base_url('assets/css_admin/back_end/bootstrap-toggle.min.css')?>" rel="stylesheet">
<script src="<?=base_url('assets/js_admin/bootstrap-toggle.min.js')?>"></script>
<script src="<?=base_url('assets/js_admin/general_list.js')?>"></script>
<script>
	$(document).ready(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<link href="<?= base_url('assets/css_admin/back_end/css_autocomplete.css')?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?= base_url('assets/js_admin/jquery.autocomplete.min.js') ?>"></script>
<script type="text/javascript">
   $(function(){
         // cài đặt autocomplete với ô code
        var codefor  = $('#autocomplete1').val() ;
        var codefor = codefor.split(",");
        $('#getautocomplete1').autocomplete({
           lookup: codefor,
        });
		
		var namefor  = $('#autocomplete2').val() ;
		var namefor = namefor.split(",");
		$('#getautocomplete2').autocomplete({
           lookup: namefor,
        });
   }); 
</script>
<style>
.todo-list .tools {
	position: relative;
	width: 100%;
    float: right;
    color: #dd4b39;
	z-index:-1;
}
.todo-list:hover .tools {
    z-index:100;
    width: 100%;
	top:3px;
    text-align: right;
}
.todo-list:hover .tools a{padding-right:10px;}
</style>