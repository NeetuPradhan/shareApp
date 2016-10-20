<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
      <?php $this->load->view('backend/common/alert')?>
      <form role="form" method="post" action="<?=base_url().'backend/settings/email_settings'?>">
      <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>
        <div class="col-lg-6">
          <div class="form-group <?php if(form_error('mailtype')) echo 'has-error' ?>">
                  <label>Mail Type <i class="fa fa-asterisk"></i></label>
                  <input name="mailtype" type='text' class="form-control" placeholder="Enter Mail Type" value="<?=set_value('mailtype',$info['mailtype']);?>">
                  <?=form_error('mailtype')?>
                </div>

                <div class="form-group <?php if(form_error('protocol')) echo 'has-error' ?>">
                  <label>Protocol <i class="fa fa-asterisk"></i></label>
                  <input name="protocol" type='text' class="form-control" placeholder="Enter Protocol" value="<?=set_value('protocol',$info['protocol'])?>">
                  <?=form_error('protocol')?>
                </div>

                <div class="form-group <?php if(form_error('smtp_host')) echo 'has-error' ?>">
                  <label>SMTP Host <i class="fa fa-asterisk"></i></label>
                  <input name="smtp_host" type='text' class="form-control" placeholder="Enter SMTP Host" value="<?=set_value('smtp_host',$info['smtp_host'])?>">
                  <?=form_error('smtp_host')?>
                </div>

                <div class="form-group <?php if(form_error('smtp_port')) echo 'has-error' ?>">
                  <label>SMTP Port <i class="fa fa-asterisk"></i></label>
                  <input name="smtp_port" type='text' class="form-control" placeholder="Enter SMTP Port" value="<?=set_value('smtp_port',$info['smtp_port'])?>">
                  <?=form_error('smtp_port')?>
                </div>

                <div class="form-group <?php if(form_error('smtp_user')) echo 'has-error' ?>">
                  <label>SMTP Username <i class="fa fa-asterisk"></i></label>
                  <input name="smtp_user" type='text' id='smtp_user' class="form-control" placeholder="Enter SMTP Username" value="<?=set_value('smtp_user',$info['smtp_user'])?>">
                  <?=form_error('smtp_user')?>
                </div>

                <div class="form-group <?php if(form_error('smtp_pass')) echo 'has-error' ?>">
                  <label>SMTP Password <i class="fa fa-asterisk"></i></label>
                  <input name="smtp_pass" type='password' id='smtp_pass' class="form-control" placeholder="Enter SMTP Password">
                  <?=form_error('smtp_pass')?>
                </div>

                <div class="form-group <?php if(form_error('receive_email')) echo 'has-error' ?>">
                  <label>Receive Emails At <i class="fa fa-asterisk"></i></label>
                  <input name="receive_email" type='text' class="form-control" placeholder="Enter email address to receive replies" value="<?=set_value('receive_email',$info['receive_email'])?>">
                  <?=form_error('receive_email')?>
                </div>
              </div>

              <div class="box-footer col-lg-12">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-warning" type="reset">Reset</button>
              </div>
            </form>
          </div>
        </div>