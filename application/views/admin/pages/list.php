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

        Trang nội dung

        <small></small>

    </h1>

    <ol class="breadcrumb">

        <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

        <li class="active"><a href="<?= base_url('vnadmin/pages/pagelist')?>">Trang nội dung</a></li>

        <li > <a onclick="history.back()" style="cursor: pointer"><i class="fa fa-reply"></i></a></li>

    </ol>

</section>

<section class="content">

    <!-- Page Heading -->

    <div class="box">

        <div class="box-header">

            <a href="<?= base_url('vnadmin/pages/addpage')?>" class="btn btn-success btn-sm">

            <i class="fa fa-plus"></i> Thêm mới

            </a>

            <a onclick="ActionDelete('formbk')" class="btn btn-danger btn-sm">

            <i class="fa fa-times"></i> Xóa

            </a>

        </div>

        <!-- /.box-header -->

        <div class="box-body">

            <form name="formbk" method="post" action="<?=base_url('vnadmin/pages/deletes')?>">

                <table id="myTable2" class="table table-bordered table-striped">

                    <thead>

                        <tr>

                            <th width="2%" class="no-sort"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="DoCheck(this.checked,'formbk',0)" /></th>

                            <th width="3%" class="text-center">STT</th>

                            <th width="8%" class="no-sort hidden">Ảnh đại diện</th>

                            <th>Tiêu đề</th>

                            <th width="7%" class="no-sort hidden">Hiển thị</th>

                            <th width="10%" class="no-sort text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if(isset($pagelist)){

                            $i=1;

                            foreach($pagelist as $v){?>

                        <tr>

                            <td><input type="checkbox" name="checkone[]" id="checkone" value="<?php echo $v->id; ?>" ></td>

                            <td class="text-center"><?= $i++;?></td>

                            <td class="hidden">

                                <?php if(file_exists($v->image)){?>

                                <img src="<?= base_url().@$v->image?>" style="max-width: 100px; max-height: 80px">

                                <?php }else{?>

                                <img src="<?= base_url('img/noimage.png')?>" style="max-width: 80px; max-height: 55px">

                                <?php } ?>

                            </td>

                            <td><a href="<?= base_url('vnadmin/pages/edit/'.$v->id)?>"><?= @$v->name?></a></td>

                            <td class="hidden">

								<div data-toggle="tooltip" data-placement="staticpage" title="<?=@$show_home->name ?>"
                                    data-value="<?= $v->id; ?>" data-view="<?= @$show_home->field ?>"
                                    class='view_color <?php if(@$show_home->active ==0){ echo'hidden';} ?>'
                                    style="border: 1px solid #<?= @$show_home->color ?>;<?php if($v->home == 1){ echo'background-color:#'.$show_home->color.''; }else{ echo''; } ?>"></div>
                                <div data-toggle="tooltip" data-placement="staticpage" title="<?=@$show_hot->name ?>"
                                    data-value="<?= $v->id; ?>" data-view="<?= @$show_hot->field ?>"
                                    class='view_color <?php if(@$show_hot->active ==0){ echo'hidden';} ?>'
                                    style="border: 1px solid #<?= @$show_hot->color ?>;<?php if($v->hot == 1){ echo'background-color:#'.$show_hot->color.''; }else{ echo''; } ?>"></div>
                                <div data-toggle="tooltip" data-placement="staticpage" title="<?=@$show_focus->name ?>"
                                    data-value="<?= $v->id; ?>" data-view="<?= @$show_focus->field ?>"
                                    class='view_color <?php if(@$show_focus->active ==0){ echo'hidden';} ?>'
                                    style="border: 1px solid #<?= @$show_focus->color ?>;<?php if($v->focus == 1){ echo'background-color:#'.$show_focus->color.''; }else{ echo''; } ?>"></div>

                            </td>

                            <td class="text-center">

                                <a href="<?=base_url('page/'.$v->alias.'.html')?>" class="btn btn-xs btn-default" target="_blank" title="Xem trước">

                                <i class="fa fa-eye"></i>

                                </a>

                                <a href="<?= base_url('vnadmin/pages/edit/'.$v->id)?>" class="btn btn-xs btn-default">

                                <i class="fa fa-pencil"></i>

                                </a>

                                <a href="<?= base_url('vnadmin/pages/delete/'.$v->id)?>" class="btn btn-xs btn-danger">

                                <i class="fa fa-times"></i>

                                </a>

                            </td>

                        </tr>

                        <?php } } ?>

                    </tbody>

                    <tfoot>

                    </tfoot>

                </table>

            </form>

        </div>

        <!-- /.box-body -->

        <!-- /.box -->

    </div>

</section>

<!-- /.content-wrapper -->

<style>

    .view_color{width: 10px; height: 10px;margin-top: 5px;cursor: pointer; float: left;margin-right: 5px }

</style>

<script>

	$(document).ready(function() {

		$('#myTable2').DataTable( {

			"columnDefs": [ {

					"targets": 'no-sort',

					"orderable": false,

					  } ],

			"order": [[ 1, "desc" ]],

			"initComplete": function () {

				this.api().columns().every( function () {

					var column = this;

					var select = $('<select><option value=""></option></select>')

						.appendTo( $(column.footer()).empty() )

						.on( 'change', function () {

							var val = $.fn.dataTable.util.escapeRegex(

								$(this).val()

							);

	 

							column

								.search( val ? '^'+val+'$' : '', true, false )

								.draw();

						} );

	 

					column.data().unique().sort().each( function ( d, j ) {

						select.append( '<option value="'+d+'">'+d+'</option>' )

					} );

				} );

			}

		} );

	} );

</script>

<!-- DataTables -->

<link rel="stylesheet" href="<?= base_url('assets/css_admin/back_end/plugins/datatables/dataTables.bootstrap.css')?>">

<script src="<?=base_url('assets/js_admin/general_list.js')?>"></script>

<script src="<?= base_url('assets/css_admin/back_end/plugins/datatables/jquery.dataTables.min.js')?>"></script>

<script src="<?= base_url('assets/css_admin/back_end/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>