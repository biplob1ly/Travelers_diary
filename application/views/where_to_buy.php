<form action="go_shoppingview?tab=where_to_buy" class="pull-right" method="post">


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
        </select><br />

<button class="form-control btn btn-primary" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span>Search</button>

</form>

<h1>Shopping malls</h1>

<?php 
if(isset($shopping_rows)){
    foreach($shopping_rows as $value){
?>
<div class="media">

    <img class="media-object pull-left" src="<?php echo base_url(); ?>images/<?php echo $value->image; ?>" alt="shopping" style="width: 150px; height: 150px;">

    <div class="media-body">
        <h2 class="media-heading"><?php echo $value->name ?></h2>

        <p style="margin-top: 5px;">
            <?php echo $value->description; ?>
        </p>
        <b>Opening hours: </b><?php echo $value->opening_hours; ?><br />
        <b>Location: </b><?php echo $value->location; ?><br />
        

        <a href="<?php echo $value->website; ?>" class="navbar-btn btn-success btn">Visit web page</a>

    </div>
</div>
    <?php
    }
}
else echo "No result found!";
    ?>