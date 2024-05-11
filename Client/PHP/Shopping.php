        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="hình/logo.png">
            <title>Shop | Avada</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
            <style>
                a {
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
                .dau2{
                    flex: 3;
                    border: 1px solid black;
                    box-shadow: 0 0 10px 5px lightgray;
                }
                .dau-b{
                    height: 100%;
                    flex: 1;
                    display: flex; 
                    justify-content: center;
                    align-items:center ;
                }
                #cuoi{
                    width: 100%;
                }
                .custom-list {
        list-style-type: none; /* Ẩn kiểu danh sách mặc định */
        padding: 0;
        margin: 0;
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
    /* General styles */
    /* General styles */
    .dau2 {
        border-radius: 50px;
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    /* Title shop styles */
    .titleshop {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        color: white;
        background-color: black; /* Change to desired background color */
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
    }

    .conten-title-shop {
        flex: 1;
        text-align: center;
    }

    /* Product box styles */
    .row-box {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Maximum 5 columns */
        gap: 20px;
        padding: 20px;
    }

    .box {
        padding: 20px;
        background-color: #f9f9f9; /* Change to desired background color */
        border-radius: 10px;
        border: 1px solid black ;
        text-align: center;
    }

    .box img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-top: 25px;
        object-fit: cover;
    }

    .box label {
        font-weight: bold;
        margin-top: 10px;
    }

    .box p {
        margin-top: 5px;
    }

    .btnmua {
        background-color: white; /* Change to desired button color */
        color: black;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid black;
    }

    .btnmua:hover {
        background-color: black; /* Khi di chuột vào, nền sẽ chuyển sang màu đen */
        background-image: linear-gradient(to bottom, transparent, #45a049); /* Hiệu ứng gradient từ trên xuống */
        color: white; /* Màu chữ khi di chuột vào */
    }

    /* Icons */
    .fa {
        font-size: 24px;
        margin-left: 5px;
    }
    .box:hover {
        transform: scale(1.1);
        background-color: lightgray;
    }
    ::placeholder {
    text-align: center; /* Căn giữa placeholder */
    }
    /* Selector cho thẻ <select> */
        #products {
    justify-content: center;
    height: auto;
    width: auto; /* Chiều rộng */
    border: 1px solid #ccc; /* Viền */
    border-radius: 25px; /* Bo tròn viền */
    font-size: 15px; /* Kích thước chữ */
}

/* Selector cho tùy chọn <option> */
#products option {
    background-color: #f0f0f0; /* Màu nền */
    color: #333; /* Màu chữ */ /* Khoảng cách bên trong */
    font-size: 10px; /* Kích thước chữ */
}

/* Selector cho tùy chọn được chọn <option> */
#products option:checked {
    background-color: #ccc; /* Màu nền */
    color: #fff; /* Màu chữ */
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
            </style>
        
        </head>
        <body>
            <div id="dau">
                <div id="NameAvada" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
                AVADA-Shop
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
                <div class="dau2" style="border-radius: 50px; width: 100%;flex-direction: column">
                    <div class="titleshop">
                        <div class="conten-title-shop">
                            <label for="">Shopping</label>
                        </div>
                        <div class="conten-title-shop">
                            <input style="width: 100%; border-radius: 25px;"  placeholder="Tìm Kiếm Sản Phẩm" name="" id="">
                        </div>
                        <div class="conten-title-shop">
                            <a href="viewcart.php"> <i  style="color: white;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                           
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; background-color: black; height: 50px;">
                        <div style="display: flex;justify-content: center; align-items: center; ">
                            <label style="color: white;" for="">Chọn sản phẩm : </label>
                            <div class="conten-title-select">
                                <select id="products" name="products">
                                    <option value="Tatca">Tất Cả</option>
                                    <option value="laptop">Laptop</option>
                                    <option value="phone">Iphone</option>
                                  </select>
                            </div>
                        </div>
                        <div style="display: flex;justify-content: center; align-items: center; ">
                            <label style="color: white;" for="">Chọn sản phẩm : </label>
                            <div class="conten-title-select">
                                <select id="products" name="products">
                                    <option value="laptop">Tất Cả</option>
                                    <option value="laptop">Laptop</option>
                                    <option value="phone">Iphone</option>
                                  </select>
                            </div>
                        </div>
                       
                        
                    </div>
                    <div class="row-box">
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone6.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 6 nomal</label>
                            <p>Giá: <span>1.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone6.jpg">
                            <input type="hidden" name="tensp" value="Iphone 6 nomal">
                            <input type="hidden" name="gia" value="1990000">
                            <input type="hidden" name="id" value="ip6">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone7.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 7 nomal</label>
                            <p>Giá: <span>3.000.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone7.jpg">
                            <input type="hidden" name="tensp" value="Iphone 7 nomal">
                            <input type="hidden" name="gia" value="3000000">
                            <input type="hidden" name="id" value="ip7">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone8.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 8 nomal</label>
                            <p>Giá: <span>4.490.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone8.jpg">
                            <input type="hidden" name="tensp" value="Iphone 8 nomal">
                            <input type="hidden" name="gia" value="4490000">
                            <input type="hidden" name="id" value="ip8">
                            <div style="display: flex;">
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone"style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone10.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 10 nomal</label>
                            <p>Giá: <span>5.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone10.jpg">
                            <input type="hidden" name="tensp" value="Iphone 10 nomal">
                            <input type="hidden" name="gia" value="5990000">
                            <input type="hidden" name="id" value="ip10">
                            <div style="display: flex;">
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone"style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone11.jpeg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 11 nomal</label>
                            <p>Giá: <span>9.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone11.jpeg">
                            <input type="hidden" name="tensp" value="Iphone 11 nomal">
                            <input type="hidden" name="gia" value="9990000">
                            <input type="hidden" name="id" value="ip11">
                            <div style="display: flex;">
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone12.webp" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 12 nomal</label>
                            <p>Giá: <span>11.390.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone12.webp">
                            <input type="hidden" name="tensp" value="Iphone 12 nomal">
                            <input type="hidden" name="gia" value="11390000">
                            <input type="hidden" name="id" value="ip12">
                            <div style="display: flex;">
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone13_.webp" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 13 nomal</label>
                            <p>Giá: <span>15.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone13_.webp">
                            <input type="hidden" name="tensp" value="Iphone 13 nomal">
                            <input type="hidden" name="gia" value="15990000">
                            <input type="hidden" name="id" value="ip13">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone14.webp" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 14 nomal</label>
                            <p>Giá: <span>17.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone14.webp">
                            <input type="hidden" name="tensp" value="Iphone 14 nomal">
                            <input type="hidden" name="gia" value="17990000">
                            <input type="hidden" name="id" value="ip14">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone" style="display: none;">
                        <form action="addtocart.php" method="post">
                        <img src="hình/anhdienthoai/iphone15.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                        <label>Iphone 15 nomal</label>
                        <p>Giá: <span>19.990.000</span>Đồng</p>
                        <input type="hidden" name="img" value="hình/anhdienthoai/iphone15.jpg">
                            <input type="hidden" name="tensp" value="Iphone 15 nomal">
                            <input type="hidden" name="gia" value="19990000">
                            <input type="hidden" name="id" value="ip15">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box phone"style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhdienthoai/iphone16.jpg" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>Iphone 16 nomal</label>
                            <p>Giá: <span>100.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhdienthoai/iphone16.jpg">
                            <input type="hidden" name="tensp" value="Iphone 16 nomal">
                            <input type="hidden" name="gia" value="100990000">
                            <input type="hidden" name="id" value="ip16">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    <div class="box laptop"style="display: none;">
                        <form action="addtocart.php" method="post">
                            <img src="hình/anhLapTop/gigabyte.webp" style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;" alt="">
                            <label>gigabyte</label>
                            <p>Giá: <span>25.990.000</span>Đồng</p>
                            <input type="hidden" name="img" value="hình/anhLapTop/gigabyte.webp">
                            <input type="hidden" name="tensp" value="gigabyte">
                            <input type="hidden" name="gia" value="25990000">
                            <input type="hidden" name="id" value="gigabyte">
                            <div style="display: flex;" >
                                <input type="submit" name="dathang" value="Đặt hàng">
                                <input type="button" class="btnmua" value="Mua Ngay">
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                    
            </div>  
            </div>
            <script>
                document.getElementById("products").addEventListener("change", function() {
                  var selectedValue = this.value;
                  var laptops = document.getElementsByClassName("laptop");
                  var phones = document.getElementsByClassName("phone");
                  var Tatca = document.getElementsByClassName("Tatca");
                
                  // Ẩn tất cả các div laptop và điện thoại
                  for (var i = 0; i < laptops.length; i++) {
                    laptops[i].style.display = "none";
                  }
                  for (var i = 0; i < phones.length; i++) {
                    phones[i].style.display = "none";
                  }
                
                  // Hiển thị div tương ứng với lựa chọn
                  if (selectedValue === "laptop") {
                    for (var i = 0; i < laptops.length; i++) {
                      laptops[i].style.display = "block";
                    }
                  } else if (selectedValue === "phone") {
                    for (var i = 0; i < phones.length; i++) {
                      phones[i].style.display = "block";
                    }
                  }else if(SelectionValue=="Tatca"){
                    for (var i = 0; i < laptops.length; i++) {
                      laptops[i].style.display = "none";
                    }
                    for (var i = 0; i < phones.length; i++) {
                      phones[i].style.display = "none";
                    }
                  }
                });
            </script>
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
             
            </script>
        </body>
        </html>