            <h1>Bangladeshi Foods</h1>
            
            <!--food section-->
            <?php 
            if(isset($food_rows)){
                foreach($food_rows as $value){
            ?>
            <div class="media">
            
                <img class="media-object pull-left" src="<?php echo base_url(); ?>images/<?php echo $value->image; ?>" alt="foods" style="width: 150px; height: 150px;">
            
                <div class="media-body">
                    <h2 class="media-heading"><?php echo $value->name ?></h2>

                    <p style="margin-top: 5px;">
                        <?php echo $value->description; ?>
                    </p>

                </div>
            </div>
                <?php
                }
            }
            else echo "No result found!";
                ?>
            <!--end of food section-->
