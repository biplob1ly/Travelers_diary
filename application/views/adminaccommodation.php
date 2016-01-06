<h1>Accommodation</h1>


<div class="row" style="margin-top: 30px;">
    <div class="col-sm-10">
        <?php
        if(isset($rows)){
            echo "<table class=table table-bordered>";
            foreach($rows as $value){
        ?>
        <tr>
            <td>
                <?php echo $value->name; ?>
            </td>
<!--            <td>
                <a href="go_accommodationupdate?accommodationid=<?php //echo $value->id; ?>" class="btn btn-primary form-control" role="button"><span class="glyphicon glyphicon-edit"></span> Update</a> 
            </td>-->
            <td>
                <a href="go_accommodationdelete?accommodationid=<?php echo $value->id; ?>" class="btn btn-primary form-control" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </td>
            
        </tr>
        <?php
            
            }
            echo "</table>";
        }
        else "No result found";
        
        ?>
        <p><a href="go_accommodationcreate" class="btn btn-primary form-control"><span class="glyphicon glyphicon-plus"></span> Create a new item</a></p>
    </div>
    <div class="col-sm-2">
        <form action="go_adminaccommodation" class="pull-right" method="post">


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

        &nbsp;
        <button class="form-control btn btn-primary" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span>Search</button>		
        </form>        
    </div>
</div>
