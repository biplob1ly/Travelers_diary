<h1>Emergency</h1>


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
                <a href="go_emergencyupdate?emergencyid=<?php //echo $value->id; ?>" class="btn btn-primary form-control" role="button"><span class="glyphicon glyphicon-edit"></span> Update</a> 
            </td>-->
            <td>
                <a href="go_emergencydelete?emergencyid=<?php echo $value->id; ?>" class="btn btn-primary form-control" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </td>
            
        </tr>
        <?php
            
            }
            echo "</table>";
        }
        else "No result found";
        
        ?>
        <p><a href="go_emergencycreate" class="btn btn-primary form-control"><span class="glyphicon glyphicon-plus"></span> Create a new item</a></p>
    </div>

</div>