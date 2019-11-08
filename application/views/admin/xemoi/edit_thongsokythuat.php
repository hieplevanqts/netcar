<style>
.thongsokythuat
  {
    width: 780px !important;
    width: 956px;
    margin: 0 auto;
    display: block;
  }
}
</style>
<div class="container">

<div class="col-sm-10">
<form action="" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div id="thongsokythuat" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm thông số kỹ thuật</h4>
      </div>
      <div class="modal-body">
      <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

		<p>Nội dung.</p>
    <textarea name="content" id="" cols="70" rows="10"><?=@$first->content;?></textarea>
    
		<script>
			 CKEDITOR.replace( 'content');
		</script>
      </div>
      <p>Chọn </p>
    <select name="vitri" id="" class="form-control">
      <option value="Động cơ & khung xe">Động cơ & khung xe</option>
      <option value="Ngoại thất">Ngoại thất</option>
      <option value="Nội thất">Nội thất</option>
      <option value="Ghế">Ghế</option>
      <option value="Tiện nghi">Tiện nghi</option>
      <option value="An ninh">An ninh</option>
      <option value="An toàn chủ động">An toàn chủ động</option>
      <option value="An toàn bị động">An toàn bị động</option>
      

    </select>
      <div class="modal-footer">
    <input type="hidden" name='id_item' value="<?=$first->id_sanpham?>">
	  <input type="hidden" name='id' value="<?=$first->id?>">
    
        <button type="submit" name="add_tinhnang" class="btn btn-default">Cập nhật</button>
      </div>
    </div>
	</form>
</div>
  </div>