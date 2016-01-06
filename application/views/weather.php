<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_weatherview'>Weather</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
<!--item selection form-->
 <div style="margin-top: 40px;">
<h1 style="margin-bottom: 5px;">Weather</h1>


<?php 
    foreach($rows as $value){
  ?>
<div class="media" style="border-bottom:1px solid #03c4db;">

  <div class="media-body">
    <h2 class="media-heading"><?php echo $value->division ?></h2>
    <b>Average rainfall: </b><?php echo $value->averagerainfall; ?><br />
    <b>Average temperature: </b><?php echo $value->averagetemp; ?><br />
    <b>Humidity: </b><?php echo $value->humidity; ?>
    <p style="margin-top: 5px;">
          <?php echo $value->description; ?>
    </p>
    
  </div>
</div>

<?php
   
}
echo "<p style=\"margin-top:10px;\">For up-to-date information on the weather in capital cities visit <a href=\"http:\/\/www.bmd.gov.bd\">Bangladesh Meterorogical Department's website.</a></p>"
 ?>

