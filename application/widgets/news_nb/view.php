<section class="col-md-12 col-xs-12">
                     <div class="heard_title lightSpeedIn wow">
                        <h3 class="title_menu"><a href=""> Tin tức - Tư vấn </a></h3>
                        <ul class="menu_child ">
                        <?php if(isset($news_cate)){
                           foreach($news_cate as $value){
                           ?>
                           <li><a href="<?php if(isset($value->alias)){echo base_url('danh-muc-tin/').$value->alias;}?>.html"><?php if(isset($value->name)){echo $value->name;}?></a></li>
                           <?php }}?>
                        </ul>
                     </div>
                     <div class="row">

                     <?php if(isset($news)){
                         foreach($news as $value){
                         ?>
                        <div class="col-md-3">
                           <div class="box_tt">
                              <div class="img_tt h_711">
                                 <img src="<?= base_url($value->image) ?>" class="w_100 pulse wow" style="height: 250px;" alt="">
                              </div>
                              <div class="lightSpeedIn wow">
                                 <h3 class="tit_box_tt"><a href="<?php echo base_url('tin-tuc/').$value->alias;?>.html"><?=$value->title;?></a></h3>
                                 <div class="txt_box_tt">
                                   <?=$value->description;?> 
                                 </div>
                              </div>
                           </div>
                        </div>
                         <?php }}?>
                        <div class="chitiet lightSpeedIn wow">
                           <a href="<?php echo base_url('tin-tuc')?>.html"> xem tất cả</a>
                        </div>
                     </div>
                  </section>