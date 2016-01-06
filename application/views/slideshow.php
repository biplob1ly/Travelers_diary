<style>
    .selected img {
	opacity:0.5;
}
</style>



<div class="top_content" style="border-bottom: 1px solid #269abc;">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb" style="margin-left:15px; "><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_galleryview'>Gallery</a> > <a href='go_slideshow?category=<?php echo $cat; ?>'><?php echo $cat; ?></a></h5></div>
    </div>
</div>

<h1 style="margin-left:15px;"><?php echo $cat; ?> gallery</h1>

<!-- thumb navigation carousel -->
<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs" style="margin-bottom: 10px;">

        <!-- thumb navigation carousel items -->
        <ul class="list-inline">
        <?php
        $i=0;
        foreach($rows as $value){
        ?>
        <li> <a id="carousel-selector-<?php echo $i; ?>" <?php if($i==0){echo "class=\"selected\"";} ?>>
        <img src="<?php echo base_url(); ?>photos/<?php echo $value->name; ?>" class="img-responsive" style="width:80px; height:60px;">
        </a></li>
        <?php
        $i++;
        }
        ?>
        </ul>

</div>


<!-- main slider carousel -->
<div class="row">
    <div class="col-md-12" id="slider">

            <div class="col-md-12" id="carousel-bounding-box">
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <?php
                        $j=0;
                        foreach($rows as $value){
                        ?>                            
                        <div <?php if($j==0){echo "class=\"active item\"";} else echo "class=\"item\"" ?>  data-slide-number="<?php echo $j; ?>">
                            <img src="<?php echo base_url(); ?>photos/<?php echo $value->name; ?>" class="img-responsive">
                            <div class="container">
                            <div class="carousel-caption">
                                <h1><?php echo $value->title; ?></h1>
<!--                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
                                <p><a class="btn btn-lg btn-primary" href="go_placedetails?id=<?php echo $value->place_id; ?>" role="button">Learn more</a></p>
                            </div>
                            </div>
                        </div>
                        <?php
                        $j++;
                        }
                        ?>                            

                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

    </div>
</div>
<!--/main slider carousel-->


<script type="text/javascript">
$('#myCarousel').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});
</script>