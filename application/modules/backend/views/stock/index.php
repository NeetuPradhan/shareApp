<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?=$title?></h3>
    </div>

    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>

        <form method="post" action="<?=base_url().'backend/stock'?>" enctype="multipart/form-data">
            <div class="col-lg-6">
               
                <div class="form-group <?php if(form_error('csv_file')) echo 'has-error' ?>">
                    <input name="csv_file" type="file">
                    <?=form_error('csv_file')?>
                </div>
            </div>

            <div class="box-footer col-lg-12">
                <button type="submit" class="btn btn-success" value="Submit">Submit</button>
              <!-- <button class="btn btn-success" type="submit">Submit</button> -->
            </div>
      </form>
    </div>
  </div>