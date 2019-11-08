<div id="chonmauModal" class="modal fade chonmau" role="dialog">
	<div class="modal-dialog modal-md width_duong">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myLargeModalLabel" style="font-weight: bold; text-transform: uppercase; text-align: center">Bạn chưa chọn size sản phẩm</h4>
			</div>
			<div class="modal-body">
				<?php if(isset($p_color) && !empty($p_color)){ ?>
				<div class="info-prod info-price prod-save-money hidden">
					<span class="title" style="top: -10px;">Màu sắc:</span>
					<ul class="color">
						<?php
						$i = 1;
						foreach ($p_color as $img){ ?>
						<input type="hidden" value="<?php echo $img->color; ?>"  id="color_<?php echo $i; ?>">
						<li style="background: <?php echo $img->color; ?>" class="select_product" onclick="click_color($('#color_<?php echo $i; ?>').val())" title="<?php echo $img->name; ?>"></li>
						<?php $i++; if($i==5){ ?> <span class="clearfix"></span> <?php } } ?>
					</ul>
					<script>
						function click_color(vl){
							if(vl){
								$('#color_id').val(vl);
							}
						}
						function click_size(vl){
							if(vl){
								$('#size_id').val(vl);
							}
						}

					</script>
				</div>
				<?php } ?>
				<div class="clearfix" ></div>
				<?php $i=0; if(count($size) > 0){ ?>
				<div class="info-prod info-price prod-save-money">
                    <span class="title" style="">
                            Kích thước:
                    </span>
                    <ul class="size" >
                        <?php  foreach ($size as $img){ $i++;  ?>
                            <input type="hidden" name="size" id="size_<?php echo $i;  ?>" value="<?php echo $img->name_size;  ?>">
                            <li onclick="click_size($('#size_<?php echo $i;  ?>').val())" title="<?php echo $img->name_size; ?>"><?php echo $img->name_size; ?></li>
                            <?php
                            if($i==6){ ?>
                              <span class="clearfix"></span>
                         <?php   }
                        }?>
                    </ul>
                </div>
				<?php } ?>
				<div class="cart" style="height:50px;">
					<button type="button" onclick="addToCart()" class="btn btn-danger pull-right">Đặt mua</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	// function click_color(vl){
	// 	if(vl){
	// 		$('#color_id').val(vl);
	// 	}
	// }
	function click_size(vl){
		if(vl){
			$('#size_id').val(vl);
		}
	}
</script>
<script>
    $('.color > li').click(function(){
        var hs = $(this).hasClass('active');
        if (!hs) {
            $('.color > li').removeClass('active');
            $(this).addClass('active');
        }
    });
    $('.size > li').click(function(){
        var hs = $(this).hasClass('active1');
        if (!hs) {
            $('.size > li').removeClass('active1');
            $(this).addClass('active1');
        }
    });
</script>