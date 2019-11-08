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

        <?=$btn_name;?> xuất xứ

        <small></small>

    </h1>

    <ol class="breadcrumb">

        <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

        <li class="active"><a href="<?= base_url('vnadmin/raovat/list_xuatxu')?>">Danh sách hãng xe</a></li>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="history.back()" style="cursor: pointer" title="Quay lại trang trước" ><i class="fa fa-reply"></i></a>

    </ol>

</section>

<section class="content">

    <!-- Page Heading -->

    <div class="row">

		<form class="validate form-horizontal" role="form" id="form-bk" method="POST" action="<?php echo base_url('vnadmin/raovat/add_xuatxu')?>" enctype="multipart/form-data">

			<input type="hidden" name="edit" id="id_edit" value="<?= @$edit->id; ?>">

			<input type="hidden" name="addnews" value="1">

			<input type="hidden" id="catcheck" value="services">

			<div class="col-md-9" style="font-size: 12px">

				<div class="panel panel-default">

					<div class="panel-heading">

						<div class="alert alert-dismissible" style="display:none;"></div>

						<ul class="nav nav-tabs">

							<li class="active"><a data-toggle="tab" href="#home">Thông tin chi tiết</a></li>

							

							

							<li class="pull-right">

								<button type="button" <?php if (isset ($edit)) { ?> onclick="editItem()" <?php }else{ ?> onclick="createItem()" <?php } ?> class="btn btn-success btn-xs" name="add_news"><i

									class="fa fa-check"></i> <?= @$btn_name; ?>

								</button>

							</li>

						</ul>

					</div>

					<div class="panel-body">

						<div class="tab-content">

							<div id="home" class="tab-pane fade in active">

								<div class="form-group">

									<label class="col-sm-12 form-text">Nhập tên xuất xứ</label>

									<div class="col-sm-12">

										<input type="text" oninput="createAlias(this)" class="validate[required] form-control input-sm " name="name"

											   value="<?= @$edit->name; ?>" placeholder=""/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-12 form-text">Alias :</label>

									<div class="col-sm-12" id="error-alias">

										<input type="text" onchange="createAlias(this)" class="form-control input-sm validate[required]" name="alias"

											   value="<?= @$edit->alias; ?>" id="alias" placeholder=""/>

									</div>

								</div>
							

								

								

								

								

							</div>

							

						

						

						</div>

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

	$(document).ready(function(){

		url= base_url() +'assets/ckfinder/';

		// ckeditor mo ta không full

		CKEDITOR.replace( 'ckeditor_content', {

			height:150,

			// Configure your file manager integration. This example uses CKFinder 3 for PHP.

            filebrowserBrowseUrl: url+'ckfinder.html',

            filebrowserImageBrowseUrl: url+'ckfinder.html?type=Images',

            filebrowserUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Files',

            filebrowserImageUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Images'

		} );

		CKEDITOR.replace( 'ckeditor', {

			height:150,

			// Configure your file manager integration. This example uses CKFinder 3 for PHP.

            filebrowserBrowseUrl: url+'ckfinder.html',

            filebrowserImageBrowseUrl: url+'ckfinder.html?type=Images',

            filebrowserUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Files',

            filebrowserImageUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Images'

		} );

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



