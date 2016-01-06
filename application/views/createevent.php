<?php
//if(isset($message))echo $message;
//echo validation_errors();
$attributes=array('class'=>'form-horizontal','role'=>'form');
echo form_open_multipart('homecontroller/go_createevent',$attributes);
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
<label for="loc" class="col-sm-2 control-label">Location</label>
<div class="col-sm-10">
    <font color="red"><?php echo form_error('location'); ?></font>
    <input type="text" name="location" class="form-control" id="loc" value="<?php echo set_value('location'); ?>">
</div>
</div>
<div class="form-group">
<label for="dt" class="col-sm-2 control-label">Start date</label>
<div class="row">
<div class="col-sm-4">
    <font color="red"><?php echo form_error('sdt'); ?></font>
    <select name="sdt" class="form-control" id="div">
        <?php 
        $months=array('January','February','March','April','May','June','July','August','September','October','November','December');
        for($div=1;$div<=31;$div++){
        ?>
            <option value=<?php echo "\"{$div}\" "; echo set_select('sdt', $div); ?>><?php echo $div; ?></option>
        <?php
        }
        ?>
    </select>
</div>
<div class="col-sm-5">
    <font color="red"><?php echo form_error('start'); ?></font>
    <select name="start" class="form-control" id="div">
        <?php 
        $months=array('January','February','March','April','May','June','July','August','September','October','November','December');
        foreach($months as $div){
        ?>
            <option value=<?php echo "\"{$div}\" "; echo set_select('start', $div); ?>><?php echo $div; ?></option>
        <?php
        }
        ?>
    </select>
</div>
</div>
</div>
<div class="form-group">
<label for="dt" class="col-sm-2 control-label">End date</label>
<div class="row">
<div class="col-sm-4">
    <font color="red"><?php echo form_error('edt'); ?></font>
    <select name="edt" class="form-control" id="div">
        <?php 
        $months=array('January','February','March','April','May','June','July','August','September','October','November','December');
        for($div=0;$div<=31;$div++){
            if($div==0)$div1='';else $div1=$div;
        ?>
            <option value=<?php echo "\"{$div1}\" "; echo set_select('edt', $div1); ?>><?php echo $div1; ?></option>
        <?php
        }
        ?>
    </select>
</div>
<div class="col-sm-5">    
    <font color="red"><?php echo form_error('end'); ?></font>
    <select name="end" class="form-control" id="div">
        <?php 
        $months=array('','January','February','March','April','May','June','July','August','September','October','November','December');
        foreach($months as $div){
        ?>
            <option value=<?php echo "\"{$div}\" "; echo set_select('end', $div); ?>><?php echo $div; ?></option>
        <?php
        }
        ?>
    </select>
</div>
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
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Create event</button>
    <?php }else{ ?>
    &nbsp;<a href="go_eventcreate" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create another new item</a>    
    <?php } ?>
</div>
</div>
<?php
echo form_close();

?>



