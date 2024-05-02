function login(){
    var username = $('#usernameForm');
    var password = $('#passwordForm');

    var login_result = $('#login_result');
    login_result.html('<div class="alert alert-success">Loading... Please wait. <i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div>');

    if (username.val() == '') {
        username.focus();
        login_result.html('<div class="alert alert-info">Please Enter the Username!!</div>');
        return false;
    }else if (password.val() == '') {
        password.focus();
        login_result.html('<div class="alert alert-info">Please Enter the Password!!</div>');
        return false;
    }else if (username.val() != '' && password.val() != '') {
        var UrlToPass = "action=login&username=" + username.val() + "&password=" + password.val();
        $.ajax({
            type: 'POST',
            data: UrlToPass,
            url: 'config/checker.php',
            success: function (returnval) {
                switch (returnval) {
                    case '0':
                        login_result.html('<div class="alert alert-danger">Please Check Your Username and Password!!</div>');
                        break;
                    case '1':
                        login_result.html('<div class="alert alert-success">Welcome!</div>');
                        //window.location.href = 'pages/dashboard.php';
                        break;
                    default:
                        console.log('Problem with sql query: ' + returnval);
                        break;
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('AJAX Error: ' + errorThrown);
            }
        });
    }
    return false;
}
