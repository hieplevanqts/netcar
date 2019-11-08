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
<div class="col-sm-6">
	<h4 class="text-center">Danh sách thông số kỹ thuật</h4>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Nội dung</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($list_thongsokythuat)){
        $i=1;
        foreach($list_thongsokythuat as $value){
        ?>
      <tr>
        <td><?=$i;?></td>
        <td><?=$value->vitri;?></td>
        <td><?=$value->content;?></td>
        <td><a href="<?=base_url('vnadmin/product/edit_thongsokythuat?id=').$value->id?>">Sửa</a> | <a href="<?=base_url('vnadmin/product/del_thongsokythuat?id=').$value->id?>">Xóa</a></td>
      </tr>
        <?php $i++; }}?>
    </tbody>
	</table>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Thêm</button>
</div>
<div class="col-sm-6"></div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<form action="<?=base_url('vnadmin/product/add_thongsokythuat')?>" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div id="thongsokythuat" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm thông số kỹ thuật</h4>
      </div>
      <div class="modal-body">
      <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

		<p>Nội dung.</p>
		<textarea name="content" id="" cols="70" rows="10"></textarea>
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
      <option value="Ngoại thất">An toàn bị động</option>
      

    </select>
      <div class="modal-footer">
	  <input type="hidden" name='id_item' value="<?=$id_item?>">
        <button type="submit" name="add_tinhnang" class="btn btn-default">Thêm</button>
      </div>
    </div>
	</form>
  </div>
  
</div>