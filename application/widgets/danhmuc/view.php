<aside class="col-md-3 col-xs-12">
                     <!-- menu dọc -->
                     <h2 class="title_box_menu">Danh mục Sản phẩm</h2>
                     <div class="menu_left">
                        <ul class="list_partent">
                           <li>
                              <a href="#" title="" rel="">Xe Mới</a>
                              <ul class="list_child">
                              <?php if(isset($cate_new)){
                                  foreach($cate_new as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                        <ul class="list_partent">
                           <li class="">
                              <a href="#" title="" rel="">Xe cũ</a>
                              <ul class="list_child">
                              <?php if(isset($cate_all)){
                                  foreach($cate_all as $value){
                                  ?>
                                 <li><a href="<?=base_url('danh-muc-xe-cu/').$value->alias?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                        <ul class="list_partent">
                           <li>
                              <a href="#" title="" rel="">Phụ tùng</a>
                              <ul class="list_child">
                              <?php if(isset($phutung)){
                                  foreach($phutung as $value){
                                  ?>
                                 <li><a href="<?= base_url('danh-muc-phu-tung/'.$value->alias); ?>.html" rel="" title="<?=$value->name;?>"><?=$value->name;?></a></li>
                                  <?php }}?>
                              </ul>
                           </li>
                        </ul>
                        <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
                     </div>
                     <!-- /menu dọc -->
                     <div class="qcCarold">
                        <p>Banner Quảng cáo xe cũ</p>
                     </div>
                     <div class="qcCarold">
                        <p>Xe cũ</p>
                     </div>
                  </aside>