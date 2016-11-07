<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
    </div>
    <div class="row">
        <form role="form"  method="post" action="<?=getMemberUrl().'change_password'?>">
            <div class="date-label">
                <small class="muted">(Fields marked with * are required)</small>
            </div>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Current Password*</label>
                        <div class="col-sm-4 col-md-3 col-lg-3"> 
                            <input name="cur_password" type="password"  class="form-control " placeholder="Current Password" maxlength="50"/>
                            <?php echo form_error('cur_password')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-3 col-lg-2"> New Password*</label>
                        <div class="col-sm-4 col-md-3 col-lg-3">
                            <input name="new_password" type="password" class="form-control" placeholder=" New Password" />
                            <?php echo form_error('new_password')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-3 col-lg-2"> Confirm Password*</label>
                        <div class="col-sm-4 col-md-3 col-lg-3">
                            <input name="c_password" type="password" class="form-control" placeholder=" Confirm Password" />
                            <?php echo form_error('c_password')?>
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