
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
import { getDatabase, get, ref, child } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
import { getAuth, signInWithEmailAndPassword, GoogleAuthProvider } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";
const firebaseConfig = {
    apiKey: "AIzaSyDj6GCwwUQQPZ8ukTEnIQvtxMxELX_b24k",
    authDomain: "login-96f63.firebaseapp.com",
    databaseURL: "https://login-96f63-default-rtdb.firebaseio.com",
    projectId: "login-96f63",
    storageBucket: "login-96f63.appspot.com",
    messagingSenderId: "621774768131",
    appId: "1:621774768131:web:7650307048cc2bf5602636"
};
const app = initializeApp(firebaseConfig);
const db = getDatabase();
const auth = getAuth(app);
const dbref = ref(db);
let EmailInp = document.getElementById('emailInp');
let PasswordInp = document.getElementById('passwordInp');
let MainForm = document.getElementById('MainForm');

let SignInUser = evt => {
    evt.preventDefault();
    signInWithEmailAndPassword(auth, EmailInp.value, PasswordInp.value)
        .then((Credentials) => {

            get(child(dbref, 'UsersAuthList/' + Credentials.user.uid)).then((snapshot) => {
                if (snapshot.exists) {
                    sessionStorage.setItem("user-info", JSON.stringify({
                        firstname: snapshot.val().firstname,
                        lastname: snapshot.val().lastname
                    }))
                    sessionStorage.setItem("user-creds", JSON.stringify(Credentials.user));
                    window.location.href = 'Home.php';
                }
            })
        }).catch((error) => {
            alert(error.message);
            console.log(error.code);
            console.log(error.message);
            window.location.href = 'Home.php';
        })

}
document.getElementById("btnlogoin").addEventListener("click", SignInUser);