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
        login_result.html('<div class="alert alert-success">Welcome</div>');
        return false;
    }
    return false;
}
