<article>

  <div class="clearfix"></div>

     <div class="col-md-12 col-sm-12">

                <div class="row"> 

                    <div class="root_content imgRow">

                        <div class="qts_content_home">

                            <div class="clearfix-20"></div>
              <div class="container">
              <div class="prod-list-link">
                                <h2 class="section-title"><a href="javascript:void(0)">Kết quả tìm kiếm</a></h2>
                            </div>
              <div class="clearfix-15"></div>
                        <div class="list-new-car clearfix">
              
              <?php if(isset($lists)):
                foreach($lists as $value):
                ?>
                <div class="box-new-car">
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-480-12">
                    <div class="img_new_car">
                      <a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><img src="<?php if(isset($value->image)){echo base_url().$value->img_dir.$value->image;}?>"></a>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-480-12">
                    <div class="text-new-car">
                    <h2><a href="<?=base_url('tin-rao-chi-tiet/').$value->alias;?>.html"><i class="fa fa-star" aria-hidden="true"></i> <?=$value->name?></a></h2>
                    
                    <div class="detail-new-car">
                      <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                <?php if($value->status == 1):?><p><i class="fa fa-info-circle" aria-hidden="true">Mới (Chưa bóc tem) </i> </p><?php endif;?>
                <?php if($value->status != 1):?><p><i class="fa fa-info-circle" aria-hidden="true">Qua sử dụng </i> </p><?php endif;?>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?=$value->nam_san_xuat;?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$value->xuat_xu;?> </p>
                            <p><i class="fa fa-car" aria-hidden="true"></i> <?php if(isset($dong_xe->name)){echo $dong_xe->name;}?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div class="detail-car">
                            <p><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$value->hop_so;?></p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?=$value->nhien_lieu;?></p>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 col-480-3">
                          <div style="width: 100%;" class="detail-car-number">
                          <?php if($value->price < 999000000):?>
                          <p><?=number_format($value->price);?> Triệu</p>
                <?php endif;?>
                <?php if($value->price >= 1000000000):?>
                          <p><?=number_format($value->price/1000000000);?> Tỷ</p>
                <?php endif;?>
                            <p name="create_at" class="date"><?=$value->create_at;?></p>
                          </div>
                        </div>
                      </div>
                      <div class="add-phone">
                        <p>Hà Nội</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <?=$value->phone_nguoi_ban;?></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
                <?php endforeach; endif;?>
              
            
            </div>
             <div class="phantrang_prod">

                            <?php echo $this->pagination->create_links();?>

                        </div>
              </div>

                    </div>

                       

                    </div>

                 <!-- end mid_content --><!-- begin right_content --></div>

            </div><!-- end right_content -->

<div class="clearfix"></div>

</article>