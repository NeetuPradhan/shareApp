<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="row">
                <div class="col-xs-12">
                <form role="form"  method="post" action="<?=getMemberUrl().'login'?>">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title"><?php echo $title;?></h3></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" value="<?php if(isset($_COOKIE['user_email'])) { echo $_COOKIE['user_email']; } else { echo set_value('email');} ?>" class="form-control" placeholder="Email" maxlength="50"/>
                                <?php echo form_error('email')?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" value="<?php if(isset($_COOKIE['user_pw'])) echo $_COOKIE['user_pw']; ?>" class="form-control" placeholder="Password" />
                                <?php echo form_error('password')?>
                            </div>
                            <div class="form-group">
                            <label class="checkbox1"><input type="checkbox" <?php if(isset($_COOKIE['user_email'])) echo "checked";?> name="remember_me"><i> </i>Remember Me</label></br>
                                <input type="submit" class="btn btn-primary" value="Log in">
                                <a title="Forgot password" href="<?php echo getMemberLoginUrl().'forgot-password'?>">forgot password?</a>
                            </div>
                            <div id="verification_link">
                                <!-- <a id="btnVerifyEmail" title="Resend email verification link" class="btn btn-default">Resend Email Verification Link</a> -->
                            </div>
                        </div>  
                   </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">    
                        <div class="panel-heading"><h3 class="panel-title">New User</h3></div>
                        <div class="panel-body">                            
                            <a id="lbtnSignup" class="btn btn-primary" title="Create Free Account" href="<?php echo getMemberUrl().'register';?>">Create Free Account</a>
                        </div>
                        <div class="panel-footer">
                            After registration an email verification link will be sent to your email address. In order to receive email alerts and reset password, you must verfiy
                            your email by clicking this email verification link.                             
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>