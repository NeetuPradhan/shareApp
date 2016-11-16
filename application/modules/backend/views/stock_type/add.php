<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/stock_type/add'?>">
        <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>

        <div class="col-lg-6">
            <div class="form-group <?php if(form_error('type')) echo 'has-error' ?>">
                <label>Type<i class="fa fa-asterisk"></i></label>
                <input name="type" placeholder="Type" class="form-control">
                <?=form_error('type')?>
            </div>
            <div class="form-group <?php if(form_error('status')) echo 'has-error' ?>">
                <label>Status &nbsp;&nbsp;</label>
                <label class="radio-inline">
                    <input type="radio" value="1" name="status" <?php if(set_value('status')==1) echo "checked";?> >Active
                </label>
                <label class="radio-inline">
                    <input type="radio" value="0" name="status" <?php if(set_value('status')==0) echo "checked";?> >Inactive
                </label>
                <?=form_error('status')?>
            </div>
        </div>

        <div class="box-footer col-lg-12">
          <button class="btn btn-success" type="submit">Submit</button>
          <button class="btn btn-warning" type="reset">Reset</button>
        </div>
      </form>
    </div>
  </div>