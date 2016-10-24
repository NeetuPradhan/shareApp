<!-- DataTables CSS-->
<link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>plugins/datatables/dataTables.bootstrap.css">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
    </div>
    <div class="panel-heading">
        <a class="btn btn-primary" href="<?='banner/add';?>"><i class="fa fa-plus"> </i> Add New Banner</a>   
    </div>
    <div class="box-body">
        <?php $this->load->view('backend/common/alert')?>
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($banner)>0){
                    foreach($banner as $bannerList){
                        ?>
                        <tr id="<?php echo $bannerList['id'];?>">
                            <td><img src="<?= base_url().BANNER_DIR.$bannerList['image']?>" style="height:60px;width:160px"></td>
                            <td><i href="javascript:void(0)" id="status_<?php echo $bannerList['id'];?>" datastatus="<?php echo $bannerList['status'];?>" class="change_status btn <?php echo ($bannerList['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($bannerList['status'])? 'Active' : 'Inactive'?></i></td>
                            <td>
                                <a href="<?=site_url(ADMIN_PATH.'/banner/edit/'.$bannerList['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $bannerList['id'];?>" data-toggle="tooltip" title="Delete"  data-original-title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
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
                  <th>Image</th>
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
<script src="<?php echo base_url()?>assets/tablednd/js/jquery.tablednd.min.js" type="text/javascript"></script><

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
          setDelete('/banner/delete/', '3', this, 'Banner');
        });

        $('body').on('click', '.change_status', function(e) {
          changeStatus('/banner/change_status/', '3', this, 'Banner');
        });
    });

</script>