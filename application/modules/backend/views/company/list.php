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
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Address</th>
                    <th>Company Type</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(count($company_list)>0){
                        foreach($company_list as $company_list){
                ?>
                <tr>
                    <td><?=$company_list['code'];?></td>
                    <td><a href="<?php echo base_url().'backend/company/show_announcement/'.$company_list['id'];?>"><?=$company_list['name']?></a></td>
                    <td><?=$company_list['email']?></td>
                    <td><?=$company_list['phone']?></td>
                    <td><?=$company_list['fax']?></td>
                    <td><?=$company_list['address']?></td>
                    <td><?php echo $this->helper_model->get_company_type_by_id($company_list['company_type']);?></td>
                    <td>
                        <?php 
                            if($company_list['verification_status']==0){
                                echo 'Not Verified';
                            } else if ($company_list['verification_status']==1){
                                echo 'Verified';
                            } else if ($company_list['verification_status']==2){
                                echo 'Admin Verified';
                            } 
                        ?>
                    </td>
                    <td>
                        <a href="<?=site_url(ADMIN_PATH.'/company/edit/'.$company_list['id']) ?>" data-toggle="tooltip" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"  data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Address</th>
                    <th>Company Type</th>
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