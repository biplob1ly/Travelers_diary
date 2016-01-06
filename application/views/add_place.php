<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Travelers Diary</title>
        <link href="<?php echo base_url(); ?>css/public.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<div id="header">
		<h1>Traveler's Diary</h1>
	</div>
	<div id="main">
        <table id="structure">
            <tr>
                <td id="navigation">
                    <ul class="subjects">
                        <li><a href="#">places</a></li>
                        <li><a href="#">accommodations</a></li>
                        <li><a href="#">transportation</a></li>
                        <li><a href="#">events</a></li>
                        <li><a href="#">emergency</a></li>
                    </ul>
                </td>
                <td id="page">
                    <h2>Add place</h2>

                    <form action="create_places.php" method="post">
                            <p>
                                    place name:<input type="text" name="place_name" value="" id="textbox" />
                                    
                            </p>
                            <p>
                                    Type:<input type="text" name="type" value="" id="textbox" />
                                      
                                   
                            </p>
                            <p>
                                    Division :<input type="text" name="division" value="" id="textbox" />
                                    
                            </p>
                            <p>
                                    Location:<input type="text" name="location" value="" id="textbox" />
                                    
                            </p>
                            <p>
                                    Description:<br />
                                                <textarea name="description" rows="15" cols="80"></textarea>
                                   
                            </p>
                                                        
                            
                            <input type="submit" name="submit" value="Add Place" />
                           
                            
                    </form>
                                     
                <td>
            </tr>
        </table>            
        </div>

    </body>
</html>