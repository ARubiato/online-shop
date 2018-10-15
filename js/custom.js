function confirmPass() {
    var pwd = document.getElementById("pwd").value;
    var cu_pwd = document.getElementById("cu_pwd").value;
    var ok = true;
    if(pwd != cu_pwd) {
        alert("Password does not match!");
        ok = false;
    } else {
        alert("Password matches!");
    }

    return ok;
}