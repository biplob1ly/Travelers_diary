        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>


<!--Explore bangladesh jumbotron-->        
<!--<div class= "jumbotron">
    <center><h1>Explore Bangladesh</h1></center>
</div>-->


<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_placeview'>Places to visit</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
<!--item selection form-->
<div style="margin-top: 40px;">            
<form action="go_placeview" class="pull-right" method="post">


Category:<select name="category" id="category" class="form-control">
        <?php
                foreach($category as $r)
                {
                        echo "<option value=\"{$r->category}\"";
                        if($cat==$r->category){
                            echo " selected";

                            }
                        echo ">{$r->category}</option>";

                }
                        echo "<option value=\"all\"";
                        if($cat=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>
        </select>

Division:<select name="division" id="division" class="form-control">
        <?php
                foreach($division as $r)
                {
                        echo "<option value=\"{$r->division}\"";
                        if($div==$r->division){
                            echo " selected";

                            }
                        echo ">{$r->division}</option>";

                }
                        echo "<option value=\"all\"";
                        if($div=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>                        
        </select>

<!--Live search text box-->


Name: <input type="text" id="search"  class="form-control" placeholder="Search" autocomplete="off">

<!-- Show Results -->
<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
<ul id="results"></ul>         

&nbsp;
<button class="form-control btn btn-primary" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span>Search</button>		
</form>




<!--Search result goes here-->





<div id="section_content3" class="col-md-9">
    <ul id="longbox_ul">
        <?php 
        if(isset($rows)){
            foreach($rows as $value){
        ?>
        <a class="long_box_link" href="go_placedetails?id=<?php echo $value->id; ?>&name=<?php echo $value->name; ?>">
            <li class="long_box">
                <div class="long_box_image"><img src="<?php echo base_url(); ?>images/<?php echo $value->image; ?>" class="img-responsive"></div>
                    <div class="long_box_desc"><div class="long_box_title"><?php echo $value->name; ?></div>
                    <div>
                        Malaysian handicrafts are beautiful objects d&rsquo;art that reflect the diverse and aesthetic values of the communities. As a truly Asia melting pot of cultures, Malaysian craftsmen are imbued with fascinating skills and materials to create their arts and crafts. From the batik sarong and...<br />
                        <font style='font-weight:bold; color:#03c4db;'>MORE ></font>
                    </div>
                    </div>
                <div class="clear"></div>
            </li><!--end long_box-->
            
        </a>
        <?php
            }
        }
        else echo "No result found!";
        ?>
    </ul>
</div>


