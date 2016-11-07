<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
    </div>
    <div>
        <form role="form" id="frmRegister" method="post" action="<?=getMemberUrl().'update_info'?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>Account Detail</span>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="date-label">
                        <small class="text-muted">(Fields marked with * are required)</small>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">  
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Name *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="f_name" type="text" value="<?= set_value('f_name',$info['f_name']) ?>" title="First Name" placeholder="First Name *" class="form-control" />                
                                            <?= form_error('f_name') ?>
                                        </div>
                                        <div class="clearfix visible-sm div-padded"></div>
                                        <div class="col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0">
                                            <input name="l_name" type="text" value="<?= set_value('l_name',$info['l_name']) ?>" title="Last Name" placeholder="Last Name *" class="form-control" /> 
                                            <?= form_error('l_name') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Gender *</label>
                                        <div class="col-sm-3 col-md-2 col-lg-2">
                                            <label class="radio-inline">
                                                <input type="radio" value="1" name="gender" <?php if(set_value('gender',$info['gender'])=='1') echo "checked";?> >Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0" name="gender" <?php if(set_value('gender',$info['gender'])=='0') echo "checked";?> >Female
                                            </label>
                                            <?= form_error('gender') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Email *</label>
                                        <div class="col-sm-5 col-md-4 col-lg-3">
                                            <input name="email" readonly="true" type="text" value="<?= set_value('email',$info['email']) ?>" title="Email" placeholder="Email *" class="form-control" />
                                            <?= form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Mobile No. *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="mobile" type="text" value="<?= set_value('mobile',$info['mobile']) ?>" title="Mobile No." placeholder="Mobile No. *" class="form-control" />
                                            <?= form_error('mobile') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Landline No. </label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="phone" type="text" value="<?= set_value('phone',$info['phone']) ?>" title="Landline No." placeholder="Landline No." class="form-control" />
                                            <?= form_error('phone') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Address</label>
                                        <div class="col-sm-6 col-md-5 col-lg-4">
                                            <textarea name="address" rows="2" cols="20"  title="Address" placeholder="Address" class="form-control"><?= set_value('address',$info['address']) ?></textarea>
                                            <?= form_error('address') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">City</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="city" type="text" id="city" value="<?= set_value('city',$info['city']) ?>" title="City" placeholder="City" class="form-control" />
                                            <?= form_error('city') ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Save" id="btnSave"  title="Save" class="btn btn-primary" />
                <a href="<?php echo getHomeUrl();?>"  class="btn btn-default" title="Cancel">Cancel</a>
            </div>
        </form>            
    </div>  
</div>