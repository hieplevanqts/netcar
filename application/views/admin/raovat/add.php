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

        <?=$btn_name;?> tin rao

        <small></small>

    </h1>

    <ol class="breadcrumb">

        <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

        <li class="active"><a href="<?= base_url('vnadmin/raovat/listAll')?>">Danh sách tin rao</a></li>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="history.back()" style="cursor: pointer" title="Quay lại trang trước" ><i class="fa fa-reply"></i></a>

    </ol>

</section>

<section class="content">

    <!-- Page Heading -->

    <div class="row">

		<form class="validate form-horizontal" role="form" id="form-bk" method="POST" action="" enctype="multipart/form-data">

			<input type="hidden" name="edit" id="id_edit" value="<?= @$edit->id; ?>">

			<input type="hidden" name="addnews" value="1">

			<input type="hidden" id="catcheck" value="services">

			<div class="col-md-9" style="font-size: 12px">

				<div class="panel panel-default">

					<div class="panel-heading">

						<div class="alert alert-dismissible" style="display:none;"></div>

						<ul class="nav nav-tabs">

							<li class="active"><a data-toggle="tab" href="#home">Thông tin chi tiết</a></li>

							<li><a data-toggle="tab" href="#menu1">Dữ liệu</a></li>

							<li><a data-toggle="tab" href="#menu2">Liên kết</a></li>

							<li><a data-toggle="tab" href="#menu3">Thẻ seo</a></li>

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

									<label class="col-sm-12 form-text">Tên tin rao :</label>

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

								<div class="form-group">

									<label class="col-sm-12 form-text" for="exampleInputFile">Chọn thêm ảnh tin rao</label>

									<div class="col-sm-12">

										<input type="file" accept="image/*" id="exampleInputFile" multiple name="images[]">

										<p class="help-block">Ảnh tin rao cần rõ nét.</p>

									</div>

									<div class="img-responsive col-sm-12">



									<?php if(count(@$listimg) > 0) :?>

                                    <?php foreach (@$listimg as $img) {  ?>

                                       <div class="col-sm-3" id="<?= $img->id ?>" >

                                           <img src="<?= base_url().$img->image ?>" class="img-thumbnail" style="max-width:120px;height:100px; ">

                                            <span data-id="<?= $img->id ?>" data-placement="raovat_images" onclick="removeimg($(this))" class="btn btn-default"> <i class="fa fa-trash-o" aria-hidden="true"></i></span>

											<label  class="col-sm-12">tên ảnh</label>

											<input type="text" data-id="<?= $img->id ?>" data-view="name" data-placement="p_images" class="form-control input-sm " oninput="update_value($(this))" name="name_image"

											   value="<?= @$img->name; ?>" placeholder=""/>

									   </div>

									 <?php } ?>

									<?php endif; ?>

									</div>

								</div>

								<div class="form-group">

									<label  class="col-sm-12">Mô tả</label>

									<div class="col-sm-12">

										<textarea name="description" class="form-control input-sm" placeholder=""

											id="ckeditor_description" rows="4"><?=@$edit->description;?></textarea>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-12">Nội dung:</label>

									<div class="col-sm-12">

										<textarea name="detail" class="form-control input-sm" id="ckeditor_content"><?=@$edit->detail;?></textarea>

									</div>

								</div>

								<div class="form-group">

									<label  class="col-sm-2 form-text">Thông tin phụ</label>

									<div class="col-sm-12 ">

									<textarea name="caption_2" class="form-control input-sm" id="ckeditor"

											  style="height: 200px"><?= @$edit->caption_2; ?></textarea>

									</div>

								</div>

							</div>

							<div id="menu1" class="tab-pane fade">

								<div class="form-group">

									<label class="col-sm-2 form-text">Mã tin rao:</label>

									<div class="col-sm-5">

										<input value="<?=@$edit->id;?>" type="text" name="code" id="pro_code" class="form-control input-sm"/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Giá cũ :</label>

									<div class="col-sm-5">

										<input type="number" name="price" id="raovat_price"

											  

											   class="auto form-control input-sm"

											   value="<?= @$edit->price; ?>" placeholder=""/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Giá bán :</label>

									<div class="col-sm-5">

										<input type="text" name="price_sale" id="raovat_price_sale"

											   data-v-max="9999999999999" data-v-min="0"

											   class="auto form-control input-sm"

											   value="<?= @$edit->price_sale; ?>" placeholder=""/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Bảo hành :</label>

									<div class="col-sm-5">

										<input type="text" name="quaranty" id="quaranty"

											   data-v-max="9999999999999" data-v-min="1"

											   class="auto form-control input-sm"

											   value="<?= @$edit->quaranty; ?>" placeholder=""/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Tình trạng :</label>

									<div class="col-sm-2">

										<select name="status" class="form-control">

											<option <?php if(@$edit->status==0){echo "selected";} ?> value="0">Hết hạn</option>

											<option <?php if(@$edit->status==1){echo "selected";} ?> value="1">Còn hạn</option>

										</select>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Trạng thái :</label>

									<div class="col-sm-2">

										<select name="active" class="form-control">

											<option <?php if(@$edit->active==1){echo "selected";} ?><?php if (isset ($edit)) { }else{ echo'selected'; } ?> value="1">Bật</option>

											<option <?php if (isset ($edit)) { ?> <?php if(@$edit->active==0){echo "selected";} }?> value="0">Tắt</option>

										</select>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-2 form-text">Lượt xem :</label>

									<div class="col-sm-5">

										 <input type="text" name="view" id="view" value="<?= @$edit->view; ?>" placeholder="Số lượt xem"/>

									</div>

								</div>
								<!-- hãng xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Hãng Xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="hang_xe" id="hang_xe" value="<?= @$edit->id_hangxe; ?>"/>

									</div>

								</div>
								<!-- năm sản xuất -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Năm sản xuất :</label>

									<div class="col-sm-5">

										 <input type="text" name="nam_san_xuat" id="nam_san_xuat" value="<?= @$edit->nam_san_xuat; ?>"/>

									</div>

								</div>
								<!-- dòng xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Dòng Xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="dong_xe" id="dong_xe" value="<?= @$edit->dong_xe; ?>" />

									</div>

								</div>
								<!-- đời xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Đời Xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="doi_xe" id="doi_xe" value="<?= @$edit->doi_xe; ?>" />

									</div>

								</div>
								<!-- phiên bản xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Phiên bản Xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="version" id="version" value="<?= @$edit->version; ?>" />

									</div>

								</div>
								<!-- xuất xứ -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Xuất xứ :</label>

									<div class="col-sm-5">

										 <input type="text" name="xuat_xu" id="xuat_xu" value="<?= @$edit->xuat_xu; ?>" />

									</div>

								</div>
								<!-- tình trạng xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Tình trạng Xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="status" id="status" value="<?= @$edit->status; ?>" />

									</div>

								</div>
								<!-- mau ngoại thất -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Màu ngoại thất :</label>

									<div class="col-sm-5">

										 <input type="text" name="mau_ngoai_that" id="mau_ngoai_that" value="<?= @$edit->mau_ngoai_that; ?>" />

									</div>

								</div>
								<!-- màu nội thất -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Màu nội thất :</label>

									<div class="col-sm-5">

										 <input type="text" name="mau_noi_that" id="mau_noi_that" value="<?= @$edit->mau_noi_that; ?>" />

									</div>

								</div>
								<!-- dáng xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text">Dáng xe :</label>

									<div class="col-sm-5">

										 <input type="text" name="dang_xe" id="dang_xe" value="<?= @$edit->dang_xe; ?>" />

									</div>

								</div>
								<!-- số km đã đi -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Số km đã đi:</label>

									<div class="col-sm-5">

										 <input type="text" name="km_dadi" id="km_dadi" value="<?= @$edit->km_dadi; ?>" />

									</div>

								</div>
								<!-- số cửa -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Số cửa:</label>

									<div class="col-sm-5">

										 <input type="text" name="so_cua" id="so_cua" value="<?= @$edit->so_cua; ?>" />

									</div>

								</div>
								<!-- hộp số -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> hộp số:</label>

									<div class="col-sm-5">

										 <input type="text" name="hop_so" id="hop_so" value="<?= @$edit->hop_so; ?>" />

									</div>

								</div>
								<!-- nhiên liệu -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> nhiên liệu:</label>

									<div class="col-sm-5">

										 <input type="text" name="nhien_lieu" id="nhien_lieu" value="<?= @$edit->nhien_lieu; ?>" />

									</div>
									</div>
									<!-- số ghế  -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Số ghế:</label>

									<div class="col-sm-5">

										 <input type="text" name="so_ghe_ngoi" id="so_ghe_ngoi" value="<?= @$edit->so_ghe_ngoi; ?>" />

									</div>
									</div>
									<!-- dẫn động  -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Dẫn động:</label>

									<div class="col-sm-5">

										 <input type="text" name="dan_dong" id="dan_dong" value="<?= @$edit->dan_dong; ?>" />

									</div>

								</div>
								<!-- mức tiêu thu đô thị  -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Mức tiêu thụ đô thị:</label>

									<div class="col-sm-5">

										 <input type="text" name="muc_tieu_thu_do_thi" id="muc_tieu_thu_do_thi" value="<?= @$edit->muc_tieu_thu_do_thi; ?>" />

									</div>

								</div>
								<!-- mức tiêu thụ đường trường -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Mức tiêu thụ đường trường:</label>

									<div class="col-sm-5">

										 <input type="text" name="muc_tieu_thu_duong_truong" id="muc_tieu_thu_duong_truong" value="<?= @$edit->muc_tieu_thu_duong_truong; ?>" />

									</div>

								</div>
								<!-- mức tiêu thụ đường trường -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Mức tiêu thụ đường trường:</label>

									<div class="col-sm-5">

										 <input type="text" name="muc_tieu_thu_duong_truong" id="muc_tieu_thu_duong_truong" value="<?= @$edit->muc_tieu_thu_duong_truong; ?>" />

									</div>

								</div>
								<!-- tên người bán -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Tên người bán:</label>

									<div class="col-sm-5">

										 <input type="text" name="ten_nguoi_ban" id="ten_nguoi_ban" value="<?= @$edit->ten_nguoi_ban; ?>" />

									</div>

								</div>
								<!-- địa chỉ người bán -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Địa chỉ người bán:</label>

									<div class="col-sm-5">

										 <input type="text" name="dia_chi" id="dia_chi" value="<?= @$edit->dia_chi; ?>" />

									</div>

								</div>
								<!-- số điện thoại người bán -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Số điện thoại người bán:</label>

									<div class="col-sm-5">

										 <input type="text" name="phone_nguoi_ban" id="phone_nguoi_ban" value="<?= @$edit->phone_nguoi_ban; ?>" />

									</div>

								</div>
								<!-- email người bán -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Email người bán:</label>

									<div class="col-sm-5">

										 <input type="text" name="email_nguoi_ban" id="email_nguoi_ban" value="<?= @$edit->email_nguoi_ban; ?>" />

									</div>

								</div>
								<!-- tỉnh thành phố -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Tỉnh / TP:</label>

									<div class="col-sm-5">

										 <input type="text" name="tinh_thanh_pho" id="tinh_thanh_pho" value="<?= @$edit->tinh_thanh_pho; ?>" />

									</div>

								</div>
								<!-- thời gian bắt đầu -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Thời gian bắt đầu:</label>

									<div class="col-sm-5">

										 <input type="text" name="time_start" id="time_start" value="<?= @$edit->time_start; ?>" />

									</div>

								</div>
								<!-- thời gian kết thúc -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Thời gian kết thúc:</label>

									<div class="col-sm-5">

										 <input type="text" name="time_end" id="time_end" value="<?= @$edit->time_end; ?>" />

									</div>

								</div>
								<!-- mã xác nhận -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Mã xác nhận:</label>

									<div class="col-sm-5">

										 <input type="text" name="ma_xac_nhan" id="ma_xac_nhan" value="<?= @$edit->ma_xac_nhan; ?>" />

									</div>

								</div>
								<!-- dài rộng cao -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Dài x rộng x cao:</label>

									<div class="col-sm-5">

										 <input type="text" name="kich_thuoc" id="kich_thuoc" value="<?= @$edit->kich_thuoc; ?>" />

									</div>

								</div>
								<!-- chiều dài cơ sở -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Chiều dài cơ sở:</label>

									<div class="col-sm-5">

										 <input type="text" name="chieu_dai_co_so" id="chieu_dai_co_so" value="<?= @$edit->chieu_dai_co_so; ?>" />

									</div>

								</div>
								<!-- trọng lượng không tải -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Chiều dài cơ sở:</label>

									<div class="col-sm-5">

										 <input type="text" name="trong_luong_ko_tai" id="trong_luong_ko_tai" value="<?= @$edit->trong_luong_ko_tai; ?>" />

									</div>

								</div>
								<!-- dung tích xi lanh -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Dung tích xi lanh:</label>

									<div class="col-sm-5">

										 <input type="text" name="dung_tich_xi_lanh" id="dung_tich_xi_lanh" value="<?= @$edit->dung_tich_xi_lanh; ?>" />

									</div>

								</div>
								<!-- dung tích bình nhiên liệu -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Dung tích bình nhiên liệu:</label>

									<div class="col-sm-5">

										 <input type="text" name="dung_tich_binh_nhien_lieu" id="dung_tich_binh_nhien_lieu" value="<?= @$edit->dung_tich_binh_nhien_lieu; ?>" />

									</div>

								</div>
								<!-- thông số phanh -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Thông số phanh:</label>

									<div class="col-sm-5">

										 <input type="text" name="ph" id="ph" value="<?= @$edit->ph; ?>" />

									</div>

								</div>
								<!-- giảm xóc -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Thông số giảm xóc:</label>

									<div class="col-sm-5">

										 <input type="text" name="giam_xoc" id="giam_xoc" value="<?= @$edit->giam_xoc; ?>" />

									</div>

								</div>
								<!-- thông số lốp -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Thông số lốp:</label>

									<div class="col-sm-5">

										 <input type="text" name="thong_so_lop" id="thong_so_lop" value="<?= @$edit->thong_so_lop; ?>" />

									</div>

								</div>
								<!-- vành mâm xe -->
								<div class="form-group">

									<label class="col-sm-2 form-text"> Vành mâm xe:</label>

									<div class="col-sm-5">

										 <input type="text" name="vanh_mam_xe" id="vanh_mam_xe" value="<?= @$edit->vanh_mam_xe; ?>" />

									</div>

								</div>
								

							</div>

							<div id="menu2" class="tab-pane fade">

								<div class="col-sm-6">

									<div class="form-group">

										<label class="col-sm-12 form-text">

											Danh mục 										</label>

										<div class="col-sm-12" style="border: 1px solid #ccc;padding: 5px">

											<div class=" checklist_cate cat_checklist">

												<?php if (isset($cate_selected)) $cate_selected = $cate_selected;

												else $cate_selected = null;

												view_product_cate_checklist($cate, 0, '', @$cate_selected)?>

											</div>

										</div>

									</div>

									<div class="form-group">

										<label class="col-sm-12 text-form">

											Hãng sản xuất <?= @$edit->brand; ?>

										</label>

										<div class="col-sm-7">

											<select class="form-control input-sm" name="brand">

												<option value="">Lựa chọn</option>

												<?php show_cate(@$cat_brand, 0, '', @$edit->brand); ?>

											</select>

										</div>

									</div>

								</div>

								<div class="col-sm-6">

									<?php if(count($cat_locales)) : ?>

									<div class="form-group">

										<label class="col-sm-12 text-form">

											Xuất xứ

										</label>

										<div class="col-sm-7">

											<select class="form-control input-sm" name="locale">

												<option value="">Lựa chọn</option>

												<?php show_cate(@$cat_locales, 0, '', @$edit->locale); ?>

											</select>

										</div>

									</div>

									<?php endif;?>

								</div>

							</div>

							<div id="menu3" class="tab-pane fade">

								<div class="form-group">

									<label class="col-sm-12 form-text">Title SEO</label>



									<div class="col-sm-12">

										<input type="text" name="title_seo" placeholder=""

											   value="<?= @$edit->title_seo; ?>" class="form-control input-sm"/>

									</div>

								</div>



								<div class="form-group">

									<label class="col-sm-12 form-text">Key word SEO</label>

									<div class="col-sm-12">

										<input type="text" name="keyword_seo" placeholder=""

											   value="<?= @$edit->keyword_seo; ?>" class="form-control input-sm"/>

									</div>

								</div>

								<div class="form-group">

									<label class="col-sm-12 form-text">Description SEO:</label>

									<div class="col-sm-12">

										<textarea name="description_seo" placeholder="" rows="5" class="form-control input-sm"><?= @$edit->description_seo; ?></textarea>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-3" style="font-size: 12px">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title pull-left">Tùy chọn</h3>

                        <div class="clearfix"></div>

                    </div>

                    <div class="panel-body">

                        <label class="col-sm-12" style="padding-left: 0px">

                        Hiển thị

                        </label>

                        <div class="col-sm-12 view_checkbox" style="  border: 1px solid #ccc; padding-left: 0px; padding: 10px">

                            <div class="<?php if($show_home->active ==0){ echo'hidden'; } ?>">
                               <label class="checkbox-inline col-sm-6" style="margin-left:0px">
                               <input type="checkbox" value="1" name="home" <?= @$edit->home == 1 ? 'checked' : '' ?>>
                               <?=@$show_home->name?>
                                </label>
                            </div>
                            <div class="<?php if($show_hot->active ==0){ echo'hidden'; } ?>">
                               <label class="checkbox-inline col-sm-6" style="margin-left:0px">
                               <input type="checkbox" value="1" name="hot" <?= @$edit->hot == 1 ? 'checked' : '' ?>>
                               <?=@$show_hot->name?>
                                </label>
                            </div>
                            <div class="<?php if($show_focus->active ==0){ echo'hidden'; } ?>">
                               <label class="checkbox-inline col-sm-6" style="margin-left:0px">
                               <input type="checkbox" value="1" name="focus" <?= @$edit->focus == 1 ? 'checked' : '' ?>>
                               <?=@$show_focus->name?>
                                </label>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <br>

                        <div class="form-group">

                            <label class="col-sm-12 ">Hình ảnh đại diện</label>

                            <div class="col-sm-12">

                                <input type="file" name="userfile" id="input_img" onchange="handleFiles()" />

                            </div>

							<div class="clearfix"></div>

							<br>

							<div class="col-sm-12" id="view_img">

								<?php

								if(!empty($edit->image)){ ?>

									<img src="<?=base_url('upload/img/raovats/'.$edit->raovat_dir .'/'.$edit->image)?>" id="image_review" width="100%">

									<label class="col-sm-12 "></label>

									<button  type="button" onclick="delete_image($(this))" data-placement="raovat" class="btn btn-success btn-xs"><i class="fa fa-times"></i> Xóa ảnh</button>

								<?php }else{

									echo '<img src="'.base_url('img/noimage.png').'" id="noimage_review">';

								}

								?>

							</div>

                        </div>

                    </div>

                </div>

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



