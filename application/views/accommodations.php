<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_accommodationview'>Accommodation</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
<!--item selection form-->
 <div style="margin-top: 40px;">           
<form action="go_accommodationview" class="pull-right" method="post">


Category:<select name="category" class="form-control">
        <?php
                foreach($category as $r)
                {
                        echo "<option value=\"{$r->category}\"";//taking and sending id
                        if($cat==$r->category){
                            echo " selected";

                            }
                        echo ">{$r->category}</option>";

                }
                        echo "<option value=\"all\"";//taking and sending id
                        if($cat=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>
        </select>

Division:<select name="division" class="form-control">
        <?php
                foreach($division as $r)
                {
                        echo "<option value=\"{$r->division}\"";//taking and sending id
                        if($div==$r->division){
                            echo " selected";

                            }
                        echo ">{$r->division}</option>";

                }
                        echo "<option value=\"all\"";//taking and sending id
                        if($div=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>                        
        </select>
Spot-name:<select name="spotname" class="form-control">
        <?php
                foreach($spotname as $r)
                {
                        echo "<option value=\"{$r->name}\"";//taking and sending id
                        if($spot==$r->name){
                            echo " selected";

                            }
                        echo ">{$r->name}</option>";

                }
                        echo "<option value=\"all\"";//taking and sending id
                        if($spot=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>
        </select>
&nbsp;
<button class="form-control btn btn-primary" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span>Search</button>
		
</form>




<!--Search result goes here-->


<div class="col-lg-9">
<?php 
if(isset($rows)){
    foreach($rows as $value){
  ?>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo base_url(); ?>images/<?php echo $value->imgdir; ?>" alt="accommodation" style="width: 200px; height:200px;">
  </a>
  <div class="media-body">
    <h2 class="media-heading"><?php echo $value->name ?></h2>
    <b>Location: </b><?php echo $value->location; ?><br />
    <b>Minimum cost: </b><?php echo $value->mincost; ?>
    <p style="margin-top: 5px;">
          <?php echo $value->description; ?>
    </p>
    <b>Contact: </b><?php echo $value->contactinfo; ?>
    <a href="<?php echo $value->webaddress; ?>">Visit Web page</a><br />
    <b>Rating: </b><?php for($i=1;$i<=5;$i++){if($i<=$value->rating)echo "<span class=\"glyphicon glyphicon-star\"></span>"; else echo "<span class=\"glyphicon glyphicon-star-empty\"></span>";} ?>
  </div>
</div>
    <?php
    }
}
else echo "No result found!";
    ?>
</div>
</div>