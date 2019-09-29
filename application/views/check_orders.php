<div class="container">
        <h2>Confirm User Orders</h2><br>
        <br><br><br>
<div class="container">
    <div class="alert alert-success">
            <?php if($msg = $this->session->flashdata('msg')):?>
                <?php echo $msg;?>
            <?php endif;?>
    </div>
</div>
<div class="container">
    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

    <tr>
        <th>Email</th>
        <th>Item</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Sub-Total</th>
        <th>Amount</th>
        <th>Mpesa Code</th>
        <th>Confirm</th>
    </tr>
            <?php foreach ($place_order as $po): ?>
        <tr>          
                <td><?php echo $po->email;?></td>
                <td><?php echo $po->item_name;?></td>
                <td><?php echo $po->item_price;?></td>
                <td><?php echo $po->qty;?></td>
                <td><?php echo $po->sub_total;?></td>
                <td><?php echo $po->total;?></td>
                <td><?php echo $po->mpesa_code;?></td>
                <td style="color:green;"><a class="w3-btn w3-circle w3-hover-green" href="">Confirm</a></td> </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<br><br><br>
</div>
<br><br><br><br><br><br><br><br><br>