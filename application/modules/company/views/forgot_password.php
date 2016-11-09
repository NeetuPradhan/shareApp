<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
    </div>
    <div class="row">
        <form role="form"  method="post" action="<?=getCompanyUrl().'forgot_pass'?>">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Please enter your email address below. We'll send you a password reset link</p>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3 col-md-3 col-lg-2">Email</label>
                            <div class="col-sm-4 col-md-3 col-lg-3"> 
                                <input name="email" type="text"  class="form-control " placeholder="Email" maxlength="50"/>
                                <?php echo form_error('email')?>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="panel-footer text-center">
                    <input type="submit" value="Save" id="btnSave"  title="Save" class="btn btn-primary" />
                    <a href="<?php echo getHomeUrl();?>"  class="btn btn-default" title="Cancel">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>