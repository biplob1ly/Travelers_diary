<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_shoppingview'>Shopping</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
 <div style="margin-top: 40px;">
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li <?php if($tab=='what_to_buy')echo "class=\"active\""; ?> ><a href="#what_to_buy" data-toggle="tab">What to buy</a></li>
        <li <?php if($tab=='where_to_buy')echo "class=\"active\""; ?> ><a href="#where_to_buy" data-toggle="tab">Where to buy</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane <?php if($tab=='what_to_buy')echo "active"; ?>" id="what_to_buy">
            
            <?php
            
            $this->load->view('what_to_buy'); 
            ?>
            
        </div>
        <div class="tab-pane <?php if($tab=='where_to_buy')echo "active"; ?>" id="where_to_buy">
            <?php 
            
            $this->load->view('where_to_buy');
            ?>
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




<!--<div id="section_content">
    <div class="content_box" onclick="window.location = 'go_thingsview';">
        <img src="<?php //echo base_url(); ?>images/beach.jpg" class="img-responsive" >
        <h5><strong>What to Buy?</strong></h5>
        <div class="share_desc">
            <p>What better time to shop in Malaysia than Visit Malaysia Year 2014? This is the time when more bargains...</p>
        </div>
    </div>end content_box 
</div>-->
