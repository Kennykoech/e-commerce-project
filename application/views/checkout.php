<br><br><br>
<div class="container">
    <div class="alert alert-success">
            <?php if($msg = $this->session->flashdata('msg')):?>
                <?php echo $msg;?>
            <?php endif;?>
    </div>
</div>
<div class="container">
    <h2>Please Note You can only order one item at a time</h2>
    <img class="" src="<?php echo site_url(); ?>/assets/images/mpesa2.jpg" height="300" width="1000" >
</div>

<div class="container">
    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

    <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Sub-Total</th>
    </tr>

    <?php  $total =0; ?>
            <?php foreach ($cart as $ct): ?>
            <tr>
                <form action="<?php echo base_url();?>cart/place_order" method="post">
                    <td><input type="text" name="item_name" value="<?php echo $ct->item_name; ?>"></td>
                    <td>ksh<input type="text" name="item_price" value="<?php echo $ct->item_price; ?>"></td>
                    <td><input name="qty" class="form-control" value="<?php echo $ct->qty; ?>" maxsize="5">                
                    <?php $sub_total = ($ct->qty * $ct->item_price);?>
                    <td>ksh<input name="sub_total" value="<?php echo $sub_total; ?>"></td>
            </tr>
            <?php $total = $total + $sub_total;?>
            <?php endforeach; ?>
            
            <tr>          
                    <td colspan="2"> </td>
                    <td class="right"><strong>Pay to Mpesa:</strong></td>
                    <td class="right">ksh<input name="total" value="<?php echo $total; ?>"></td>
            </tr>
            <tr>
                <td class="right"><strong>Code:</strong><input type="text" name="mpesa_code" class="form-control" placeholder="enter mpesa_code here..."></td> 
            </tr>
            <tr>
                <td class="right"><strong>Email:</strong><input type="text" name="email" class="form-control" placeholder="enter email here..."></td> 
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-success">Place Order</button></td>
                </form>
            </tr>   
    </table>
</div>
<br><br><br>




