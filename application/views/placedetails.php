<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_placeview'>Places to visit</a> > <a href='go_placedetails?id=<?php echo $place->id; ?>'><?php echo $place->name; ?></a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
 
<!--<div class="pull-right" style="margin-top: 30px;">
<p><a href="go_fdrstview?tab=restaurant&spotname=<?php //echo $place->name; ?>" class="btn btn-primary form-control">Find restaurants</a></p>
<p><a href="go_accommodationview?spotname=<?php //echo $place->name; ?>" class="btn btn-primary form-control">Find accommodations</a></p>
<a href="go_shoppingview?tab=where_to_buy&spotname=<?php //echo $place->name; ?>" class="btn btn-primary form-control">Find shopping malls</a>
</div>-->


<div class="row" style="margin-top: 30px;">
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h2><?php echo $place->name; ?> <small><?php echo $place->location; ?></small></h2>
                </div>
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d119174.03482200365!2d92.22892512476416!3d21.025138828359808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc7ea2ab928c3%3A0x3b539e0a68970810!2sCox&#39;s+Bazar%2C+Bangladesh!5e0!3m2!1sen!2s!4v1413314256083" width="100%" height="200" frameborder="0" style="border:0"></iframe>                -->
                    <?php echo $place->map; ?>
                <p style="margin-top: 15px;"><?php echo $place->description; ?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="row">
           <p><a href="go_fdrstview?tab=restaurant&spotname=<?php echo $place->name; ?>" class="btn btn-primary form-control">Find restaurants</a></p> 
        </div>
        <div class="row">
           <p><a href="go_accommodationview?spotname=<?php echo $place->name; ?>" class="btn btn-primary form-control">Find accommodations</a></p> 
        </div>
        <div class="row">
           <p><a href="go_shoppingview?tab=where_to_buy&spotname=<?php echo $place->name; ?>" class="btn btn-primary form-control">Find shopping malls</a></p>
        </div>
    </div>
</div>
