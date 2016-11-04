
var addAdvHitCounter = {
    UpdateAdvHitCounter: function (advId) {
        $.ajax({
            url: "/handlers/webrequesthandler.ashx?type=update_advHitCounter",
            type: "POST",
            data: {
                advId: advId
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, status, err) {
                console.log("Ajax Error: " + err);
            }
        });
    }
}