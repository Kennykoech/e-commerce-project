<br><br><br>

<?php if($msg = $this->session->flashdata('msg')):?>
            <?php echo $msg;?>
<?php endif;?>

<div class="container" >
    <br>
    <div class="row">
        <?php foreach($items as $row): ?>
    <div class="col-sm-4">
    <div class="card" style="width: 23rem;">
    <img src="<?php echo site_url(); ?>/assets/images/<?php echo $row->item_image;?>" height="200" width="200" >
    <div class="card-body">
        <h4 class="card-title" style="color:green;"><?php echo $row->item_name;?></h4>
        <h5 class="card-text" style="color:green;">Ksh<?php echo $row->item_price;?></h5>
        <a href="<?php echo site_url("cart/add/".$row->item_id);?>" class="btn btn-primary" >Add to cart</a>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div><br>
    <div class="pagination">
        <a href="" class="active"></a>
            <?php echo $this->pagination->create_links();?>
        </a>
</div>
   