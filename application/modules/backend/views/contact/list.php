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
    <a class="btn btn-primary" href="<?=ADMIN_PATH.'contact/add';?>"><i class="fa fa-plus"> </i> Add New Contact Address</a>   
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/common/alert')?>
    <table id="example" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date Added</th>
          <th>Date Modified</th>
          <th>Set as Primary?</th>
          <th>Status</th>
          <th>Options</th>
        </tr>
    </thead>
    <tbody>
      <?php
        if(count($contacts)>0){
          foreach($contacts as $contact){
            $date_added = Carbon::createFromFormat('Y-m-d H:i:s', $contact['date_added']);
      ?>
      <tr class="<?php if($contact['is_primary']) {echo "nodrag nodrop hideDragHandle";}?>" id="<?php echo $contact['id']; ?>"> 
        <td class="mid-valign"><?=$contact['title']?></td>
        <td class="mid-valign"><?php echo $contact['date_added'];?> <small class="my-info pull-right"><?=$date_added->diffForHumans();?></small></td>
        <td class="mid-valign"><?php if($contact['date_modified']) { ?><?=$contact['date_modified'];?> <small class="my-info pull-right"><?=Carbon::createFromFormat('Y-m-d H:i:s', $contact['date_modified'])->diffForHumans();?></small><?php } else {echo "<p align='center'>-</p>";}?></td>
        <td class="mid-valign"><a href="<?php 
                        if(!$contact['is_primary']) {
                          echo base_url().'admin/contact/set_primary_address/'.$contact['id'];
                        } else {
                          echo "javascript:void(0)";
                        }
                      ?>" class="btn btn-<?php echo ($contact['is_primary'])? 'success disabled' : 'danger'?>" title="<?php echo ($contact['is_primary'])? 'This contact is currently set as primary image.' : 'Click to make this the primary contact address.'?>"><?php echo ($contact['is_primary'])? 'Yes' : 'No'?></a>
        </td>
        <td class="mid-valign"><a id="status_<?php echo $contact['id']; ?>" href="javascript:void(0)" dataId="<?php echo $contact['id'];?>" dataStatus="<?php echo $contact['status'];?>" class="btn <?php echo ($contact['status'])? 'btn-success' : 'btn-danger'?> <?php if(!$contact['is_primary']){echo ' change_status';}else{echo ' disabled';}?>"><?php echo ($contact['status'])? 'Visible' : 'Hidden'?></a></td>
        <td class="mid-valign">
          <a style="min-height:20px; min-width:20px;" data-original-title="Edit" href="<?=base_url().'admin/contact/edit/'.$contact['id']?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success" ><i class="fa fa-pencil"></i></a>
          <a style="min-height:20px; min-width:20px;" class="btn btn-danger delete btn-xs <?php echo ($contact['is_primary'])? 'disabled' : '';?>" data="<?php echo $contact['id'];?>" data-toggle="tooltip" title="Delete"  data-original-title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
        </td>
      </tr>
            <?php
              }
              ?>
              </tbody>
              <tfoot>
                <tr>
          <th>Title</th>
          <th>Date Added</th>
          <th>Date Modified</th>
          <th>Set as Primary?</th>
          <th>Status</th>
          <th>Options</th>
        </tr>
                </tfoot>
              <?php
            } else {
              ?>
      <tr>
        <td colspan="6">
          <center>
            <font color="#FF0000">::No Contacts Yet.::</font>
          </center>
        </td>
      </tr>
        <?php     
        }
      ?>
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
    //"bSort": false,
    "aaSorting": [],
    "columnDefs": [{
                  "defaultContent": "-",
                  "targets": "_all"
                }]
  });
});

$(document).ready(function() {
  $('body').on('click', '.delete', function(e) {
    setDelete('contact/delete/', '6', this, 'Contact');
  });

  $('body').on('click', '.change_status', function(e) {
    changeStatus('contact/change_status/', '6', this, 'Contact');
  });
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
        url: "<?=base_url().'admin/contact/sort';?>",
        dataType: 'json',
        success: function(data) {
          if(!data['status']) {
            alertify.error().delay(0).setContent(data['msg']).dismissOthers();
          }
        }
      });
    },
  });
</script>