<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?=$title?></h3>
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/common/alert')?>
    <div class="panel panel-default">
          <div class="panel-heading">
            <?php 
              if($this->session->userdata('error_log_title')){
                echo $this->session->userdata('error_log_title');
              } else {
                echo 'Log Report';
              }
            ?>
          </div>
          <!-- /.panel-heading -->
           <div class="panel-body">
              <?php
                if($this->session->userdata('error_log')){
                  echo $this->session->userdata('error_log');
                } else {
                  echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;No recent error log available.</p>";
                }
              ?>
          </div>
          <!-- panel-body -->
      </div>
  </div>
</div>

