<?php 
  require 'vendor/autoload.php';
  use Carbon\Carbon;
?>
<!-- DataTables CSS-->
<link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>plugins/datatables/dataTables.bootstrap.css">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
    </div>
    <div class="panel-heading">
        <a class="btn btn-primary" href="<?='broker/add';?>"><i class="fa fa-plus"> </i> Add New Broker</a>   
    </div>
    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Date Added</th>
                    <th>Date Modified</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($brokers)>0){
                    foreach($brokers as $broker){
                        ?>
                        <tr id="<?php echo $broker['id'];?>">
                            <td title="<?php echo $broker['name']?>"><?php echo $broker['name']?></td>
                            <td><?php echo $broker['code']?></td>
                            <td class="mid-valign"><?php echo $broker['added_date'];?> <small class="my-info pull-right"><?=Carbon::createFromFormat('Y-m-d H:i:s', $broker['added_date'])->diffForHumans();?></small></td>
                            <td class="mid-valign"><?php if($broker['updated_date']) { ?><?=$broker['updated_date'];?> <small class="my-info pull-right"><?=Carbon::createFromFormat('Y-m-d H:i:s', $broker['updated_date'])->diffForHumans();?></small><?php } else {echo "<p align='center'>-</p>";}?></td>
                            <td><i href="javascript:void(0)" id="status_<?php echo $broker['id'];?>" datastatus="<?php echo $broker['status'];?>" class="change_status btn <?php echo ($broker['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($broker['status'])? 'Active' : 'Inactive'?></i></td>
                            <td>
                                <a href="<?=site_url(ADMIN_PATH.'/broker/edit/'.$broker['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $broker['id'];?>" data-toggle="tooltip" title="Delete"  data-original-title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                            </td>    
                        </tr>
                    <?php

                    }
                }else
                {
                  ?>
                <tr>
                    <td colspan="6">
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
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Date Added</th>
                    <th>Date Modified</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

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

        $("#example").tableDnD({
            onDragClass: "myDragClass",
            onDrop: function(table, row) {
                var rows = table.tBodies[0].rows;
                var order = '';
                for (var i=0; i<rows.length; i++) {
                    order += rows[i].id+" ";
                }
                var sortOrder = new Array();
                sortOrder.push({name: 'order', value: order});
                jQuery.ajax({
                    type: 'post',
                    data: sortOrder,
                    url: "<?=base_url().'backend/broker/sort';?>",
                    dataType: 'json',
                    success: function(data) {
                        if(!data['status']) {
                            alertify.error().delay(0).setContent(data['msg']).dismissOthers();
                        }
                    }
                });
            },
        });
    });

    $(document).ready(function() {
        $('body').on('click', '.delete', function(e) {
          setDelete('/broker/delete/', '6', this, 'Broker');
        });

        $('body').on('click', '.change_status', function(e) {
          changeStatus('/broker/change_status/', '6', this, 'Broker');
        });
    });

</script>