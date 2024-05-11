<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Hình/logo.png">
    <title>Bạn Bè | Avada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
         a{
    color: rgb(0, 0, 0); /* Màu văn bản của hyperlink */
    text-decoration: none; /* Loại bỏ gạch chân */
    }
        html,body{
            margin: 0;
        }
        #dau{
        display: flex;
        position: fixed;
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        }
        .dau1{
            flex: 1;
        }
        .dau-b{
            height: 100%;
            flex: 1;
            display: flex; justify-content: center;align-items:center ;
        }
        #cuoi{
            width: 100%;
        }
        .custom-list {
list-style-type: none; /* Ẩn kiểu danh sách mặc định */
padding: 0;
margin: 0;
}
input[type="text"],
input[type="number"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type="date"] {
    /* Adjust appearance for date input */
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}

input[type="submit"] {
    width: 100%;
    background-color: black;
    color: white;
    padding: 10px 15px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: lightgray;
    color: black;
}

label {
    margin-top: 10px;
    display: block;
    font-weight: bold;
}
.custom-list-item {
padding: 10px;
display: block; /* Hiển thị mỗi mục danh sách dưới dạng flexbox */
align-items: center; /* Căn các phần tử con theo trục dọc */
border-radius: 20px;
}

.custom-list-item i {
margin-right: 10px; /* Khoảng cách giữa biểu tượng và nhãn */
}
.dau-b:hover{ background-color: rgb(119, 118, 118);}
.custom-list-item:hover{
background-color: lightgray;
padding: 5px ;
}
.container {
width: 100%;
height: auto;
background-color: lightgray;
border-radius: 2px;
}

.container img {
max-width: 100%; /* Đảm bảo ảnh không vượt quá chiều rộng của thẻ lớn */
height: auto; /* Đảm bảo chiều cao tự động điều chỉnh cho phù hợp */
display: block; /* Ảnh sẽ hiển thị dưới dạng block element để không bị lệch hàng */
margin: 0 auto; /* Căn chỉnh ảnh vào giữa */
}
.small{
display: flex;
flex: 1;
align-items: center;
justify-content: center;
}
.small img, small label{
margin: 1px;
}
.small i, small label{
margin: 1px;
}
    </style>
   
</head>
<body>
    <div id="dau">
        <div id="NameAvada" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
        AVADA-Bạn Bè
        </div>   
        <div id="find" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
            <input  id="find" style="width: 100%; border-radius: 25px;" type="text" name="" id=""  placeholder="search" ></div>
        <div id="caidat" class="dau1" style="display: flex; justify-items:center; align-items: center; "> 
            <div class="dau-b"><i class="fa fa-th" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-commenting" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-bell" aria-hidden="true"></i></div> 
            <div class="dau-b" id="signoutbutton"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
        </div>
    </div>
    <br>
    <div id="cuoi" style="display: flex ; width: 100%; margin-top: 50px;">
        <div class="dau1">
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><a href=""><i class="fa fa-user" aria-hidden="true"></i> <label id="greet" ></label></a></li>
                <li class="custom-list-item"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a></li>
                <li class="custom-list-item"><a href="friend.html"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Bạn Bè</a></li>
                <li class="custom-list-item"><a href="Shopping.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Avada Shop</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> News feed</a></li>
                <li class="custom-list-item"><a href="Booking.html"><i class="fa fa-ticket" aria-hidden="true"></i> Booking</a></li>
                <li class="custom-list-item">Video Shot</li>
                <li class="custom-list-item"><a href="Music.html"><i class="fa fa-music" aria-hidden="true"></i> Avada Music</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a></li>
            </ul>
        </div>
            
        <div class="dau1"> 
            <ul  class="custom-list">
                <li class="custom-list-item">
               
                    <div class="container "  style="width: 100%; height: auto; background-color: rgb(247, 247, 247);"> 
                        <div>
                            <i class="fa fa-user-circle" aria-hidden="true"></i><Label>Admin-HoSang</Label>
                        </div>
                        <H1> Chào Mừng </H1>  
                        <H1 id="greet"></H1>
                        <H1 style="font-size: 30px;font-weight: normal;">Đến Với Avada Tui vô cùng vui khi bạn tham gia với mạng Xã Hội Đang Phát Triển này</H1>
                    </div>             
                </li>
                <li class="custom-list-item">
               
                    <div class="container "  style="width: 100%; height: auto; background-color: rgb(247, 247, 247);"> 
                        <div>
                            <i class="fa fa-user-circle" aria-hidden="true"></i><Label>Admin-HoSang</Label>
                        </div>
                        <p>
                            09-12 nè Sinh Nhật tui nè mấy ní ơi
                        </p>
                        <img src="Hình/09-12.jpg" alt="">
                        <div style="display: flex;">
                        <div class="small">
                            <img class="likeButton" src="Hình/unlike.png" alt=""><Label>Like</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i><Label>comment</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-share" aria-hidden="true"></i><Label>Share</Label> 
                        </div>
                    </div>             
                </li>
                <li class="custom-list-item">
               
                    <div class="container "  style="width: 100%; height: auto; background-color: rgb(247, 247, 247);"> 
                        <div>
                            <i class="fa fa-user-circle" aria-hidden="true"></i><Label>Admin-HoSang</Label>
                        </div>
                        <p>
                            03-11 nè Sinh Nhật Sinh Nhật Trí Âm Binh Hôm đó không có tui :3
                        </p>
                        <img src="Hình/03-11.jpg" alt="">
                        <div style="display: flex;">
                        <div class="small">
                            <img class="likeButton" src="Hình/unlike.png" alt=""><Label>Like</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i><Label>comment</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-share" aria-hidden="true"></i><Label>Share</Label> 
                        </div>
                    </div>             
                </li>
                <li class="custom-list-item">
                    <div class="container "  style="width: 100%; height: auto; background-color: rgb(247, 247, 247);"> 
                        <div>
                            <i class="fa fa-user-circle" aria-hidden="true"></i><Label>Admin-HoSang</Label>
                        </div>
                        <p>
                            27-11 Sinh Nhật John Biên Đần nè
                        </p>
                        <img src="Hình/27-11.jpg" alt="">
                        <div style="display: flex;">
                        <div class="small">
                            <img id="likeButton" src="Hình/unlike.png" alt=""><Label>Like</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i><Label>comment</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-share" aria-hidden="true"></i><Label>Share</Label> 
                        </div>
                    </div>             
                </li>
                <li class="custom-list-item">
                    <div class="container "  style="width: 100%; height: auto; background-color: rgb(247, 247, 247);"> 
                        <div>
                            <i class="fa fa-user-circle" aria-hidden="true"></i><Label>Admin-HoSang</Label>
                        </div>
                        <p>
                            22-12 Sinh Nhật Xíu Muội (có đái cũng không khai nha mày) và Bạn Long Vũ của tui
                        </p>
                        <img src="Hình/22-12.jpg" alt="">
                        <div style="display: flex;">
                        <div class="small">
                            <img id="likeButton" src="Hình/unlike.png" alt=""><Label>Like</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i><Label>comment</Label> 
                        </div>
                        <div class="small">
                            <i class="fa fa-share" aria-hidden="true"></i><Label>Share</Label> 
                        </div>
                    </div>          
                </li>
            </ul>
            
        </div>
        <div class="dau1"> 
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><i class="fa fa-user" aria-hidden="true"></i> <label >Friend</label></li>
                <li class="custom-list-item">Hồ Sang</li>
            </ul>
    </div>
    </div>
    
    <script>
    let UserInfo = JSON.parse(sessionStorage.getItem("user-info"))

    let GreetHead = document.getElementById('greet');
    let SignoutBtn = document.getElementById('signoutbutton');
   
    let Signout = ()=>{
        sessionStorage.removeItem("user-creds");
        sessionStorage.removeItem("user-info");
        window.location.href ='index.html'
    }
    let CheckCred = ()=>{
        if(!sessionStorage.getItem("user-creds"))
            window.location.href='index.html'
        else{
    
            GreetHead.innerText =  `${UserInfo.firstname+" "+ UserInfo.lastname}`;
        }
    }
    window.addEventListener('load',CheckCred);
    SignoutBtn.addEventListener('click',Signout)

 
    </script>
    <script>
        var likeButton = document.getElementsByClassName('likeButton');
        likeButton.onclick = function() {
        if (likeButton.src.endsWith("unlike.png")) {
            likeButton.src = "Hình/like.png";
        } else {
            likeButton.src = "Hình/unlike.png";
        }
    };
    </script>
</body>
</html>