<div class="top_content" style="border-bottom: 1px solid #269abc;">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb" style="margin-left:15px; "><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_galleryview'>Gallery</a></h5></div>
    </div>
</div>
<div  style="border-bottom: 1px solid #269abc;">
    <?php $this->load->view('slider1'); ?>
</div>
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/0Uhi9K6-a5Q" allowfullscreen></iframe>
</div>
<div  style="border-top: 1px solid #269abc; border-bottom: 1px solid #269abc; padding-bottom: 5px; padding-top: 10px;">
    <p><h1>Start a slide show with selected category</h1></p>
    <?php
    foreach($items as $value){
    ?>
    
    <a href="go_slideshow?category=<?php echo $value->category; ?>"><img src="<?php echo base_url(); ?>images/stack.jpg"><div class="caption"><?php echo $value->category; ?></div></a>
    <?php
    }
    ?>
</div>