<?php
//if(isset($message))echo $message;
//echo validation_errors();
$attributes=array('class'=>'form-horizontal','role'=>'form');
echo form_open_multipart('homecontroller/go_createemergency',$attributes);
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
<label for="cn" class="col-sm-2 control-label">District</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('district'); ?></font>
    <input type="text" name="district" class="form-control" id="cn" value="<?php echo set_value('district'); ?>">
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
<label for="cn" class="col-sm-2 control-label">Contact</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('contact'); ?></font>
    <input type="text" name="contact" class="form-control" id="cn" value="<?php echo set_value('contact'); ?>">
</div>
</div>







<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

    <?php 
    if(!isset($message)){
    ?>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Create emergency</button>
    <?php }else{ ?>
    &nbsp;<a href="go_emergencycreate" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create another new item</a>    
    <?php } ?>
</div>
</div>
<?php
echo form_close();

?>




