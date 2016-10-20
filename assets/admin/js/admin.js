function setDelete(del_url, tbl_col_num, element, name) {
    _this=$(element);
    var id = _this.closest('tr').attr('id');
    var tableId = _this.closest('table').attr('id');
    var table =$('#'+tableId).DataTable();
    _this_tr_html = _this.closest('tr').html();

	alertify.confirm("Are you sure you want to delete this " + name +" with id " + id +" ?", function (e) {
        if(e) {
            jQuery.ajax({
                url: adminURL + del_url + id,
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
        url: adminURL + url + id,
        dataType: 'json',
        /*beforeSend: function(){
            _this.closest('tr').html("<td colspan='"+tbl_col_num+"' align='center'><img src='"+loading_img+"' ></td>");
        },*/
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


function changeHomeFeature(url, tbl_col_num, element, name) {
    _this = $(element);
    var id = _this.closest('tr').attr('id');
    var featureStatus = _this.attr('dataFeatureStatus');
    _this_tr_html = _this.closest('tr').html();
    cell_id = _this.attr('id');  
    jQuery.ajax({
        url: adminURL + url + id,
        dataType: 'json',
        beforeSend: function(){
            _this.closest('tr').html("<td colspan='"+tbl_col_num+"' align='center'><img src='"+loading_img+"' ></td>");
        },
        success: function(data) {
            if(data['status']) {
                $('#'+id).html(_this_tr_html);
                if(featureStatus == '1') {
                    $('#' + cell_id).attr("dataFeatureStatus", '0');
                    $('#' + cell_id).removeClass('btn-success').addClass('btn-danger');
                    $('#' + cell_id).html("No");
                } else {
                    $('#' + cell_id).attr("dataFeatureStatus", '1');
                    $('#' + cell_id).removeClass('btn-danger').addClass('btn-success');
                    $('#' + cell_id).html("Yes");
                }
            } else {
                $('#'+id).html(_this_tr_html);
                alertify.error().delay(0).setContent(data['msg']).dismissOthers();
            }
        }
    });
}


function toggleFeature(url, tbl_col_num, element, name) {
    _this = $(element);
    var id = _this.closest('tr').attr('id');
    var status = _this.attr('dataStatus');
    _this_tr_html = _this.closest('tr').html();
    cell_id = _this.attr('id');  
    jQuery.ajax({
        url: adminURL + url + id,
        dataType: 'json',
        beforeSend: function(){
            _this.closest('tr').html("<td colspan='"+tbl_col_num+"' align='center'><img src='"+loading_img+"' ></td>");
        },
        success: function(data) {
            if(data['status']) {
                $('#'+id).html(_this_tr_html);
                if(status == '1') {
                    $('#' + cell_id).attr("dataStatus", '0');
                    $('#' + cell_id).removeClass('btn-success').addClass('btn-danger');
                    $('#' + cell_id).html("No");
                } else {
                    $('#' + cell_id).attr("dataStatus", '1');
                    $('#' + cell_id).removeClass('btn-danger').addClass('btn-success');
                    $('#' + cell_id).html("Yes");
                }
                alertify.dismissAll();
            } else {
                $('#'+id).html(_this_tr_html);
                alertify.error().delay(0).setContent(data['msg']).dismissOthers();
            }
        }
    });
}