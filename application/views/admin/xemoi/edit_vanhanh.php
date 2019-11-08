<div class="col-sm-6">
      
<form action="" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Sửa tính năng</h4>
      </div>
      <div class="modal-body">
        <p>Tiêu đề.</p>
		<input type="text" name="name" class="form-control" value="<?=@$first->name;?>">
		<p>Nội dung.</p>
		<textarea name="content" id="" cols="70" rows="10"><?=@$first->content;?></textarea>
		<p>Hình ảnh.</p>
		<input type="file" name="image">
    <br>
    <br>
    <img src="<?=base_url().@$first->image;?>" style="width:200px;height:180px;" alt="">
    <br>
    <br>
    <p>Chọn</p>
    <select name="vitri" id="" class="form-control">
      <option value="1">Vận hành</option>
      <option value="2">An toàn</option>
    </select>
      </div>
      <div class="modal-footer">
	  <input type="hidden" name='id' value="<?=@$first->id;?>">
        <button type="submit" name="add_tinhnang" class="btn btn-default">Cập nhật</button>
      </div>
    </div>
	</form>
  
</div>
<div class="col-sm-6">

</div>