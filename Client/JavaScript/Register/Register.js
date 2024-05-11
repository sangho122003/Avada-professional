import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
import {
    getDatabase,
    set,
    ref
} from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
import {
    getAuth,
    createUserWithEmailAndPassword
} from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyDj6GCwwUQQPZ8ukTEnIQvtxMxELX_b24k",
    authDomain: "login-96f63.firebaseapp.com",
    databaseURL: "https://login-96f63-default-rtdb.firebaseio.com",
    projectId: "login-96f63",
    storageBucket: "login-96f63.appspot.com",
    messagingSenderId: "621774768131",
    appId: "1:621774768131:web:7650307048cc2bf5602636"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase();
const auth = getAuth(app);
let FnameInp = document.getElementById('fnameInp');
let LnameInp = document.getElementById('lnameInp');
let EmailInp = document.getElementById('emailInp');
let PasswordInp = document.getElementById('passwordInp');
let MainForm = document.getElementById('MainForm');

let RegisterUser = evt => {
    evt.preventDefault();
    createUserWithEmailAndPassword(auth, EmailInp.value, PasswordInp.value)
        .then((Credentials) => {
            set(ref(db, 'UsersAuthList/' + Credentials.user.uid), {
                firstname: FnameInp.value,
                lastname: LnameInp.value
            })
            alert('Tạo Tài Khoản thành công')
        }).catch((error) => {
            alert(error.message);
            console.log(error.code);
            console.log(error.message);
        })

}
let SigninGmail = evt => {
    evt.preventDefault();
    alert('Coming Soon');

}
document.getElementById("btn").addEventListener("click", RegisterUser);
document.getElementById("signinGmail").addEventListener("click", SigninGmail);
document.getElementById("signinFaceBook").addEventListener("click", SigninGmail);
document.getElementById("signinUser").addEventListener("click", SigninGmail);