                  <section class="col-md-12 col-xs-12">
                     <div class="carFeatured">
                        <h2 class="title_car lightSpeedIn wow"><a href="<?=base_url('san-pham')?>.html">Xe nổi bật</a></h2>
                        <div class="clearfix-30"></div>
                        <div class="sc_prod_home">
                           <div class="container">
                              <div class="row_pc">
                                 <div class="row-30 imgRow">
                                 <?php if(isset($pros)):
                                    foreach($pros as $value):
                                    ?>
                                    <div class="col-md-3 col-sm-3 col-xs-6 col-480-12 pdd-30">
                                       <div class="box_prod">
                                          <a href="<?=base_url('san-pham/').@$value->alias?>.html" class="img_prod reRenderImg"><img src="<?=base_url('upload/img/products/'.$value->pro_dir.'/'.@$value->image)?>" class="w_100 pulse wow" style="height:200px;" alt=""></a>
                                          <div class="sub_prod clearfix lightSpeedIn wow">
                                             <h3 class="name_prod"><a href="<?=base_url('san-pham/').@$value->alias?>.html"><?=$value->name;?></a></h3>
                                             <p>Giá: <span><?=number_format($value->price);?> <sup>đ</sup></span></p>
                                             <ul class="des_prod">
                                                <li>Số chỗ:<span><?=@$value->so_ghe?></span></li>
                                                <li>Vận hành: <span> <?=@$value->van_hanh?></span></li>
                                                <li>Động cơ:  <span> <?=@$value->dong_co?></span></li>
                                                <li>Màu xe:   <span>  <?=@$value->mau_xe?></span></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <?php endforeach;
                                    endif;
                                    ?>
                                    <div class="chitiet lightSpeedIn wow">
                                       <a href=""> xem tất cả</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>