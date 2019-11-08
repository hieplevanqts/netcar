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

       Danh sách phụ tùng

        <small></small>

    </h1>

    <ol class="breadcrumb">

        <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li > <a onclick="history.back()" style="cursor: pointer"><i class="fa fa-reply"></i></a></li>

    </ol>

</section>

<section class="content">

    <!-- Page Heading -->

    <div class="box">

        <div class="box-header">

            <a href="<?= base_url('vnadmin/phu_tung/add_danhmuc_phutung')?>" class="btn btn-success btn-sm">

            <i class="fa fa-plus"></i> Thêm mới

            </a>



        </div>

        <!-- /.box-header -->

        <div class="box-body">

			

			<form name="formbk" method="post" action="<?=base_url('vnadmin/phu_tung/deletes')?>">

                <table id="example" class="table table-bordered table-striped">

					<thead>

                        <tr>


							<th  width="4%" class="no-sort"></th>

							

							<th >Tên phụ tùng</th>

							

							


							
							<th width="7%" class="no-sort text-center">Action</th>

                        </tr>

                    </thead>

					<tbody>

						 <?php if (isset($list)) {

                            $stt=1;

                            foreach ($list as $v) {

                                ?>

						<tr>


							<td><?= $stt++; ?></td>

							
							<td class="todo-list">

                                <?= @$v->name ?>

                                



							</td>

							

							

							

							

							
							<td class="text-center">
                              <a href="<?= base_url('vnadmin/phu_tung/edit/' . $v->id) ?>"
								class="btn btn-xs btn-default" title="Sửa"><i class="fa fa-pencil"></i></a>
							<a href="<?= base_url('vnadmin/phu_tung/delete_once/' . $v->id) ?>"
							   onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
							   class="btn btn-xs btn-danger"title="Xóa" style="color: #fff"><i class="fa fa-times"></i> </a>

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

<script>

	$(document).ready(function () {

		$('[data-toggle="tooltip"]').tooltip();

	});

	// xóa danh mục đã chọn

	function ActionDelete(formName)

	{

		var $check = false;

		jQuery("input[name='checkone[]']").each(function(){

			if($(this).is(':checked')){

				$check = true;

			}

		});

		if($check == false){

			alert('Bạn chưa chọn mục nào để xóa');

		}

		else{

			if(confirm('Bạn có chắc chắn muốn xóa không ?')){

				eval('document.' + formName + '.submit();');

			}

		}

	}

	// click hien thị và không hiện thị

	$('.view_color').click(function(){

		var color = $( this ).css( "border-color" );

		var background = $( this ).css( "background-color" );



		var form_data = {

			id: $( this ).attr('data-value'),view:$( this ).attr('data-view'),table:$( this ).attr('data-placement')

		};

		$.ajax({

			url: base_url() + 'ajax/ajax/update_fill',

			type: 'POST',

			dataType: 'json',

			data: form_data,

			success: function (rs) {



			}

		});

		if(color!=background){

			$( this ).css( "background-color",color ) ;

		}else{

			$( this ).css( "background-color",'#fff' ) ;

		}

	});

	// cap nhat trường sap xep cho table

	function update_sort(s) {

		var form_data = {

			id: s.attr('data-item'), sort: s.val(), table:s.attr('data-placement')

		};

		$.ajax({

			url: base_url() + "ajax/ajax/update_sort",

			type: 'POST',

			dataType: 'json',

			data: form_data,

			success: function (rs) {

			}

		});

	}

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