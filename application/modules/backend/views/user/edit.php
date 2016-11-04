<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/user/edit'.'/'.$info['id']?>">
            <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>
            <div class="col-lg-6">
                <div class="form-group <?php if(form_error('f_name')) echo 'has-error' ?>">
                    <label>First Name</label>
                    <input name="f_name" readonly="true" placeholder="First Name" class="form-control" value="<?=set_value('f_name',$info['f_name']);?>">
                    <?=form_error('f_name')?>
                </div>

                <div class="form-group <?php if(form_error('l_name')) echo 'has-error' ?>">
                    <label>Last Name</label>
                    <input name="l_name" readonly="true" placeholder="Last Name" class="form-control" value="<?=set_value('l_name',$info['l_name']);?>">
                    <?=form_error('l_name')?>
                </div>

                <div class="form-group <?php if(form_error('email')) echo 'has-error' ?>">
                    <label>Email<i class="fa fa-asterisk"></i></label>
                    <input name="email" readonly="true" placeholder="Email" class="form-control" value="<?=set_value('email',$info['email']);?>">
                    <?=form_error('email')?>
                </div>

                <div class="form-group <?php if(form_error('user_name')) echo 'has-error' ?>">
                    <label>User Name<i class="fa fa-asterisk"></i></label>
                    <input name="user_name" readonly="true" placeholder="User Name" class="form-control" value="<?=set_value('user_name',$info['user_name']);?>">
                    <?=form_error('user_name')?>
                </div>

                <div class="form-group <?php if(form_error('address')) echo 'has-error' ?>">
                    <label>Address<i class="fa fa-asterisk"></i></label>
                    <input name="address" readonly="true" placeholder="Address" class="form-control" value="<?=set_value('address',$info['address']);?>">
                    <?=form_error('address')?>
                </div>

                <div class="form-group <?php if(form_error('phone')) echo 'has-error' ?>">
                    <label>Phone<i class="fa fa-asterisk"></i></label>
                    <input name="phone" readonly="true" placeholder="Phone" class="form-control" value="<?=set_value('phone',$info['phone']);?>">
                    <?=form_error('phone')?>
                </div>
                <div class="form-group">
                    <label>Verification Status&nbsp;&nbsp;</label>
                    <label class="radio-inline">
                        <input type="radio" value="0" name="verification_status" <?php if(set_value('verification_status',$info['verification_status'])==0){echo "checked";}?> >Unverified
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="verification_status" <?php if(set_value('verification_status',$info['verification_status'])==1) {echo "checked";}?> >Verified
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="2" name="verification_status" <?php if(set_value('verification_status',$info['verification_status'])==2) {echo "checked";}?> >Email &amp Admin Verified
                    </label>
                    <?=form_error('verification_status')?>
                </div>

                <div class="form-group">
                    <label>Account Status&nbsp;&nbsp;</label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="account_status" <?php if(set_value('account_status',$info['account_status'])==1){echo "checked";}?> >Active
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="2" name="account_status" <?php if(set_value('account_status',$info['account_status'])==2) {echo "checked";}?> >Suspended
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="3" name="account_status" <?php if(set_value('account_status',$info['account_status'])==3) {echo "checked";}?> >Blocked
                    </label>
                    <?=form_error('verification_status')?>
                </div>
            </div>

            <div class="box-footer col-lg-12">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>
    </div>
</div>