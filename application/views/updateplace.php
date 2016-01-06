
<form action="go_updateplace?placeid=<?php if(isset($repop))echo $plid; else echo $place->id; ?>" method="post" accept-charset="utf-8" class="form-horizontal" role="form">

<div class="form-group">
<label for="pn" class="col-sm-2 control-label">Place Name</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('name'); ?></font>
    <input type="text" name="name" class="form-control" id="pn" value="<?php if(isset($repop))echo set_value('name'); else echo $place->name; ?>">
</div>
</div>
<div class="form-group">
<label for="ctg" class="col-sm-2 control-label">Category</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('category'); ?></font>
    <input type="text" name="category" class="form-control" id="ctg" value="<?php if(isset($repop))echo set_value('category'); else echo $place->category; ?>">
</div>
</div>
<div class="form-group">
<label for="div" class="col-sm-2 control-label">Division</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('division'); ?></font>
    <select name="division" class="form-control" id="div">
        <?php 
        $divisions=array('Dhaka','Chittagong','Rajshahi','Khulna','Barisal','Sylhet','Rangpur');
        foreach($divisions as $div){
        ?>
            <option value=<?php echo "\"{$div}\" ";if(isset($repop))echo set_select('division', $div); elseif($place->division==$div)echo "selected"; ?>><?php echo $div; ?></option>
        <?php
        }
        ?>
    </select>
</div>
</div>
<div class="form-group">
<label for="loc" class="col-sm-2 control-label">Location</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('location'); ?></font>
    <input type="text" name="location" class="form-control" id="loc" value="<?php if(isset($repop))echo set_value('location'); else echo $place->location; ?>">
</div>
</div>
<div class="form-group">
<label for="desc" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('description'); ?></font>
    <textarea class="form-control" name="description" id="desc"  rows="4"><?php if(isset($repop))echo set_value('description'); else echo $place->description; ?></textarea>
</div>
</div>

<div class="form-group">
<label for="mp" class="col-sm-2 control-label">Map</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('map'); ?></font>
    <textarea class="form-control" name="map" id="mp"  rows="3"><?php if(isset($repop))echo set_value('map'); else echo $place->map; ?></textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Update place</button>
</div>
</div>
</form>


