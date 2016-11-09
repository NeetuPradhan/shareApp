<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
        <div class="panel-heading">
            <a class="btn btn-primary" href="<?php echo getCompanyUrl().'announcement_add';?>"><i class="fa fa-plus"> </i> Add New Announcement</a>   
        </div>
    </div>
    <div class="box-body">
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Fiscal Year</th>
                    <th>Added Date</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($announcement)>0){
                    foreach($announcement as $announcementList){
                        ?>
                        <tr id="<?php echo $announcementList['id'];?>">
                            <td><?php echo $announcementList['title']?></td>
                            <td><?php echo $announcementList['detail']?></td>
                            <td><?php echo $announcementList['fiscal_year']?></td>
                            <td><?php echo $announcementList['added_date']?></td>
                            <td><i href="javascript:void(0)" id="status_<?php echo $announcementList['id'];?>" datastatus="<?php echo $announcementList['status'];?>" class="change_status btn <?php echo ($announcementList['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($announcementList['status'])? 'Active' : 'Inactive'?></i></td>
                            <td>
                                <a href="<?echo getCompanyUrl().'announcement_edit/'.$announcementList['id'] ?>" class="btn btn-effect-ripple btn-xs btn-success">Edit</a>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $announcementList['id'];?>">Delete</a>
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
                    <th>Details</th>
                    <th>Fiscal Year</th>
                    <th>Added Date</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

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
            var url = "<?php echo getCompanyUrl().'announcement_delete/'?>";
            setDelete(url, '6', this, 'Announcement');
        });

        $('body').on('click', '.change_status', function(e) {
            var url = "<?php echo getCompanyUrl().'change_status/'?>";
            changeStatus(url, '6', this, 'Announcement');
        });
    });

    function setDelete(del_url, tbl_col_num, element, name) {
        _this=$(element);
        var id = _this.closest('tr').attr('id');
        var tableId = _this.closest('table').attr('id');
        var table =$('#'+tableId).DataTable();
        _this_tr_html = _this.closest('tr').html();

        var loading_img = "<?php echo base_url().'images/ajax-loader_dark.gif'?>";

        alertify.confirm("Are you sure you want to delete this " + name +" with id " + id +" ?", function (e) {
            if(e) {
                jQuery.ajax({
                    url: del_url + id,
                    dataType: 'json',
                    beforeSend: function(){
                        _this.closest('tr').html("<td colspan='"+tbl_col_num+"' align='center'><img src='"+loading_img+"' ></td>");
                    },
                    success: function(data) {
                        if(data['status']) {
                            table.row('#'+id).remove().draw();
                            alertify.success().delay(0).setContent(name + " Deleted Successfully.").dismissOthers();
                        } else {
                            $('#'+id).html(_this_tr_html);
                            alertify.error().delay(0).setContent(data['msg']).dismissOthers();
                        }
                        $(".tooltip").hide();
                    }
                });
            } else {
                return false;
            }
        }).setHeader('Confirm Delete!');
    }


    function changeStatus(url, tbl_col_num, element, name) {
        _this = $(element);
        var id = _this.closest('tr').attr('id');
        var status = _this.attr('dataStatus');
        _this_tr_html = _this.closest('tr').html();
        cell_id = _this.attr('id');  
        jQuery.ajax({
            url: url + id,
            dataType: 'json',
            success: function(data) {
                if(data['status']) {
                    $('#'+id).html(_this_tr_html);
                    if(status == '1') {
                        $('#' + cell_id).attr("dataStatus", '0');
                        $('#' + cell_id).removeClass('btn-success').addClass('btn-danger');
                        $('#' + cell_id).html("Inactive");
                    } else {
                        $('#' + cell_id).attr("dataStatus", '1');
                        $('#' + cell_id).removeClass('btn-danger').addClass('btn-success');
                        $('#' + cell_id).html("Active");
                    }
                    alertify.dismissAll();
                } else {
                    $('#'+id).html(_this_tr_html);
                    alertify.error().delay(0).setContent(data['msg']).dismissOthers();
                }
            }
        });
    }

</script>