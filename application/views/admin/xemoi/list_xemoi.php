<div class="col-sm-10">
  
<form action="<?=base_url('vnadmin/product/add_tinhnang')?>" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm tính năng nổi bật</h4>
      </div>
      <div class="modal-body">
     
        <p>Tiêu đề.</p>
		<input type="text" name="name" class="form-control">
		<p>Nội dung.</p>
		<textarea name="content" id="" cols="70" rows="10"></textarea>
		<p>Hình ảnh.</p>
		<input type="file" name="image">
      </div>
      <p>Chọn </p>
    <select name="vitri" id="" class="form-control">
      <option value="1">Vận hành</option>
      <option value="2">An toàn</option>
    </select>
      <div class="modal-footer">
	  <input type="hidden" name='id_item' value="<?=$id_item?>">
        <button type="submit" name="add_tinhnang" class="btn btn-default">Thêm</button>
      </div>
    </div>
	</form>

</div>