function confirmPass() {
    var pwd = document.getElementById("u_pwd").value;
    var cu_pwd = document.getElementById("cu_pwd").value;

    if(pwd != cu_pwd) {
        alert("Password does not match!");
        return false;
    } else {
       if(pwd.length < 6) {
           alert("Password is too short!");
           return false;
       } else {
           alert("Account created!");
       }
    }
}

function signout() {

    alert("Successfully logged out");
    
}