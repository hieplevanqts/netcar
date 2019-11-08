

<article class="home-content">

    <!-- begin sanpham-home -->

    <section class="sc-sanpham-home">

        <div class="container">

            <div class="row"> 
                <div class="col-md-12"> 
                    <?php if(count($cate_home)):

                        foreach($cate_home as $cate):?> 
                    <div class="main-block"> 
                        <div class="prod-list-link clearfix"> 
                            <!-- Nav tabs --> 
                            <div class="home-tab-mb btn btn-default hidden-lg hidden-md hidden-sm flr"> 
                                <i class="fa fa-list"></i> 
                            </div> 
                            <h2 class="section-title"><a href="<?= base_url('danh-muc/'.$cate->alias.'.html')?>"><img alt="<?= $cate->name?>" src="<?= base_url()?>img/icon_product_home_1.png"> <?= $cate->name?></a></h2>

                            <ul class="home-tabs ajax-tabs" role="tablist"> 
                                <?php if(count($cate->cate_sub)): 
                                    foreach($cate->cate_sub as $cate_sub):?> 
                                <li class="active"> 
                                    <a title="<?= $cate_sub->name?>" href="<?= base_url('danh-muc/'.$cate_sub->alias.'.html')?>" ><?= $cate_sub->name?></a> 
                                </li> 
                                <?php endforeach;endif;?>       
                            </ul>  
                        </div> 
                        <!-- Tab panes --> 
                        <div class="tab-content home-tabs-content">

                            <div class="tab-pane active imgRow" id="tab1">

                                <div class="row">

                                    <div class="col-md-9">

                                        <div class="m-50">

                                            <?php if(count($cate->pro)):

                                                foreach($cate->pro as $pro):?>

                                            <div class="col-sm-4 col-xs-6 p50">

                                                <div class="home-prod">

                                                    <div class="relative thumbnail">

                                                        <a href="<?= base_url('san-pham/'.$pro->alias.'.html')?>" class="reRenderImg relative">

                                                        <img src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_2_'.@$pro->image)?>" alt="<?= $pro->name ?>" class="w1">

                                                        <img id="id_image<?=$pro->id?>" src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_3_'.@$pro->image)?>" class=" img_fly" >

                                                        </a>

                                                        <div class="dp-spread">

                                                            <div class="dp-bot-center">

                                                                

                                                                <a href="javascript:void(0)" class="add-cart" onclick="play(event)" data-id="id_image<?=$pro->id?>" data-value="<?=$pro->id?>"><img src="<?= base_url()?>img/cart_w.png"  alt="Thêm vào giỏ" title="Thêm vào giỏ" > Thêm vào giỏ</a>

                                                                <a href='#quick_views<?=$pro->id?>' data-alias='abcxyz' class="quick_views" data-toggle="modal" ><img src="<?= base_url()?>img/zoom_w.png" alt="Xem nhanh" title="Xem nhanh"></a>

                                                                <a href="<?= base_url('san-pham/'.$pro->alias.'.html')?>" class="view_product"><img src="<?= base_url()?>img/eye_w.png" alt="Xem chi tiết" title="Xem chi tiết"></a>

                                                            </div>

                                                        </div>
                                                    <?php if($pro->price !=0):?>
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
                                        <h3><a title="<?= $pro->name; ?>" href="<?= base_url('san-pham/'.$pro->alias.'.html')?>"><?= $pro->name; ?></a></h3>

                                        <div class="price">
                                             <?php if($pro->price_sale != 0):?>
                                            <span class="current"><?=number_format($pro->price_sale)?>₫ </span>
                                            <?php if($pro->price !=0):?>
                                            <span class="older"><?=number_format($pro->price)?>₫ </span>
                                        <?php endif;?>
                                            <?php else:?>
                                                <span class="current">Liên hệ</span>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                                    

                                                </div>

                                            </div>

                                            <!-- view nhanh -->

                                            <div class="modal fade poup_view" id="quick_views<?=$pro->id?>">

                                                <div class="modal-dialog">

                                                    <div class="modal-content">

                                                        <div class="modal-header">

                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                            <h4 class="modal-title">THÔNG TIN SẢN PHẨM</h4>

                                                        </div>

                                                        <div class="modal-body">

                <div class="modal-detail detail">

                    <div class="row_pc clearfix">

                        <div class="col-md-5">

                            <div class="slider_detail">

                                <input type="hidden" id="__VIEWxSTATE" />

                                <ul id='girlstop1<?=$pro->id?>' class='gc-start'>

                                    <li><img src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/'.@$pro->image)?>" alt='image1' /></li>
                                        <?php if(count($pro->img)):

                                                foreach($pro->img as $p_image):?>
                                    <li><img src="<?= base_url($p_image->image) ?>" alt='<?= $item->name ?>' /></li>

                                     <?php  endforeach;endif;?>  

                                </ul>

                                <script type="text/javascript">

                                    $(function glassCcase() {

                                        $("#girlstop1<?=$pro->id?>").glassCase({

                                            'widthDisplay': 300,

                                            'heightDisplay': 300,

                                            'nrThumbsPerRow': 4,

                                            'isSlowZoom': false,

                                            'isSlowLens': true,

                                            'capZType': 'in',

                                            'thumbsPosition': 'bottom',

                                            'isHoverShowThumbs': true,

                                            'colorIcons': '#000',

                                            'colorActiveThumb': '#189ed0',

                                            'mouseEnterDisplayCB': function () { $('.pInstructions').text('Click to open expanded view'); },

                                            'mouseLeaveDisplayCB': function () { $('.pInstructions').text('Roll over image to zoom in'); }

                                        });

                                    });

                                </script>

                                <div class="clb10"></div>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <div class="modal-detail-box">

                                <h3 class="product-subtitle"><?= $pro->name ?></h3>

                                <div class="price">
                                    <?php if($pro->price_sale !=0):?>
                                    <span class="new"><?=number_format($pro->price_sale)?>₫</span>
                                 <?php if($pro->price !=0):?>
                                    <span class="old">

                                    <s><?=number_format($pro->price)?>₫</s>

                                    </span>
                                <?php endif;?>
                                    <?php else:?>
                                         <span class="new">Liên hệ</span>
                                    <?php endif;?>

                                </div>

                                <div class="desc">

                                    <?=$pro->description?>

                                </div>

                               

                                <form action="<?=base_url('addCart_now')?>" method="get" class="modal-form">

                                    <input type="hidden" name="id" id="" value="<?=$pro->id?>">

                                    <input type="hidden" name="quantity" id="" value="1">

                                    <button type="submit" class="submit">Thêm vào giỏ</button>

                                </form>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>

                </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php  endforeach;endif;?>  

                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="more">

                                            <a href="<?= base_url('danh-muc/'.$cate->alias.'.html')?>">Xem thêm</a>

                                        </div>

                                    </div>

                                    <div class="col-md-3 hidden-sm hidden-xs">

                                        <div class="panel panel-default pdMoreBlock">

                                            <div class="panel-heading">

                                                <h3 class="panel-title">Gợi ý dành cho bạn</h3>

                                            </div>

                                            <div class="panel-body">

                                                <?php if(count($cate->hot)):

                                                    foreach($cate->hot as $pro):?>

                                                <div class="layout-row">

                                                    <a href="">

                                                    <img srcset="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_1_'.@$pro->image)?>" alt="">

                                                    </a>

                                                    <div class="txt">

                                                        <h3 class="name"><a href="<?= base_url('san-pham/'.$pro->alias.'.html')?>"><?= $pro->name ?></a></h3>
                                                    <?php if($pro->price_sale != 0):?>
                                                        <p class="pdPrice">

                                                            <span><?=number_format($pro->price_sale)?>₫</span>

                                                        </p>
                                                        <?php else:?>
                                                            <p class="pdPrice">

                                                            <span>Liên hệ</span>

                                                        </p>
                                                    <?php endif;?>

                                                    </div>

                                                </div>

                                                <?php endforeach;endif;?>         

                                                <div class="moreAll text-center">

                                                    <a href="<?= base_url('danh-muc/'.$cate->alias.'.html')?>" class="viewAll insButton">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="banner imageHover">

                                            <a href="<?= base_url('danh-muc/'.$cate->alias.'.html')?>"><img src="<?=base_url(@$cate->image);?>" alt="<?= $cate->name?>" class="wa"></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endforeach;endif;?>

                </div>

            </div>

        </div>

    </section>



    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/modernizr.custom.js"></script>

    <link href="<?=base_url()?>assets/css/front_end/glasscase.minf195.css" rel="stylesheet"/>

    <script src="<?=base_url()?>assets/js/front_end/jquery.glasscase.minf195.js"></script>

    

    <script type="text/javascript">

        $(window).on('load', function () {

            $('.quick_views').on('click', function (e) {

                e.preventDefault();

                function reset(){

                    $(window).trigger('resize');

                }

                setTimeout(reset,100);

                //ajax

                // quickViewProduct($(this).attr('data-alias'));

            })

        })

    </script>



    <!-- end sanpham-home -->

</article>