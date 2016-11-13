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
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Fiscal Year</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(count($company_announcement)>0){
                        foreach($company_announcement as $data){
                ?>
                <tr>
                    <td><?=$data['title'];?></td>
                    <td><?=$data['detail']?></td>
                    <td><?=$data['fiscal_year']?></td>
                    <td>
                        <?php 
                            if($data['status']==0){
                                echo 'Inactive';
                            } else if ($data['status']==1){
                                echo 'Active';
                            } else if ($data['status']==2){
                                echo 'CLosed';
                            } 
                        ?>
                    </td>
                    <td>
                        <a href="<?=site_url(ADMIN_PATH.'/company/announcement_edit/'.$data['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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
                <tr>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Fiscal Year</th>
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
</script>