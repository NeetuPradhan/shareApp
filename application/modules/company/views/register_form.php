<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
    </div>
    <div>
        <form role="form" id="frmRegister" method="post" action="<?=getCompanyUrl().'register'?>">
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
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Company Name *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="name" type="text" value="<?= set_value('name') ?>" title="Company Name" placeholder="Company Name *" class="form-control" />                
                                            <?= form_error('name') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Code *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="code" type="text" value="<?= set_value('code') ?>" title="Code" placeholder="Code *" class="form-control" />
                                            <?= form_error('code') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Email *</label>
                                        <div class="col-sm-5 col-md-4 col-lg-3">
                                            <input name="email" type="text" value="<?= set_value('email') ?>" title="Email" placeholder="Email *" class="form-control" />
                                            <?= form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Password *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="password" type="password" id="password" title="Password" placeholder="Password *" class="form-control" />
                                            <?= form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Confirm Password *</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="c_password" type="password" autocomplete="off" equalsTo="#password" title="Confirm Password" placeholder="Confirm Password *" class="form-control" />
                                            <?= form_error('c_password') ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Phone No.*</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="phone" type="text" value="<?= set_value('phone') ?>" title="Phone No." placeholder="Phone No." class="form-control" />
                                            <?= form_error('phone') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Fax</label>
                                        <div class="col-sm-4 col-md-3 col-lg-3">
                                            <input name="fax" type="text" id="fax"  value="<?= set_value('fax') ?>" title="Fax" placeholder="Fax" class="form-control" />
                                            <?= form_error('fax') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Address</label>
                                        <div class="col-sm-6 col-md-5 col-lg-4">
                                            <textarea name="address" rows="3" cols="20"  title="Address" placeholder="Address" class="form-control"><?= set_value('address') ?></textarea>
                                            <?= form_error('address') ?>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label class="control-label col-sm-3 col-md-3 col-lg-2">Company Type*</label>
                                        <div class="col-sm-6 col-md-5 col-lg-4">
                                            <select name="company_type" class="form-control">
                                                <option value="">Select Company Type</option>
                                                <? foreach ($company_type as $data) { ?>
                                                <option value="<?php echo $data['id']?>" <?php if(isset($_POST['company_type']) && $_POST['company_type']==$data['id']) echo 'selected'; ?>><?php echo $data['type']?></option>
                                                <? }?>
                                            </select>
                                            <?php echo form_error('company_type');?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Create Account" id="btnSave"  title="Create Free Account" class="btn btn-primary" />
                <a href="<?php echo getHomeUrl();?>"  class="btn btn-default" title="Cancel">Cancel</a>
            </div>
        </form>            
    </div>  
</div>