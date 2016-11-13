<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form role="form" method="post" action="<?=base_url().'backend/company/announcement_edit/'.$info['id']?>">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Title *</label>
                    <input name="title" type="text" readonly="true" value="<?= set_value('title',$info['title']) ?>" title="Title" placeholder="Title" class="form-control" />                
                    <?= form_error('title') ?>
                </div>
                <div class="form-group">
                    <label>Detail *</label>
                    <?php echo $this->ckeditor->editor('detail',$info['detail']);?>
                    <?= form_error('detail') ?>
                </div>
                <div class="form-group">
                    <label>Verification Status&nbsp;&nbsp;</label>
                    <label class="radio-inline">
                        <input type="radio" value="0" name="status" <?php if(set_value('status',$info['status'])==0){echo "checked";}?> >Inactive
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="status" <?php if(set_value('status',$info['status'])==1) {echo "checked";}?> >Active
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="2" name="status" <?php if(set_value('status',$info['status'])==2) {echo "checked";}?> >Closed
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