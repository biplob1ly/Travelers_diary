            <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
            <form class="form-signin" role="form" action="<?php echo base_url(); ?>homecontroller/validate_creation" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
               <font color="red"><?php echo form_error('username'); ?></font>
            <input type="text" name="username" class="form-control" placeholder="username" required autofocus><br />
               <font color="red"><?php echo form_error('password'); ?></font>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create user</button>
            </form>
