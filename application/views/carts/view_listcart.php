<form method="post" action="<?php echo base_url('cart/capnhat')?>">
<div class="modal1 fade1" id="myModal1" role="dialog">

    <div class="modal-dialog modal-lg">

    <!-- Modal content-->

        <div class="modal-content fixgiohang">

            <div class="panel panel-default giohangfix" id="cart-content">

                <div class="panel-heading">

                    <button type="button" class="close" data-dismiss="modal">×</button>

                    <h5> <i class="fa fa-shopping-cart"></i>&nbsp;Đơn hàng (<?=$count;?> Sản phẩm)</h5>

                </div>

                <div class="panel-body " id="cart-content">

                    <div class="col checkout-cart-list ">

                        <div style="display: none!important">

                            <input type="hidden" name="ctl00$pageBody$hdnQty" id="ctl00_pageBody_hdnQty">

                            <input type="submit" name="ctl00$pageBody$btnSave" value="" id="ctl00_pageBody_btnSave">

                        </div>

                        <ul class="checkout-cart-title">

                            <li class="col cart-product-name">Sản phẩm</li>
                          

                            
                            <li class="col cart-product-count">Số lượng</li>

                            <li class="col cart-product-price">Đơn giá (đ)</li>

                            <li class="col cart-product-money">Thành tiền (đ)</li>
                            <li class="col cart-product-money"></li>

                        </ul>

                        <ul class="group-cart-product-item">

                            <?php foreach($cart as $item) : ?>

                            <li class="cart-product-item" data-record-id="<?=$item['rowid']?>">

                                <ul>

                                    <li class="cart-product-name ">

                                        <span class="col cart-product-images">

                                        <img src="<?php if(isset($item['pro_dir']) && isset($item['pro_dir'])){echo base_url('upload/img/products/'.$item['pro_dir'].'/'.$item['image']);}?>">

                                        </span>

                                        <span class="cart-product-info">

                                            <p class="cart-product-title">

                                                <a href="<?=site_url($item['alias'])?>"><?=@$item['name'];?></a>

                                            </p>

                                        </span>

                                    </li>
                                
                                
                                    <li>
                                        <input type="number" name="qty_<?=$item['id']?>" value="<?=$item['qty']?>" size="1">
                                    </li>
                                    
                                    <li class="cart-product-price ">

                                        <p class="cart-product-price-meta"><?=number_format($item['price']);?></p>

                                        <?php if($item['price'] > 0 && $item['price_old'] > 0) :?>

                                        <p class="cart-product-price-old"><?=number_format($item['price_old']);?></p>

                                        <p class="cart-product-price-sale">Giảm: <?=floor(100-($item['price']/$item['price_old'])*100)?>%</p>

                                    </li>

                                    <?php endif;?>

                                    <li class="cart-product-money "><?=number_format($item['subtotal'])?></li>

                                    <li class="cart-product-delete  text-center">

                                        <a href="<?php echo base_url('cart/deleteone/').$item['rowid']?>"  class="lnk-cart-item-rem"><i class="fa fa-trash-o"></i></a>

                                    </li>

                                </ul>

                            </li>

                            <?php endforeach;?>

                        </ul>

                    </div>

                    <div class="col checkout-footer">

                        <div class="row-item">

                            <div class="checkout-footer-left col-480-12">

                                <span class="buy-other"><a href="<?=base_url()?>" target="_parent" class="link-other-choice">Chọn thêm sản phẩm khác</a></span>

                            </div>

                            <div class="checkout-footer-right col-480-12">

                                <div class="bill-row">

                                    <div class="text-right col-480-12">Tạm tính:</div>

                                    <div class="col text-bill col-480-12">

                                        <?=number_format($this->cart->total());?>  đ

                                        <input type="hidden" name="ctl00$pageBody$hdnSubTotal" id="ctl00_pageBody_hdnSubTotal" value="13926000">

                                    </div>

                                </div>

                                <div class="bill-row hidden">

                                    <div class="text-right">Phí vận chuyển (tạm tính):</div>

                                    <div class="col text-bill">

                                        Miễn phí

                                        <input type="hidden" name="ctl00$pageBody$hdnShipFee" id="ctl00_pageBody_hdnShipFee" value="0">

                                    </div>

                                </div>

                                <div class="bill-row">

                                    <div class="text-right hidden discount-money col-480-12">Số tiên được giảm :</div>

                                    <div class="col text-bill price-code">

                                    </div>

                                </div>

                                <div class="bill-row total-order col-480-12">

                                    <div class="text-right col-480-12">Tổng tiền:</div>

                                    <div class="col text-bill col-480-12">

                                        <span id="total_cart"><?=number_format($this->cart->total());?> đ</span>

                                        <input type="hidden" name="ctl00$pageBody$hdnTotal" id="ctl00_pageBody_hdnTotal" value="-1">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row-item checkout-finish text-center">
                        <a class="checkout-btn" href="<?=base_url('shipping')?>" id="btn-checkout-pop"><i class="fa fa-shopping-cart"></i>Đặt hàng</a>
<button type="submit" class="checkout-btn" name="btn">Cập nhật giỏ hàng</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
</form>
<link href="<?=base_url('')?>assets/plugin/themes/0/bundle.min.css" rel="stylesheet">

<link href="<?=base_url('')?>assets/plugin/themes/bundle.min.css" rel="stylesheet">

<style>

.modal-backdrop.fade.in {

    display: none !important;

}

</style>