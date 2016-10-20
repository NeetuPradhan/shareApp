<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/banner/add'?>" enctype="multipart/form-data">
        <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>

        <div class="col-lg-6">
           
            <div class="form-group <?php if(form_error('image')) echo 'has-error' ?>">
                <label>Image <i class="fa fa-asterisk"></i></label>
                <input name="image" type="file"  value="<?= set_value('image') ?>">
                <?=form_error('image')?>
            </div>
            <div class="form-group <?php if(form_error('title')) echo 'has-error' ?>">
                <label>Title<i class="fa fa-asterisk"></i></label>
                <input name="title" placeholder="Title" class="form-control">
                <?=form_error('title')?>
            </div>
            <div class="form-group <?php if(form_error('description')) echo 'has-error' ?>">
                <label>Description</label>
                <textarea name="description" placeholder="Description" class="form-control"></textarea>
                <?=form_error('description')?>
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