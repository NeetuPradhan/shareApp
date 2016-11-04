var ContactUs = {
    validateMessage: function (btn) {
        $("#divError").hide();
        var onclick = $(btn).attr("onclick");
        $(btn).attr("onclick", "");
        var msg = "", valid = true;

        if (!validateStringById(ClientID_ContactUs.txtFullName)) msg += "<li>Full Name is required</li>";
        if (!validateStringById(ClientID_ContactUs.txtMobileNo)) msg += "<li>Mobile Number is required</li>";

        if (!validateStringById(ClientID_ContactUs.txtEmail)) msg += "<li>Email is required</li>";
        else if (!validateEmailById(ClientID_ContactUs.txtEmail)) msg += "<li>Email is invalid</li>";

        if (!validateStringById(ClientID_ContactUs.txtMessage)) msg += "<li>Message is required</li>";

        if (msg != "") {
            valid = false;
            $(btn).attr("onclick", onclick);
            showValidationError("divError", "Could not submit your request due to following errors:", "<ul>" + msg + "</ul>");
        }
        if (valid) showProcessing();
        return valid;
    },
    resetForm: function () {
        var $self;
        $("#divContactUsForm input, textarea").each(function () {
            $self = $(this).val("");
            $self.parents(".form-group").eq(0).removeClass("has-error");
        });
        $("#divError").hide();
    }
};