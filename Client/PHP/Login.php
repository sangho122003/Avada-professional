<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avada Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" href="../Image-default/logo.png">
    <link rel="stylesheet" href="../CSS/Login.css">
</head>

<body>
    <form class="tablerow" id="mainForm">
        <h1>AVADA</h1>
        <h2>Sign In</h1>
            <div class="tk">
                <div class="box">
                    <input type="text" name="email" class="enter-text" id="emailInp" placeholder=" ">
                    <label class="label" for="enter-text"> EMAIL</label>
                </div>
            </div>
            <br>
            <div class="mk">
                <div class="box">
                    <input type="password" class="enter-text" id="passwordInp" placeholder=" ">
                    <label class="label" for="enter-text"> PASSWORD</label>
                </div>
            </div>
            <br>
            <div class="stylebtn">
                <input id="btnlogoin" class="btnbtnlogoin" type="submit" value="Đăng Nhập">
            </div>
            <div class="part-ulti" >
                <div class="box1" id="signinGmail"><i class="fa fa-google" aria-hidden="true"></i></div>
                <div class="box1" id="signinFaceBook"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
                <div class="box1" id="signinUser"><i class="fa fa-user" aria-hidden="true"></i></div>


            </div>
            <div class="part-End">
                <div class="foget">Foget password</div>
                <a href="register.html">
                    <div class="create">Create the User</div>
                </a>

            </div>
    </form>
   <script type="module" src="../JavaScript/Login/firebaseAuth.js"></script>
</body>

</html>