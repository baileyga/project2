var signedIn = false;
var isAdmin = false;
var username = '';

var signInButton = document.getElementById("Login"); 
var logOutButton = document.getElementById("logOut");

signInButton.onclick = signIn(username,password); {
    if(username == 'admin' & password == 'admin'); {
        isAdmin = true;
    }
    username = '';
    signedIn=true;
}

logOutButton.onclick = log_Out(); {
    username = '';
    signedIn=false;
    isAdmin=false;
}