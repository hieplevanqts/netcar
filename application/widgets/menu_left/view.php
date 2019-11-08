<!-- menu dọc -->
<h2 class="title_box_menu">Danh mục Sản phẩm</h2>
            <div class="menu_left">
               <ul class="list_partent">
                  <li>
                     <a href="<?php echo base_url('tat-ca-phu-tung')?>" title="" rel="">Phụ Tùng</a>
                     <ul class="list_child">




                        <!-- <li class="has-dropdown">
                           <a href="#" rel="" title="">Phù tùng ô tô chính hãng</a>
                           <ul class="nav-dropdown-child sub_nav_prod_h ">
                              <li><a href="">Phụ tùng gầm, phanh</a></li>
                              <li><a href="">Tổng phanh</a></li>
                              <li><a href="">Phanh trước ô tô</a></li>
                              <li><a href="">  Phanh sau ô tô</a></li>
                              <li><a href=""> Cụm abs, asb</a></li>
                              <li><a href="">Bơm trợ lực, tích áp</a></li>
                              <li><a href="">Binh dầu Phanh</a></li>
                              <li><a href="">Dầu phanh</a></li>
                           </ul>
                        </li> -->


                                                          

                                            <?php if (isset($menu_main_root)) : ?>
                                        <?php foreach ($menu_main_root as $key_r => $mr) : ?>
                                          <?php if (count($mr->menu_sub)){
                                             $class_me = 'has-dropdown';
                                          }else{
                                            $class_me = '';
                                          }?>
                                          <li  class="<?php echo $class_me;?>">
                                            <a href="<?= base_url('danh-muc-phu-tung/'.$mr->alias); ?>.html" title="<?= @$mr->name; ?>" class=""><?= @$mr->name; ?></a>                                      
                                              <?php if (count($mr->menu_sub)): ?>
                                                <ul class="nav-dropdown-child sub_nav_prod_h">
                                                 <?php foreach ($mr->menu_sub as $key => $menu_sub) { ?>
                                                   <li class="">
                                                    <a href="<?= base_url('danh-muc-phu-tung/'.$menu_sub->alias); ?>.html" class=""><?= $menu_sub->name?></a>  
                                                  </li>
                                                <?php } ?>
                                              </ul>
                                            <?php endif ?>                                            

                                        </li>
                                      
                                      <?php endforeach; ?>
                                    <?php endif; ?>  




                     </ul>
                  </li>
               </ul>
               <div class="btn_shoow_list"><a href="#" title="" rel="">Tất cả các hãng</a></div>
            </div>
            <!-- /menu dọc -->