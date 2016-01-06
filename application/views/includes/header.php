<!DOCTYPE html>
<html>
<head>
	<title>Travelers' Diary</title>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <!--load css file-->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
        <!--load jquery-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--load javascript file-->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>


</head>
<body <?php if(isset($message)){ ?>onload="alert('Last submission was successful');"<?php } ?>>
<!--This is black navigation bar at top-->        
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="#" class = "navbar-brand">Travelers Diary</a>
			<button class="navbar-toggle" data-toggle= "collapse" data-target=".navHeaderCollapse">
				<span class= "icon-bar"></span>
				<span class= "icon-bar"></span>
				<span class= "icon-bar"></span>
			</button>			
			<div class= "collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
                                    <li class= "active"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class= "dropdown">
						<a href="#" class= "dropdown-toggle" data-toggle="dropdown">Items<b class="caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href= "#">Places</a></li>
							<li><a href= "#">Accommodations</a></li>
							<li><a href= "#">Restaurants</a></li>
							
						</ul>
					</li>
					<li><a href="#about" data-toggle="modal">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>


<!--This is a modal informing about the builder of this site-->
	<div class = "modal fade" id= "about" role = "dialog">
		<div class= "modal-dialog">
			<div class = "modal-content">
				<div class= "modal-header">
					<h4>About us</h4>
				</div>
				<div class = "modal-body">
					<p>This site is built as a term-project of Software Development sessional course of level-3 term-2 
					by Department of CSE,BUET.It is supervised by our teachers and built by Biplob Biswas and Mahmud Rana.</p>
				</div>
				<div class = "modal-footer">
					<a class= "btn btn-primary" data-dismiss = "modal">Close</a>
				</div>
			</div>
		</div>
        </div>
    
        <div class= "container" > 