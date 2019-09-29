<h3>Searched item</h3>
<br><br><br>
<div class="card-row">
    <?php if(count($items)): ?>
        <?php foreach($items as $item): ?>
        <div class="container">
        <div class="card-img">
                <img src="<?php echo site_url(); ?>/assets/images/<?php echo $item->item_image?>" height="200" width="200" >
            </div>
            <div class="card-desc">
                
                <h3><?php echo $item->item_name?></h3><br>
                <h3><?php echo $item->item_price?></h3>
                <div class="class-footer">
                    <a href="<?php echo base_url("cart/".$item->item_id); ?>" class="btn btn-primary">Add to cart</a>
                <!-- <button type="button" name="add_cart" data-item_image="'.$item->item_image.'" data-item_name="'.$item->item_name.'" data-item_price="'.$item->item_price.'" data-item_id="'.$item->item_id.'" class="btn btn-success add_cart">Add to cart</button> <br> -->
            </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
    <div class="container">   
                <div class="card-desc">      
                    <h3 style="color:red;">There is no search item to buy!</h3><br>       
                </div>
    </div>
    <?php endif; ?>