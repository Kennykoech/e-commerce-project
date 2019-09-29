
<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
        <th>Qty</th>
        <th>Item</th>
        <th>Name</th>
        <th>Price</th>
        <th>Sub-Total</th>
        <th>Remove item</th>
</tr>

<?php  $total =0; ?>
        <?php   if( count($items)):?>
        <?php foreach ($items as $item): ?>

         <tr>
                <form  action="<?php echo site_url();?>cart/edit_cart_qty/<?php echo $item->item_id; ?>" method="post">
                        <td><input name="qty" class="form-control" value="<?php echo $item->qty; ?>">
                        <button type="submit" class="btn btn-danger" align-text="center">Update Qty</button></td>
                </form>    
                <td> <img src="<?php echo site_url(); ?>/assets/images/<?php echo $item->item_image;?>" height="200" width="200" ></td>
                <td> <?php echo $item->item_name; ?></td>
                <?php $sub_total = ($item->qty * $item->item_price);?>

                <?php $total = $total + $sub_total;?>

                <td>ksh<?php echo $item->item_price; ?></td>
                <td>ksh<?php echo ($item->qty * $item->item_price); ?></td>
                <td ><a class="btn btn-danger" href="<?php echo base_url();?>cart/delete/<?php echo $item->item_id; ?>">Remove</a></td>
        </tr>
        <?php endforeach; ?>
        <tr>
                        
                <td colspan="2"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">ksh<?php echo $total ; ?></td>
                <td><a class="btn btn-success" href="<?php echo base_url();?>cart/checkout">Proceed to Checkout</a></td>
        </tr>
     
        <?php else:?>
        <div class="container">
                <tr>
                        <h3>You have not shopped. <a href="<?php echo base_url();?>home">Please shop first--></a></h3>
                </tr>
        </div>
        <?php endif;?>
</table>
<br><br><br>

<a class="btn btn-primary" href="<?php echo base_url();?>home">Continue Shopping</a>



