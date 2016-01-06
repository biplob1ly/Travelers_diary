<div class="top_content" style="border-bottom: 1px solid #269abc;">
	<div class="row"> 
            <div class="col-sm-10 col-sm-offset-1 text-left breadcrumb" style="margin-left:15px; "><h5><a href='<?php echo base_url(); ?>'>Home</a> > <a href='go_eventview'>Events</a></h5></div>
    </div>
</div>
<h1>Events on calender</h1>
<br /><br />
<div style="background-color:#ababab; height:45px;">
    <?php
    $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    ?>

    <table class="table event"  style="font-size: 15px; vertical-align: middle; text-align: center;">
        <tr>
        <?php
//        if(!isset($selected))$selected=date('F');
        foreach ($months as $month) {
            echo "<td><a href=\"go_eventview?month={$month}\">";
            if ($month != $selected)
                echo "{$month}";
            else
                echo "<b style=\"color:red;\">{$month}</b>";
            echo "</a></td>";
        }
        ?>

          </tr>
    </table>
</div><br />
<div style="background-color:#ababab;">
<?php 
if(isset($rows)){
    foreach($rows as $value){
  ?>
<div class="media" style="border-bottom:1px solid #03c4db;">
  <img class="media-object pull-left" src="<?php echo base_url(); ?>images/<?php echo $value->image; ?>" alt="event" style="width: 200px; height:200px;">
  <div class="media-body">
    <h2 class="media-heading"><?php echo $value->name; ?></h2>
    <b>Duration: </b><?php echo $value->daterange; ?><br />
    <b>Location: </b><?php echo $value->location; ?><br />
    <b>Category: </b><?php echo $value->category; ?>
    <p style="margin-top: 5px;">
          <?php echo $value->description; ?>
    </p>
    
  </div>
</div>

<?php 
    }
}
else echo "No result found";
//echo "<p style=\"margin-top:10px;\">For up-to-date information on the weather in capital cities visit <a href=\"http:\/\/www.bmd.gov.bd\">Bangladesh Meterorogical Department's website.</a></p>"
?>
</div>
