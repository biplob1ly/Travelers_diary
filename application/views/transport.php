<div class="top_content">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb"><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_transportview'>Transport</a></h5></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12 content_slider">
    <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" style="width:100%; height:200px;">
</div>
</div>
<!--item selection form-->
 <div style="margin-top: 40px;">          
<form action="go_transportview" class="pull-right" method="post">


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

District:<select name="district" class="form-control">
        <?php
                foreach($district as $r)
                {
                        echo "<option value=\"{$r->district}\"";//taking and sending id
                        if($dis==$r->district){
                            echo " selected";

                            }
                        echo ">{$r->district}</option>";

                }
                        echo "<option value=\"all\"";//taking and sending id
                        if($dis=='all'){
                            echo " selected";

                            }
                        echo ">All</option>";

        ?>                        
        </select>
&nbsp;
<button class="form-control btn btn-primary" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span>Search</button>		
</form>

</div>


<!--Search result goes here-->


<div class="col-lg-10">
<?php 
    if(isset($rows)){
    foreach($rows as $value){
  ?>
<div class="media" style="border-bottom:1px solid #03c4db;">
  <div class="media-body">
    <h2 class="media-heading"><?php echo $value->name ?></h2>
    <b>Location: </b><?php echo $value->location; ?><br />
    <b>Contact: </b><?php echo $value->contact; ?><br />
    <b>Email: </b><?php echo $value->email; ?><br />
    <b>Website: </b><a href="<?php echo $value->website; ?>"><?php echo $value->website; ?></a>
  </div>
</div>
    <?php
    }
   }
   else echo "No result found";
    ?>
</div>
