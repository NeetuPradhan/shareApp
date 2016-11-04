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
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(count($user_list)>0){
                        foreach($user_list as $user){
                ?>
                <tr>
                    <td><?=$user['f_name']." ".$user['l_name']?></td>
                    <td><?=$user['user_name']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['address']?></td>
                    <td>
                        <?php 
                            if($user['verification_status']==0){
                                echo 'Not Verified';
                            } else if ($user['verification_status']==1){
                                echo 'Verified';
                            } else if ($user['verification_status']==2){
                                echo 'Admin Verified';
                            } 
                        ?>
                    </td>
                    <td>
                        <a href="<?=site_url(ADMIN_PATH.'/user/edit/'.$user['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Address</th>
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