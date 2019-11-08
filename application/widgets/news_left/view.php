<div class="sidebar">
                        <h2 class="title_sidebar">Có thể bạn quan tâm</h2>
                        <div class="list-sidebar row-flex">
                        <?php if(isset($lists)){
                          foreach($lists as $value){                        
                        ?>
                           <div class="box-product-left">
                              <a href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><img style="width:100px;height:70px;" src="<?php if(isset($value->image)){echo base_url($value->image);}?>" alt="" >
</a>
                              <p><a href="<?php if(isset($value->alias)){echo base_url('tin-tuc/'.$value->alias);}?>.html"><?php if(isset($value->title)){echo Limitstring($value->title,100);}?></a></p>
                           </div>
                          <?php }}?>
                        </div>
                     </div>