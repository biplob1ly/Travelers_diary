<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_fdrstview'>Foods and Restaurants</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
 <div style="margin-top: 40px;">

<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li <?php if($tab=='food')echo "class=\"active\""; ?> ><a href="#What_to_eat" data-toggle="tab">What to eat</a></li>
        <li <?php if($tab=='restaurant')echo "class=\"active\""; ?> ><a href="#Where_to_eat" data-toggle="tab">Where to eat</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane <?php if($tab=='food')echo "active"; ?>" id="What_to_eat">
            <?php $this->load->view('foods'); ?>
            
        </div>
        <div class="tab-pane <?php if($tab=='restaurant')echo "active"; ?>" id="Where_to_eat">
            <?php $this->load->view('restaurants'); ?>
            <!--end of food section-->
            
            <!--item selection form-->
           

        </div>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
