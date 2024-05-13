<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Hình/logo.png">
    <title>Avada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../CSS/Home.css">

</head>

<body>
    <div id="dau">
        <div id="NameAvada" class="dau1">
            AVADA
        </div>
        <div id="find" class="dau1">
            <input id="find" style="width: 100%; border-radius: 25px;" type="text" name="" id="" placeholder="search">
        </div>
        <div id="caidat" class="dau1">
            <div class="dau-b"><i class="fa fa-th" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-commenting" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="dau-b" id="signoutbutton"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
        </div>
    </div>
    <br>
    <div id="cuoi" style="display: flex ; width: 100%; margin-top: 200px;">
        <div class="dau1">
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><a href=""><i class="fa fa-user" aria-hidden="true"></i> <label
                            id="greet"></label></a></li>
                <li class="custom-list-item"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i> Trang
                        Chủ</a></li>
                <li class="custom-list-item"><a href="friend.html"><i class="fa fa-connectdevelop"
                            aria-hidden="true"></i> Bạn Bè</a></li>
                <li class="custom-list-item"><a href="Shopping.html"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i> Avada Shop</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> News
                        feed</a></li>
                <li class="custom-list-item"><a href="Booking.html"><i class="fa fa-ticket" aria-hidden="true"></i>
                        Booking</a></li>
                <li class="custom-list-item">Video Shot</li>
                <li class="custom-list-item"><a href="Music.html"><i class="fa fa-music" aria-hidden="true"></i> Avada
                        Music</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a>
                </li>
            </ul>
        </div>

        <div class="dau1">
            <ul class="custom-list">
                <li class="custom-list-item">
                    <?php include '../../Server/Main-Sever/ListPost.php';?>
                </li>
            </ul>
        </div>
        <div class="dau1">
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><i class="fa fa-user" aria-hidden="true"></i> <label>Friend</label></li>
                <li class="custom-list-item">Hồ Sang</li>
            </ul>
        </div>
    </div>

   <script src="../JavaScript/Home/NameUser.js"></script>
</body>

</html>