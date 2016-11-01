<!-- DataTables CSS-->
<link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>plugins/datatables/dataTables.bootstrap.css">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
    </div>
    <div class="panel-heading">
        <a class="btn btn-primary" href="<?='news/add';?>"><i class="fa fa-plus"> </i> Add New News</a>   
    </div>
    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($news)>0){
                    foreach($news as $newsList){
                        ?>
                        <tr id="<?php echo $newsList['id'];?>">
                            <td><?php echo $newsList['title']?></td>
                            <td><?php echo $newsList['description']?></td>
                            <td><i href="javascript:void(0)" id="status_<?php echo $newsList['id'];?>" datastatus="<?php echo $newsList['status'];?>" class="change_status btn <?php echo ($newsList['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($newsList['status'])? 'Active' : 'Inactive'?></i></td>
                            <td>
                                <a href="<?=site_url(ADMIN_PATH.'/news/edit/'.$newsList['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $newsList['id'];?>" data-toggle="tooltip" title="Delete"  data-original-title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                            </td>    
                        </tr>
                    <?php

                    }
                }else
                {
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
                <tr>
                  <th>Title</th>
                  <th>Description</th>
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
                    url: "<?=base_url().'backend/news/sort';?>",
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
          setDelete('/news/delete/', '4', this, 'News');
        });

        $('body').on('click', '.change_status', function(e) {
          changeStatus('/news/change_status/', '4', this, 'News');
        });
    });

</script>