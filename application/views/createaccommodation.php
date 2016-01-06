<?php
//if(isset($message))echo $message;
//echo validation_errors();
$attributes=array('class'=>'form-horizontal','role'=>'form');
echo form_open_multipart('homecontroller/go_createaccommodation',$attributes);
?>
<div class="form-group">
<label for="pn" class="col-sm-2 control-label">Name</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('name'); ?></font>
    <input type="text" name="name" class="form-control" id="pn" value="<?php echo set_value('name'); ?>">
</div>
</div>
<div class="form-group">
<label for="ctg" class="col-sm-2 control-label">Category</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('category'); ?></font>
    <input type="text" name="category" class="form-control" id="ctg" value="<?php echo set_value('category'); ?>">
</div>
</div>
<div class="form-group">
<label for="div" class="col-sm-2 control-label">Division</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('division'); ?></font>
    <select name="division" class="form-control" id="div">
    <option value="Dhaka" <?php echo set_select('division', 'Dhaka'); ?>>Dhaka</option>
    <option value="Chittagong" <?php echo set_select('division', 'Chittagong'); ?>>Chittagong</option>
    <option value="Rajshahi" <?php echo set_select('division', 'Rajshahi'); ?>>Rajshahi</option>
    <option value="Khulna" <?php echo set_select('division', 'Khulna'); ?>>Khulna</option>
    <option value="Barisal" <?php echo set_select('division', 'Barisal'); ?>>Barisal</option>
    <option value="Sylhet" <?php echo set_select('division', 'Sylhet'); ?>>Sylhet</option>
    <option value="Rangpur" <?php echo set_select('division', 'Rangpur'); ?>>Rangpur</option>
    </select>
</div>
</div>
<div class="form-group">
<label for="loc" class="col-sm-2 control-label">Location</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('location'); ?></font>
    <input type="text" name="location" class="form-control" id="loc" value="<?php echo set_value('location'); ?>">
</div>
</div>
<div class="form-group">
<label for="min" class="col-sm-2 control-label">Minimum cost</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('mincost'); ?></font>
    <input type="text" name="mincost" class="form-control" id="min" value="<?php echo set_value('mincost'); ?>">
</div>
</div>
<div class="form-group">
<label for="cn" class="col-sm-2 control-label">Contact</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('contactinfo'); ?></font>
    <input type="text" name="contactinfo" class="form-control" id="cn" value="<?php echo set_value('contactinfo'); ?>">
</div>
</div>
<div class="form-group">
<label for="web" class="col-sm-2 control-label">Web address</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('webaddress'); ?></font>
    <input type="text" name="webaddress" class="form-control" id="web" value="<?php echo set_value('webaddress'); ?>">
</div>
</div>
<div class="form-group">
<label for="desc" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('description'); ?></font>
    <textarea class="form-control" name="description" id="desc"  rows="4"><?php echo set_value('description'); ?></textarea>
</div>
</div>
<div class="form-group">
<label for="rate" class="col-sm-2 control-label">Rating</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('rating'); ?></font>
    <input type="text" name="rating" class="form-control" id="rate" value="<?php echo set_value('rating'); ?>">
</div>
</div>
<div class="form-group">
<label for="img" class="col-sm-2 control-label">Image</label>
<div class="col-sm-10">
    <?php
    if(isset($error))echo "<font color=\"red\">".$error."</font>";
    echo form_upload('userfile');
    ?>
</div>
</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

    <?php 
    if(!isset($message)){
    ?>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Create accommodation</button>
    <?php }else{ ?>
    &nbsp;<a href="go_accommodationcreate" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create another new item</a>    
    <?php } ?>
</div>
</div>
<?php
echo form_close();

?>


