<article>

  <div class="clearfix"></div>

     <div class="col-md-12 col-sm-12">

                <div class="row"> 

                    <div class="root_content imgRow">

                        <div class="qts_content_home">

                            <div class="clearfix-20"></div>

                            <div class="prod-list-link">
                                <h2 class="section-title"><a href="javascript:void(0)">Kết quả tìm kiếm</a></h2>
                            </div>
                            

                        <div class="clearfix-15"></div>

                        <?php if (count($lists)) { foreach ($lists as $key => $pro) { ?>

                        <!-- begin content_search -->
                            <div class="col-sm-3 col-xs-6 p50">

                                                <div class="home-prod">

                                                    <div class="relative thumbnail">

                                                        <a href="<?= base_url('san-pham/'.@$pro->alias.'.html')?>" class="reRenderImg relative">

                                                        <img src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_2_'.@$pro->image)?>" alt="<?= @$pro->name ?>" class="w1">

                                                        <img id="id_image<?=@$pro->id?>" src="<?=base_url('upload/img/products/'.@$pro->pro_dir.'/thumbnail_3_'.@$pro->image)?>" class=" img_fly" >

                                                        </a>

                                                        <div class="dp-spread">

                                                            <div class="dp-bot-center">

                                                                

                                                                <a href="javascript:void(0)" class="add-cart" onclick="play(event)" data-id="id_image<?=@$pro->id?>" data-value="<?=@$pro->id?>"><img src="<?= base_url()?>img/cart_w.png"  alt="Thêm vào giỏ" title="Thêm vào giỏ" > Thêm vào giỏ</a>

                                                                <a href='#quick_views<?=@$pro->id?>' data-alias='abcxyz' class="quick_views" data-toggle="modal" ><img src="<?= base_url()?>img/zoom_w.png" alt="Xem nhanh" title="Xem nhanh"></a>

                                                                <a href="<?= base_url('san-pham/'.@$pro->alias.'.html')?>" class="view_product"><img src="<?= base_url()?>img/eye_w.png" alt="Xem chi tiết" title="Xem chi tiết"></a>

                                                            </div>

                                                        </div>
                                                    <?php if($pro->price >0):?>
                                                        <?php

                                                            $gia_ban=$pro->price_sale;

                                                            $gia_goc=$pro->price;

                                                            if($gia_goc){

                                                             $giam_gia=(($gia_goc - $gia_ban) / $gia_goc )*100;

                                                            }

                                                            ?>

                                                        <div class="dp-top-right">

                                                            -<?=@ceil($giam_gia)?>%

                                                        </div>
                                                    <?php endif;?>
                                                    </div>

                                                    <div class="txt caption">

                                                        <h3><a href="<?= base_url('san-pham/'.$pro->alias.'.html')?>"><?= $pro->name ?></a></h3>

                                                        <div class="price">
                                                         <?php if($pro->price_sale >0):?>
                                                            <span class="current"><?=number_format($pro->price_sale)?>₫ </span>
                                                         <?php if($pro->price >0):?>
                                                            <span class="older"><?=number_format($pro->price)?>₫ </span>
                                                        <?php endif;?>
                                                        <?php else:?>
                                                            <span class="current">Liên hệ</span>
                                                        <?php endif;?>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                        

                            <!-- end content_search -->

                            <?php }}?>

                    </div>

                        <div class="phantrang_prod">

                            <?php echo $this->pagination->create_links();?>

                        </div>

                    </div>

                 <!-- end mid_content --><!-- begin right_content --></div>

            </div><!-- end right_content -->

<div class="clearfix"></div>

</article>