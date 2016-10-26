<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/cms/add'?>" enctype="multipart/form-data">
        <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>

        <div class="col-lg-6">
            <div class="form-group <?php if(form_error('title')) echo 'has-error' ?>">
                <label>Title<i class="fa fa-asterisk"></i></label>
                <input name="title" type='text' class="form-control" placeholder="Enter Page Title" value="<?=set_value('title');?>">
                <?=form_error('title')?>
            </div>
            <div class="form-group <?php if(form_error('head_text')) echo 'has-error' ?>">
                <label>Heading</label>
                <input name="head_text" placeholder="Enter Page Heading" value="<?=set_value('head_text');?>" class="form-control">
                <?=form_error('head_text')?>
            </div>
            <div class="form-group <?php if(form_error('meta_keywords')) echo 'has-error' ?>">
                <label>Meta Keywords</label>
                <textarea name="meta_keywords" placeholder="Enter meta keywords" class="form-control"></textarea>
                <?=form_error('meta_keywords')?>
            </div>
            <div class="form-group <?php if(form_error('meta_description')) echo 'has-error' ?>">
                <label>Meta Description</label>
                <textarea name="meta_description" placeholder="Enter meta description" class="form-control"></textarea>
                <?=form_error('meta_description')?>
            </div>
        </div>
        <div class='col-lg-6'>
            <div class="form-group">
                <label>Contents</label>
                <?php
                    $value = stripslashes($this->input->post('content'));
                    echo $this->ckeditor->editor('content',$value);
                ?>
                <?=form_error('content')?>
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