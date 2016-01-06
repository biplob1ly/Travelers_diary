<?php
//if(isset($message))echo $message;
//echo validation_errors();
$attributes=array('class'=>'form-horizontal','role'=>'form');
echo form_open_multipart('homecontroller/go_createshopping',$attributes);
?>
<div class="form-group">
<label for="pn" class="col-sm-2 control-label">Name</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('name'); ?></font>
    <input type="text" name="name" class="form-control" id="pn" value="<?php echo set_value('name'); ?>">
</div>
</div>
<div class="form-group">
<label for="ctg" class="col-sm-2 control-label">Opening days</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('opening_days'); ?></font>
    <input type="text" name="opening_days" class="form-control" id="ctg" value="<?php echo set_value('opening_days'); ?>">
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
<label for="div" class="col-sm-2 control-label">Spot-name</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('place_id'); ?></font>
    <select name="place_id" class="form-control" id="div">
        <?php 
        //$divisions=array('Dhaka','Chittagong','Rajshahi','Khulna','Barisal','Sylhet','Rangpur');
        foreach($places as $div){
        ?>
            <option value=<?php echo "\"{$div->id}\" "; echo set_select('division', $div->id); ?>><?php echo $div->name; ?></option>
        <?php
        }
        ?>
    </select>
</div>
</div>

<div class="form-group">
<label for="web" class="col-sm-2 control-label">Web address</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('website'); ?></font>
    <input type="text" name="website" class="form-control" id="web" value="<?php echo set_value('website'); ?>">
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
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Create shopping</button>
    <?php }else{ ?>
    &nbsp;<a href="go_shoppingcreate" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create another new item</a>    
    <?php } ?>
</div>
</div>
<?php
echo form_close();

?>


