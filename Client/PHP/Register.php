<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avada Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../CSS/register.css">
</head>

<body>
    <form class="tablerow" id="mainForm">
        <h1 style="text-align: center;">AVADA</h1>
        <h2 style="text-align: center;">Sign Up</h1>
            <div class="tk">
                <div class="box">
                    <input type="text" name="First" id="fnameInp" class="enter-text" placeholder=" ">
                    <label class="label" for="enter-text"> Họ</label>
                </div>
            </div>
            <div class="tk">
                <div class="box">
                    <input type="text" name="LastName" id="lnameInp" class="enter-text" placeholder=" ">
                    <label class="label" for="enter-text"> Tên</label>
                </div>
            </div>
            <div class="tk">
                <div class="box">
                    <input id="emailInp" type="text" name="" class="enter-text" placeholder=" ">
                    <label class="label" for="enter-text"> EMAIL</label>
                </div>
            </div>
            <br>
            <div class="mk">
                <div class="box">
                    <input id="passwordInp" type="password" class="enter-text" placeholder=" ">
                    <label class="label" for="enter-text"> PASSWORD</label>
                </div>
            </div>
            <br>
            <div style="display: flex;">
                <input style="color: white;" id="btn" class="btn" type="submit" value="Đăng Kí">
                <a href="Login.php" class="btn">Đăng Nhập</a>
            </div>
            <div style="display: flex; align-items: center;justify-content: center ; gap: initial; ">
                <div class="box1" id="signinGmail"><i class="fa fa-google" aria-hidden="true"></i></div>
                <div class="box1" id="signinFaceBook"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
                <div class="box1" id="signinUser"><i class="fa fa-user" aria-hidden="true"></i></div>


            </div>
    </form>
    <script type="module" src="../JavaScript/Register/Register.js">
       
    </script>
</body>

</html>