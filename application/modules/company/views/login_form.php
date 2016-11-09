<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="row">
                <div class="col-xs-12">
                <form role="form"  method="post" action="<?=getCompanyUrl().'login'?>">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title"><?php echo $title;?></h3></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" value="<?php echo set_value('email');?>" class="form-control" placeholder="Email" maxlength="50"/>
                                <?php echo form_error('email')?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password" />
                                <?php echo form_error('password')?>
                            </div>
                            <div class="form-group">
                            <label class="checkbox1"><input type="checkbox" name="remember_me" checked=""><i> </i>Remember Me</label></br>
                                <input type="submit" class="btn btn-primary" value="Log in">
                                <a title="Forgot password" href="<?php echo getCompanyUrl().'forgot_pass'?>">forgot password?</a>
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
                            <a id="lbtnSignup" class="btn btn-primary" title="Create Free Account" href="<?php echo getCompanyUrl().'register';?>">Create Free Account</a>
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