
<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
		        <h2>Kết quả tìm kiếm với từ khóa "<?php echo $key?>"</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		            <?php foreach ($list as $row):?>
		            <div class="product_item">
                       <h3>
                         <a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
                              <?php echo $row->name?>	                    
                          </a>
	                   </h3>
                       <div class="product_img">
                             <a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
                                <img alt="<?php echo $row->name?>" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
                            </a>
                       </div>
          
                       <p class="price">
                              <?php if($row->discount > 0):?>
                              <?php $price_new = $row->price - $row->discount;?>
                              <?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
				              <?php else:?>
				                <?php echo number_format($row->price)?> đ
				              <?php endif;?>
		                 </p>
		                   </div>
                   </div>
                   <?php endforeach;?>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		    
</div>
