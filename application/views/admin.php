<br><br><br><br><br><br><br><br><br>
<div class="container" align=""> 
        <h2>Add Item</h2><br>
        <?php echo form_open_multipart('admin/save', ['class' => 'form-horizontal']); ?>
            <?php if($msg = $this->session->flashdata('msg')):?>
            <div class="alert alert-success">
                <?php echo $msg;?>
            </div>
            <?php endif;?>
            <label for="exampleInputEmail1" class="col-md-2 control-label">Item_image</label>
                 <input type="file" name="userfile" size="20"><br>                   
            <label for="exampleInputEmail1" class="col-md-2 control-label">Item_name<?php echo form_input(['name' => 'item_name', 'placeholder' => 'Item_name', 'class' => 'form-control']);?> </label><br>   
            <label for="exampleInputEmail1" class="col-md-2 control-label">Item_price<?php echo form_input(['name' => 'item_price', 'placeholder' => 'Item_price', 'class' => 'form-control']);?> </label><br>                       
                <?php echo form_submit(['name' => 'submit', 'value' => 'Add +', 'class' => 'btn btn-primary']);?>
        <?php echo form_close();?> 
</div><br><br>


