					<?php if(isset($dichvu)){
						
						foreach($dichvu as $value){
							if($value->id > 6 && $value->id < 9){
						?>
					<section class="col-md-12 col-xs-12">
                     <div class="carFeatured bounceInRight wow ">
                        <div class=" heard_title_xecu">
                           <h3 class="tit_mid"><a href="<?=base_url('tin-tuc/').$value->alias?>.html"><?=@$value->name;?></a></h3>
                        </div>
                        <div class="row-12 info_step">

						<?php if(isset($value->items)){
							foreach($value->items as $value){
							?>
                           <div class="col-md-3 col-xs-6 col-480-12 pdd-12">
                              <div class="box_info">
                                 <div class="img_icon">
                                    <a href="<?=base_url('tin-tuc/').$value->alias?>.html" class="h_1"><img src="<?=base_url(@$value->image);?>" alt="" class="swing wow"></a>
                                 </div>
                                 <div style="text-align:justify;" class="sub_info">
                                    <h2><a href="<?=base_url('tin-tuc/').$value->alias?>.html"><?=@$value->title;?></a></h2>
									<?=limitstring(@$value->description,500);?>
                                 </div>
                              </div>
                           </div>
							<?php }}?>
                        </div>
                     </div>
                  </section>
							<?php }
							if($value->id == 9)
							{?>
                  <div class="clearfix"></div>
				  <section class="col-md-12 col-xs-12 bounceInDown wow">
                     <div class="carFeatured ">
                        <div class=" heard_title_xecu">
                           <h3 class="tit_mid"><a href="<?=base_url('tin-tuc/').$value->alias?>.html"><?=@$value->name;?></a></h3>
                        </div>
                     </div>
                     <div class="row">
						<?php if(isset($value->items)){
								foreach($value->items as $value){
								?>
                        <div class="col-md-3">
                           <div class="box_tt">
                              <div class="img_tt h_711">
                                 <a href="<?=base_url('tin-tuc/').$value->alias?>.html"><img src="<?=base_url(@$value->image);?>" class="w_100" style="height:180px;" alt=""></a>
                              </div>
                              <h3 style="text-align:justify;" class="tit_box_tt"><a href="<?=base_url('tin-tuc/').$value->alias?>.html"><?=@$value->title;?></a></h3>
                              <div style="text-align:justify;" class="txt_box_tt">
							  <?=limitstring(@$value->description,300,' [..]');?>
                              </div>
                           </div>
                        </div>
							<?php }}?>
							<div class="chitiet">
                           <a href="<?=base_url('tin-tuc')?>.html"> xem tất cả</a>
                        </div>
                        </div>
                     </div>
                  </section>




                  <?php }}}?>



                  