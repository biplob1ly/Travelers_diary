
<?php
if(!isset($item)){
    
?>
<h1>Items to buy</h1>
<div id="section_content3">
    <ul id="longbox_ul">
        <?php 
        if(isset($item_rows)){
            foreach($item_rows as $value){
        ?>
        <a class="long_box_link" href="go_shoppingview?tab=what_to_buy&id=<?php echo $value->id; ?>">
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
<?php
}
else{
    
?>
    <!---$item has the information of selected item to buy-->
    <div class="row">
    <div class="col-md-9">
        <h1><?php echo $item->name; ?></h1>
        <img src="<?php echo base_url(); ?>images/<?php echo $item->image; ?>" alt="image" style="width:100%; height:200px; margin-bottom: 5px" ><hr />
        <p><?php echo $item->description; ?></p>
    </div>
    
    <div id="section_content" class="col-md-3" >
        <div class="content_box" onclick="window.location = 'go_shoppingview?tab=what_to_buy';">
            <img src="<?php echo base_url(); ?>images/beach.jpg" class="img-responsive" >
            <h5><strong>What to Buy?</strong></h5>
            <div class="share_desc">
                <p>What better time to shop in Malaysia than Visit Malaysia Year 2014? This is the time when more bargains...</p>
            </div>
        </div><!--end content_box -->
    </div>
    </div>
<?php

}
?>