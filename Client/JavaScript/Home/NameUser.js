let UserInfo = JSON.parse(sessionStorage.getItem("user-info"))

let GreetHead = document.getElementById('greet');
let SignoutBtn = document.getElementById('signoutbutton');

let Signout = () => {
    sessionStorage.removeItem("user-creds");
    sessionStorage.removeItem("user-info");
    window.location.href = 'Login.php'
}
let CheckCred = () => {
    if (!sessionStorage.getItem("user-creds"))
        window.location.href = 'Login.php'
    else {

        GreetHead.innerText = `${UserInfo.firstname + " " + UserInfo.lastname}`;
    }
}
window.addEventListener('load', CheckCred);
SignoutBtn.addEventListener('click', Signout)
