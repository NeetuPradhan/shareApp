<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Portal - Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/admin/css/sb-admin-2.css" rel="stylesheet">
   
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?=getBackendUrl();?>admin/admin_login_validation">
                            
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" value="<?php if(isset($_COOKIE['admin_jp_un'])) echo $_COOKIE['admin_jp_un']; ?>" autofocus>
                                    <?php echo form_error('email'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" value="<?php if(isset($_COOKIE['admin_jp_pw'])) echo $_COOKIE['admin_jp_pw']; ?>" type="password">
                                    <?php echo form_error('password'); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" <?php if(isset($_COOKIE['admin_jp_un'])) echo "checked";?>>Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                                <span class="pull-right"><a href="<?=getBackendUrl();?>admin/admin_forgot_pass">Forgot Password?</a></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/common/js/jquery/dist/jquery.min.js"></script>

</body>

</html>
