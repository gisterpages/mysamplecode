
$(function () {

    function validatePassword() {

        var pass = document.getElementById("pwd");
        var conf_pass = document.getElementById('conf_pwd');
        if (pass.value !== conf_pass.value) {
            conf_pass.setCustomValidity("Passwords Don't Match");
        } else {
            conf_pass.setCustomValidity('');
        }
    }

    $("#conf_pwd").on("change", function () {
        validatePassword();
    });

});