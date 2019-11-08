<?php



   #****************************************#



   # * @Author: Tran Manh                   #



   # * @Email: dangtranmanh051187@gmail.com #



   # * @Website: http://qts.com             #



   # * @Copyright: 2017 - 2018              #



   #****************************************#



   ?>



<script src="http://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>



<section class="content-header">
   <h1>
      <?=$btn_name;?> sản phẩm
      <small></small>
   </h1>
   <ol class="breadcrumb">

      <li><a href="<?= base_url('vnadmin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
      <li class="active"><a href="<?= base_url('vnadmin/product/products')?>">Danh sách sản phẩm</a></li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="history.back()" style="cursor: pointer" title="Quay lại trang trước" ><i class="fa fa-reply"></i></a>
   </ol>
</section>
<section class="content content_fix"    ng-app="CRUED">
   <!-- Page Heading -->
   <div class="row">
      <form class="validate form-horizontal" role="form" id="form-bk" method="POST" action="" enctype="multipart/form-data">
         <input type="hidden" name="edit" id="id_edit" value="<?= @$edit->id; ?>">
         <input type="hidden" name="addnews" value="1">
         <input type="hidden" id="catcheck" value="pro">
         <div class="col-md-9" style="font-size: 12px">
         <?php if(isset($edit->id)){?>
         <h4><a href="<?=base_url('vnadmin/product/list_xemoi?id=').@$edit->id?>">Thêm tính năng</a></h4>
         <h4><a href="<?=base_url('vnadmin/product/list_thongsokythuat?id_item=').$edit->id?>">Thông số</a></h4>
         <?php }?>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="alert alert-dismissible" style="display:none;"></div>
                  <ul class="nav nav-tabs">
                     <li class="active"><a data-toggle="tab" href="#home">Chi tiết</a></li>
                     <li><a data-toggle="tab" href="#menu1">Dữ liệu</a></li>
                     <li><a data-toggle="tab" href="#menu2">Liên kết</a></li>
                     <li><a data-toggle="tab" href="#menu3">Thẻ seo</a></li>
                     <li><a data-toggle="tab" href="#menu4">ngoại thất</a></li>
                     <?php if(@$listimg_tinhnang != ''){?>
                     <li><a data-toggle="tab" href="#menu5">Tính năng</a></li>  
                     <?php }?>                  
                     <li class="pull-right">
                        <button type="button" <?php if (isset ($edit)) { ?> onclick="editItem()" <?php }else{ ?> onclick="createItem()" <?php } ?> class="btn btn-success btn-xs" name="add_news"><i
                           class="fa fa-check"></i> <?= @$btn_name; ?>
                        </button>
                     </li>
                     <?php if(@$listimg_vanhanh != ''){?>
                     <li><a data-toggle="tab" href="#menu6">Vận hành  </a> </li>
                     <?php }?>
                  </ul>
               </div>
               <div class="panel-body">
                  <div class="tab-content">
                     <div id="home" class="tab-pane fade in active">
                        <div class="form-group">
                           <label class="col-sm-12 form-text">Tên sản phẩm :</label>
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
                           <label class="col-sm-12 form-text">Số ghế ngồi :</label>
                           <div class="col-sm-12" id="error-alias">
                              <input type="text" class="form-control input-sm validate[required]" name="so_ghe"
                                 value="<?= @$edit->so_ghe; ?>" id="alias" placeholder=""/>
                          </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-12 form-text">Vận hành :</label>
                           <div class="col-sm-12" id="error-alias">
                              <input type="text" class="form-control input-sm validate[required]" name="van_hanh"
                                 value="<?= @$edit->van_hanh; ?>" id="alias" placeholder=""/>
                          </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-12 form-text">Động cơ :</label>
                           <div class="col-sm-12" id="error-alias">
                              <input type="text" class="form-control input-sm validate[required]" name="dong_co"
                                 value="<?= @$edit->dong_co; ?>" id="alias" placeholder=""/>
                          </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-12 form-text">Màu xe:</label>
                           <div class="col-sm-12" id="error-alias">
                              <input type="text" class="form-control input-sm validate[required]" name="mau_xe"
                                 value="<?= @$edit->mau_xe; ?>" id="alias" placeholder=""/>
                          </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-12 form-text" for="exampleInputFile">Chọn thêm ảnh sản phẩm</label>
                           <div class="col-sm-12">
                              <input type="file" accept="image/*" id="exampleInputFile" multiple name="images[]">
                              <p class="help-block">Ảnh sản phẩm cần rõ nét.</p>
                           </div>
                           <div class="img-responsive col-sm-12">
                              <?php if(count(@$listimg) > 0) :?>
                              <?php foreach (@$listimg as $img) {  ?>
                              <div class="col-sm-3" id="<?= $img->id ?>" >
                                 <img src="<?= base_url().$img->image ?>" class="img-thumbnail" style="max-width:120px;height:100px; ">
                                 <span data-id="<?= $img->id ?>" data-placement="p_images" onclick="removeimg($(this))" class="btn btn-default"> <i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                 <label  class="col-sm-12">tên ảnh</label>
                                 <input type="text" data-id="<?= $img->id ?>" data-view="name" data-placement="p_images" class="form-control input-sm " oninput="update_value($(this))" name="name_image"
                                    value="<?= @$img->name; ?>" placeholder=""/>
                             </div>
                              <?php } ?>
                              <?php endif; ?>
                           </div>
                        </div>
<!-- ************************ Hình ảnh nội thất ************************ -->
                        <div class="form-group">
                           <label class="col-sm-12 form-text" for="exampleInputFile">Chọn thêm ảnh nội thất xe</label>
                           <div class="col-sm-12">
                              <input type="file" accept="image/*" id="exampleInputFile" multiple name="images_noithat[]">
                              <p class="help-block">Ảnh sản phẩm cần rõ nét.</p>
                           </div>
                           <div class="img-responsive col-sm-12">
                              <?php if(count(@$listimg_noithat) > 0) :?>
                              <?php foreach (@$listimg_noithat as $img) {  ?>
                              <div class="col-sm-3" id="<?= $img->id ?>" >
                                 <img src="<?= base_url().$img->image ?>" class="img-thumbnail" style="max-width:120px;height:100px; ">
                                 <span data-id="<?= $img->id ?>" data-placement="p_images" onclick="removeimg($(this))" class="btn btn-default"> <i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                 <label  class="col-sm-12">tên ảnh</label>
                                 <input type="text" data-id="<?= $img->id ?>" data-view="name" data-placement="p_images" class="form-control input-sm " oninput="update_value($(this))" name="name_image"
                                    value="<?= @$img->name; ?>" placeholder=""/>
                             </div>
                              <?php } ?>
                              <?php endif; ?>
                           </div>
                        </div>

                        <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script> -->
                        <div class="form-group">
                           <label  class="col-sm-12">Mô tả</label>
                           <div class="col-sm-12">
                              <textarea name="description" class="form-control input-sm" placeholder=""
                                 id="ckeditor_description" rows="4"><?=@$edit->description;?></textarea>
                                 <script>
                                          CKEDITOR.replace( 'description' );
                                 </script>
                              </div>
                        </div>
                        <!--  -->
                        <div class="form-group">
                           <label  class="col-sm-12">Mô tả ngoại thất</label>
                           <div class="col-sm-12">
                              <textarea name="mota_ngoaithat" class="form-control input-sm" placeholder=""
                                 id="ckeditor_description2" rows="4"><?=@$edit->mota_ngoaithat;?></textarea>
                           </div>
                        </div>
                        <!--  -->
                        <div class="form-group">
                           <label  class="col-sm-12">Mô tả nội thất</label>
                           <div class="col-sm-12">
                              <textarea name="mota_noithat" class="form-control input-sm" placeholder=""
                                 id="ckeditor_description3" rows="4"><?=@$edit->mota_noithat;?></textarea>
                           </div>
                        </div>
                        <?php if (isset($thuoctinh)) {
                            $stt=0;
                            foreach ($thuoctinh as $key=>$v) { $stt++;
                              if($v->type=='textarea'){
                                ?>
                         <div class="form-group">
                           <label  class="col-sm-12"><?=@$v->name?></label>
                           <div class="col-sm-12">
                           <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script> -->
                              <textarea name="content[]" class="form-control input-sm" placeholder=""
                                 id="ckeditor_detail<?=$stt?>" rows="4"><?=@$v->content;?></textarea>
                                 <script>
                                          CKEDITOR.replace( 'content[]' );
                                 </script>
                           </div>
                        </div>
                        <?php }  } }?>     
                     </div>
                     <div id="menu1" class="tab-pane fade">
                        <div class="form-group">
                           <label  class="col-sm-2">Mã sản phẩm :</label>
                           <div class="col-sm-5">
                                <input type="text" name="code"
                              class=" form-control input-sm"
                                 value="<?= @$edit->code; ?>" placeholder=""/>
                           </div>
                       </div>

                         <?php if (isset($thuoctinh)) {



                            $stt=0;



                            foreach ($thuoctinh as $key=>$v) { $stt++;



                              if($v->type!=='textarea'){



                                ?>



                         <div class="form-group">



                           <label  class="col-sm-2"><?=@$v->name?> :</label>



                           <div class="col-sm-5">



                                <input type="text" name="content[]"



                              class=" form-control input-sm"



                                 value="<?= @$v->content; ?>" placeholder=""/>



                           </div>



                        </div>



                        <?php }  } }?>     







                        <div class="form-group">



                           <label class="col-sm-2 form-text">Giá cũ :</label>



                           <div class="col-sm-5">



                              <input type="text" name="price" id="product_price"



                                 data-v-max="9999999999999" data-v-min="0"



                                 class="auto form-control input-sm"



                                 value="<?= @$edit->price; ?>" placeholder=""/>



                           </div>



                        </div>



                        <div class="form-group">



                           <label class="col-sm-2 form-text">Giá bán :</label>



                           <div class="col-sm-5">



                              <input type="text" name="price_sale" id="product_price_sale"



                                 data-v-max="9999999999999" data-v-min="0"



                                 class="auto form-control input-sm"



                                 value="<?= @$edit->price_sale; ?>" placeholder=""/>



                           </div>



                        </div>



                        <div class="form-group hidden">



                           <label class="col-sm-2 form-text">Hoạt động :</label>



                           <div class="col-sm-2">



                              <select name="active" class="form-control">



                                 <option <?php if(@$edit->active==1){echo "selected";} ?><?php if (isset ($edit)) { }else{ echo'selected'; } ?> value="1">Bật</option>



                                 <option <?php if (isset ($edit)) { ?> <?php if(@$edit->active==0){echo "selected";} }?> value="0">Tắt</option>



                              </select>



                           </div>



                        </div>                  <div class="form-group">                     <label class="col-sm-2 form-text">Tình trạng :</label>                     <div class="col-sm-2">                       <select name="status" class="form-control">                          <option <?php if(@$edit->status==1){echo "selected";} ?><?php if (isset ($edit)) { }else{ echo'selected'; } ?> value="1">Còn hàng</option>                           <option <?php if (isset ($edit)) { ?> <?php if(@$edit->status==0){echo "selected";} }?> value="0">Hết hàng</option>                       </select>                     </div>                  </div>



                        <div class="form-group">
                           <label  class="col-sm-2">Thẻ tags</label>
                           <div class="col-sm-10">
                              <input class="hidden" name="tags" id="mySingleField" value="<?php
                                 if(count(@$tag)){
                                    foreach($tag as $tags){
                                       echo $tags->name.',';
                                    }
                                 }
                                 ?>">
                              <ul id="allowSpacesTags"></ul>
                              <input class="hidden" id="myAnchor" value="" >
                              <span>Các thẻ tags cách nhau bởi dấu phẩy (,)</span>
                           </div>
                        </div>
                        <!-- Up ảnh theo màu xe -->                       
                        <div class="form-group">
                           <label  class="col-sm-3">Up ảnh theo màu xe</label>
                           <div class="col-sm-6">
                              <input type="file" name="file_img" value="">
                           </div>
                           <div class="col-sm-3">
                              <select name="file_color" id="" class="form-control">
                                    <option value="">chọn</option>
                                    <?php show_cate_menu($color,$parent=0,$text='',$edit=null) ?>
                              </select>
                           </div>
                        </div>



                        



                     </div>



                      <div id="menu2" class="tab-pane fade">



                        <div class="col-sm-4">
                           <div class="form-group">
                              <label class="col-sm-12 form-text">
                              Danh mục                               </label>
                              <div class="col-sm-12" style="border: 1px solid #ccc;padding: 5px">
                                 <div class=" checklist_cate cat_checklist">
                                    <?php if (isset($cate_selected)) $cate_selected = $cate_selected;
                                       else $cate_selected = null;
                                       view_product_cate_checklist($cate, 0, '', @$cate_selected)?>
                                 </div>
                              </div>
                           </div>
                       </div>



                         <?php if(isset($show_listColor)){ ?>



                        <div class="col-sm-4">



                           <div class="form-group">



                              <label class="col-sm-12 form-text"><?=@$show_listColor->name?></label>



                              <div class="col-sm-12" style="border: 1px solid #ccc;padding: 5px">



                                 <div class=" checklist_cate cat_checklist" style="padding:0px 20px;">



                                    <?php if (isset($color_selected)) $color_selected = $color_selected;



                                       else $color_selected = null;



                                       view_color_cate_checklist($color, 0, '', @$color_selected)?>



                                 </div>



                              </div>



                           </div>



                        </div>



                        <?php } ?>



                        <?php if(isset($show_listOption)){ ?>



                        <div class="col-sm-4">



                           <div class="form-group">



                              <label class="col-sm-12 form-text"><?=@$show_listOption->name?></label>



                              <div class="col-sm-12" style="border: 1px solid #ccc;padding: 5px">



                                 <div class=" checklist_cate cat_checklist" style="padding:0px 20px;">



                                    <?php if (isset($size_checked)) $size_checked = $size_checked;



                                       else $size_checked = null;



                                       view_size_cate_checklist($size, 0, '', @$size_checked)?>



                                 </div>



                              </div>



                           </div>



                        </div>



                        <?php } ?>



                        <div class="col-sm-4">



                           <?php if(isset($show_listBrand)){ ?>



                           <div class="form-group">



                              <label class="col-sm-12 text-form">



                              <?=@$show_listBrand->name?>



                              </label>



                              <div class="col-sm-7">



                                 <select class="form-control input-sm" name="brand">



                                    <option value="">Lựa chọn</option>



                                    <?php show_cate(@$cat_brand, 0, '', @$edit->brand); ?>



                                 </select>



                              </div>



                           </div>                      



                           <?php } ?>



                           <?php if(isset($show_listLocale)){ ?>                      



                           <div class="form-group">



                              <label class="col-sm-12 text-form">



                              <?=@$show_listLocale->name?>



                              </label>



                              <div class="col-sm-7">



                                 <select class="form-control input-sm" name="locale">



                                    <option value="">Lựa chọn</option>



                                    <?php show_cate(@$cat_locales, 0, '', @$edit->locale); ?>



                                 </select>



                              </div>



                           </div>



                           <?php } ?>



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
<!-- ************************************************************************************************** -->
<div id="menu4" class="tab-pane fade">
<div class="form-group">
   <label class="col-sm-12 form-text">Tiêu đề:</label>
  <div class="col-sm-12">
      <input type="text" name="title_xemoi" placeholder=""
         value="<?= @$edit->title_xemoi; ?>" class="form-control input-sm"/>
   </div>
</div>
<div class="form-group">
   <label class="col-sm-12 form-text">Up ảnh chi tiết ngoại thất xe:</label>
   <div class="col-sm-12">
      <input type="file" name="image_xemoi[]" value="<?= @$edit->review_detail; ?>" multiple/>
   </div>

</div>
                           <div class="img-responsive col-sm-12">
                              <?php if(count(@$listimg_ngoaithat) > 0) :?>
                              <?php foreach (@$listimg_ngoaithat as $img) {  ?>
                              <div class="col-sm-3" id="<?= $img->id ?>" >
                                 <img src="<?= base_url().$img->image ?>" class="img-thumbnail" style="max-width:120px;height:100px; ">
                                 <span data-id="<?= $img->id ?>" data-placement="product_xemoi_config" onclick="removeimg($(this))" class="btn btn-default"> <i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                 <label  class="col-sm-12">tên ảnh</label>
                                 <input type="text" data-id="<?= $img->id ?>" data-view="name" data-placement="p_images" class="form-control input-sm " oninput="update_value($(this))" name="name_image"
                                    value="<?= @$img->name; ?>" placeholder=""/>
                             </div>
                              <?php } ?>
                              <?php endif; ?>
                           </div>
<div class="form-group">
   <label class="col-sm-12 form-text">Mô tả chi tiết:</label>
   <div class="col-sm-12">
      <textarea name="review_detail" placeholder="" rows="5" class="form-control input-sm"><?= @$edit->review_detail; ?></textarea>
   </div>
</div>
</div>
<!-- **************************************************************************************************** -->
<div id="menu5" class="tab-pane fade">
<table class="table table-bordered">
                                 <thead>
                                 <tr>
                                       <th>STT</th>
                                       <th>Tiêu đề</th>
                                       <th>Nội dung</th>
                                       <th>Hình</th>
                                       <th>Action</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php if(isset($listimg_tinhnang)){
                                    $i=1;
                                    foreach($listimg_tinhnang as $value){
                                    ?>
                                       <tr>
                                             <td><?=$i;?></td>
                                             <td><?=@$value->name;?></td>
                                             <td><?=@$value->content;?></td>
                                             <td><img src="<?=base_url(@$value->image);?>" style="width: 50px;height:50px;" alt=""></td>
                                             <td>
                                             <a href="<?=base_url('vnadmin/product/edit_tinhnang?id=').$value->id.'&id_item='.@$value->id_item;?>">Sửa</a>                                             
                                             <a href="<?=base_url('vnadmin/product/del_tinhnang?id=').$value->id.'&id_item='.@$value->id_item;?>">Xóa</a>
                                             </td>
                                       </tr>
                                    <?php $i++; }} ?>
                                 </tbody>
</table>


                                    </div>
<!-- **************************************************************************************************** -->
<div id="menu6" class="tab-pane fade">
<table class="table table-bordered">
                                 <thead>
                                 <tr>
                                       <th>STT</th>
                                       <th>Tiêu đề</th>
                                       <th>Nội dung</th>
                                       <th>Hình</th>
                                       <th>Action</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php if(isset($listimg_vanhanh)){
                                    $i=1;
                                    foreach($listimg_vanhanh as $value){
                                    ?>
                                       <tr>
                                             <td><?=$i;?></td>
                                             <td><?=@$value->name;?></td>
                                             <td><?=@$value->content;?></td>
                                             <td><img src="<?=base_url(@$value->image);?>" style="width: 50px;height:50px;" alt=""></td>
                                             <td>
                                             <a href="<?=base_url('vnadmin/product/edit_vanhanh?id=').$value->id.'&id_item='.@$value->id_item;?>">Sửa</a>                                             
                                             <a href="<?=base_url('vnadmin/product/del_vanhanh?id=').$value->id.'&id_item='.@$value->id_item;?>">Xóa</a>
                                             </td>
                                       </tr>
                                    <?php $i++; }} ?>
                                    
                                   
                                 </tbody>  
                        </table>
                  </div>
  
   <!-- /.container-fluid -->

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



                        <div class="<?php if($show_coupon->active ==0){ echo'hidden'; } ?>">



                           <label class="checkbox-inline col-sm-6" style="margin-left:0px">



                           <input type="checkbox" value="1" name="coupon" <?= @$edit->coupon == 1 ? 'checked' : '' ?>>



                           <?=@$show_coupon->name?>



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
                        <img src="<?=base_url('upload/img/products/'.$edit->pro_dir .'/'.$edit->image)?>" id="image_review" width="100%">
                        <label class="col-sm-12 "></label>
                        <button  type="button" onclick="delete_image($(this))" data-view="upload/img/products/<?=$edit->pro_dir;?>" data-placement="product" class="btn btn-success btn-xs"><i class="fa fa-times"></i> Xóa ảnh</button>
                        <?php }else{
                           echo '<img src="'.base_url('img/noimage.png').'" id="image_review">';
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
<script src="<?=base_url('assets/js_admin/general_add.js')?>"></script>
<!--- thẻ tag ----->
<link rel="stylesheet" href="<?= base_url('assets/css_admin/back_end/jquery.tagit.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/css_admin/back_end/tagit.ui-zendesk.css')?>">
<script src="<?= base_url('assets/js_admin/jquery-ui.min.js')?>"></script>
<script src="<?= base_url('assets/js_admin/tag-it.min.js')?>"></script>
<script src="<?= base_url('assets/js_admin/js_tag.js')?>"></script>
<!-- lây giau phẩy trong giá tiền và chỉ nhập số -->
<script src="<?=base_url('assets/plugin/slimscroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?= base_url('assets/plugin/autonumber/autoNumeric.js') ?>"></script>
<script src="<?= base_url('assets/plugin/autonumber/jquery.number.js') ?>"></script>
 <?php if (isset($thuoctinh)) {
    $stt=0;
    foreach ($thuoctinh as $key=>$v) { $stt++;
   if($v->type=='textarea'){
        ?>
<script type="text/javascript">
   $(document).ready(function(){
      url= base_url() +'assets/ckfinder/';
      // ckeditor mo ta không full
      CKEDITOR.replace( 'ckeditor_detail<?=$stt?>', {
         height:200,
            title:false,
         // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: url+'ckfinder.html',
            filebrowserImageBrowseUrl: url+'ckfinder.html?type=Images',
            filebrowserUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: url+'core/connector/php/connector.php?command=QuickUpload&type=Images'
      } );
   }); 
</script>
 <?php } } }?>
<script type="text/javascript">
   $('#product_price,#product_price_sale').autoNumeric(0);
   $('.cat_checklist').slimScroll({
       height: '300px',
       alwaysVisible: true,
       railVisible: true
   });
</script>



