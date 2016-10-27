<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Portal - Reset Admin Password</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/admin/template/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/admin/template/dist/css/sb-admin-2.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Your Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?=base_url();?>backend/admin/validate_admin_pw_reset_credentials">
                            
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="password" type="password" autofocus>
                                    <?php
                                    echo form_error('password');
                                    ?>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Retype Your Password" name="cpassword" type="password">
                                    <?php
                                    echo form_error('cpassword');
                                    ?>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Reset My Password">
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
</html>
