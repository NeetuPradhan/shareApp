<!-- DataTables CSS-->
<link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>plugins/datatables/dataTables.bootstrap.css">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
    </div>
    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>From</th>
                    <th>Received On</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(count($messages)>0){
                    foreach($messages as $message){
                        ?>
                        <tr id="<?php echo $message['id'];?>" <?php if($message['read_flag']==0) echo "style='font-weight:bold'"?> > 
                            <td><a href="<?=site_url(ADMIN_PATH.'/messages/details/'.$message['id'])?>"><?=$message['subject']?></a></td>
                            <td><a href="<?=site_url(ADMIN_PATH.'/messages/details/'.$message['id'])?>"><?=$message['email']?></a></td>
                            <td><a href="<?=site_url(ADMIN_PATH.'/messages/details/'.$message['id'])?>">
                                <?=humanize_date_time($message['received_date_time'])?></a>
                            </td>
                            <td>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $message['id'];?>" data-toggle="tooltip" title="Delete"  data-original-title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                            </td>
                        </tr>
                            <?php
                                }
                            } else {
                            ?>
                        <tr>
                            <td colspan="5">
                              <center>
                                <font color="#FF0000">::No Records Yet.::</font>
                              </center>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
            <tfoot>
                <th>Subject</th>
                <th>From</th>
                <th>Received On</th>
                <th>Delete</th>
            </tfoot>
        </table>
    </div>
</div>

<script src="<?=base_url();?>assets/admin/js/admin.js"></script>

<!-- DataTables -->
<script src="<?=base_url().'assets/admin/template/'?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url().'assets/admin/template/'?>plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- Table Drag and Drop -->
<script src="<?php echo base_url()?>assets/tablednd/js/jquery.tablednd.min.js" type="text/javascript"></script>

<script>
    $(function () {
        $('#example').DataTable({
            responsive: true,
            sPaginationType: "full_numbers",
            "aaSorting": [],
            "columnDefs": [{
              "defaultContent": "-",
              "targets": "_all"
            }]
        });
    });

    $(document).ready(function() {
        $('body').on('click', '.delete', function(e) {
          setDelete('messages/delete_message/', '4', this, 'Messages');
        });

    });

</script>