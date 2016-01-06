<!--<!DOCTYPE html>
<html>
<head>
	<title>Travelers' Diary</title>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link href="<?php //echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
        <div class="container">-->
            <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
            <form class="form-signin" role="form" action="<?php echo base_url(); ?>homecontroller/validate_login" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php if(isset($msg)){?><font color="red"><?php echo $msg; } ?></font>
              <font color="red"><?php echo form_error('username'); ?></font>
            <input type="text" name="username" class="form-control" placeholder="username" required autofocus><br />
            <font color="red"><?php echo form_error('password'); ?></font>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

<!--        </div>    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php //base_url(); ?>js/bootstrap.js"></script>
</body>
</html>-->