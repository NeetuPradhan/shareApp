<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/company/edit'.'/'.$info['id']?>">
            <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>
            <div class="col-lg-6">
                <div class="form-group <?php if(form_error('code')) echo 'has-error' ?>">
                    <label>Code</label>
                    <input name="code" readonly="true" placeholder="Code" class="form-control" value="<?=set_value('code',$info['code']);?>">
                    <?=form_error('code')?>
                </div>

                <div class="form-group <?php if(form_error('name')) echo 'has-error' ?>">
                    <label>Company Name</label>
                    <input name="name" readonly="true" placeholder="Company Name" class="form-control" value="<?=set_value('name',$info['name']);?>">
                    <?=form_error('name')?>
                </div>

                <div class="form-group <?php if(form_error('email')) echo 'has-error' ?>">
                    <label>Email<i class="fa fa-asterisk"></i></label>
                    <input name="email" readonly="true" placeholder="Email" class="form-control" value="<?=set_value('email',$info['email']);?>">
                    <?=form_error('email')?>
                </div>

                <div class="form-group <?php if(form_error('phone')) echo 'has-error' ?>">
                    <label>Phone<i class="fa fa-asterisk"></i></label>
                    <input name="phone" readonly="true" placeholder="Phone" class="form-control" value="<?=set_value('phone',$info['phone']);?>">
                    <?=form_error('phone')?>
                </div>

                <div class="form-group <?php if(form_error('fax')) echo 'has-error' ?>">
                    <label>Fax<i class="fa fa-asterisk"></i></label>
                    <input name="fax" readonly="true" placeholder="Fax" class="form-control" value="<?=set_value('fax',$info['fax']);?>">
                    <?=form_error('fax')?>
                </div>

                <div class="form-group <?php if(form_error('address')) echo 'has-error' ?>">
                    <label>Address<i class="fa fa-asterisk"></i></label>
                    <input name="address" readonly="true" placeholder="Address" class="form-control" value="<?=set_value('address',$info['address']);?>">
                    <?=form_error('address')?>
                </div>
                <div class="form-group <?php if(form_error('company_type')) echo 'has-error' ?>">
                    <label>Company Type<i class="fa fa-asterisk"></i></label>
                    <input name="company_type" readonly="true" placeholder="Company Type" class="form-control" value="<?php echo $this->helper_model->get_company_type_by_id($info['company_type']);?>">
                    <?=form_error('company_type')?>
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