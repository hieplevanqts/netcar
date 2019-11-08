<section class="col-md-12 col-xs-12">
                     <div class="heard_title lightSpeedIn wow">
                        <h3 class="title_menu"><a href="<?php echo base_url('tin-rao')?>">Rao vặt </a></h3>
                     </div>
                     <div class="row">
                     <?php if(isset($lists)){
                        foreach($lists as $value){
                        ?>
                        <div class="col-md-6">
                           <div class="list_news_item">
                              <div class="news_item">
                                 <div class="img_news_item h_6511">
                                    <a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html" class="" title="">
                                    <img src="<?=base_url().$value->img_dir.$value->image?>" class="w_100 pulse wow" alt="" rel="" >
                                    </a>
                                 </div>
                                 <div class="info_news_item">
                                    <div class="name_news_item lightSpeedIn wow">
                                       <a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><?=Limitstring($value->name,30);?></a>
                                    </div>
                                    <div class="clearfix-5"></div>
                                    <div class="cmt_news_item">
                                       <ul class="properties">
                                       <?php if(isset($value->status)&&$value->status==1){ echo '<li><a href="">Mới</a></li>';} else {
                                          echo '<li><a href="">Qua sử dụng</a></li>';
                                       }?>
                                          
                                          <li><a href=""><?=$value->xuat_xu?></a></li>
                                          <li><a href=""><?=$value->hop_so?></a></li>
                                          <li><a href=""><?=$value->nam_san_xuat?></a></li>
                                          <li><a href=""><?=$value->doi_xe?></a></li>
                                          <li><a href=""><?=$value->nhien_lieu?></a></li>
                                       </ul>
                                       <div class="clearfix"></div>
                                       <?php if($value->price < 999000000):?>
                          <span class="ravat_rice"><?=number_format($value->price);?> Triệu</span>
                <?php endif;?>
                <?php if($value->price >= 1000000000):?>
                          <span class="ravat_rice"><?=number_format($value->price/1000000000);?> Tỷ</span>
                <?php endif;?>
                 <div class="clearfix-5"></div>
                            <span name="create_at" class="time"><?=$value->create_at;?></span>


                                       
                                  
                                    </div>
                                    <div class="btn_show_news_item">
                                       <a href="#" title=" " rel=""> <?=$value->tinh_thanh_pho;?></a>
                                       <a href="#" title=" " rel="" class="phone"> <i class="fa fa-phone" aria-hidden="true"></i><?=$value->phone_nguoi_ban;?></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php }}?>
                       
                        <div class="clearfix-15"></div>
                        <div class="chitiet">
                           <a href="<?php echo base_url('tin-rao')?>.html"> xem tất cả</a>
                        </div>
                     </div>
                  </section>