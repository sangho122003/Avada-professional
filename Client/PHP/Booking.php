<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="hình/logo.png">
    <title>Booking | Avada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        a {
            color: rgb(0, 0, 0);
            /* Màu văn bản của hyperlink */
            text-decoration: none;
            /* Loại bỏ gạch chân */
        }

        html,
        body {
            margin: 0;
        }

        #dau {
            display: flex;
            position: fixed;
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
        }

        .dau1 {
            flex: 1;
        }

        .dau-b {
            height: 100%;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #cuoi {
            width: 100%;
        }

        .custom-list {
            list-style-type: none;
            /* Ẩn kiểu danh sách mặc định */
            padding: 0;
            margin: 0;
        }

        .custom-list-item {
            padding: 10px;
            display: block;
            /* Hiển thị mỗi mục danh sách dưới dạng flexbox */
            align-items: center;
            /* Căn các phần tử con theo trục dọc */
            border-radius: 20px;
        }

        .custom-list-item i {
            margin-right: 10px;
            /* Khoảng cách giữa biểu tượng và nhãn */
        }

        .dau-b:hover {
            background-color: rgb(119, 118, 118);
        }

        .custom-list-item:hover {
            background-color: lightgray;
            padding: 5px;
        }

        .container {
            width: 100%;
            height: auto;
            background-color: lightgray;
            border-radius: 2px;
        }

        .container img {
            max-width: 100%;
            /* Đảm bảo ảnh không vượt quá chiều rộng của thẻ lớn */
            height: auto;
            /* Đảm bảo chiều cao tự động điều chỉnh cho phù hợp */
            display: block;
            /* Ảnh sẽ hiển thị dưới dạng block element để không bị lệch hàng */
            margin: 0 auto;
            /* Căn chỉnh ảnh vào giữa */
        }

        .small {
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
        }

        .small img,
        small label {
            margin: 1px;
        }

        .small i,
        small label {
            margin: 1px;
        }

        .row-box {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            /* Maximum 5 columns */
            gap: 20px;
            padding: 20px;
        }

        .box {
            padding: 20px;
            background-color: #f9f9f9;
            /* Change to desired background color */
            border-radius: 10px;
            border: 1px solid black;
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
            background-color: white;
            /* Change to desired button color */
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
            background-color: black;
            /* Khi di chuột vào, nền sẽ chuyển sang màu đen */
            background-image: linear-gradient(to bottom, transparent, #45a049);
            /* Hiệu ứng gradient từ trên xuống */
            color: white;
            /* Màu chữ khi di chuột vào */
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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 25px;
            border: 1px groove black;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .big-content {
            display: block;
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

        #openModalBtn {
            width: 100%;
            background-color: black;
            color: white;
            padding: 10px 15px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Thông Tin Khách Sạn:</p> <!-- Text added above the form -->
            <div style="display: flex;">
                <div id="modalInfo" style="flex: 1;">
                    <img id="img-info" style="width: 90%; height: 200px;" alt="">
                    <p>Thông Tin cơ bản:</p>
                    <span>Đây là 1 khách sạn như cặc</span>
                </div>
                <div style="flex: 1; align-items: center;justify-content: center;">
                    <label id="tenkhachsan-info" style="font-size: 50px;">Khách Sạn ramos</label>
                    <br>
                    <label id="hotellocal-info">193 Nguyễn Lương Bằng</label>
                    <H3>Đặt Phòng ngay:</H3>
                    <form action="">
                        <input type="text" name="" id="" placeholder="Họ Tên">
                        <br>
                        <input type="number" name="" id="" placeholder="CMND/CCCD">
                        <br>
                        <label for="">Ngày Check In:</label>
                        <input type="date" name="" id="">
                        <br>
                        <label for="">Ngày Check Out:</label>
                        <input type="date" name="" id="">
                        <select name="" id=""></select>
                        <br>
                        <input type="submit" value="Đặt Phòng">
                    </form>
                </div>

                <div style="flex: 1;">
                    <label for="">Bản Đồ:</label>
                    <iframe id="map-info"
                        
                        width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
    <div class="big-content">
        <div id="dau">
            <div id="NameAvada" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
                AVADA-Booking
            </div>
            <div id="find" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
                <input id="find" style="width: 100%; border-radius: 25px;" type="text" name="" id=""
                    placeholder="search">
            </div>
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
                    <li class="custom-list-item"><a href="Music.html"><i class="fa fa-music" aria-hidden="true"></i>
                            Avada Music</a></li>
                    <li class="custom-list-item"><a href=""><i class="fa fa-video-camera"
                                aria-hidden="true"></i>Video</a></li>
                </ul>
            </div>

            <div class="dau1" style=" border-radius: 25px;border: 5px solid black; height: auto; flex: 4;">
                <div
                    style="display: flex;justify-content: center;border-radius: 25px 25px 0 0 ;align-items: center; background-size: cover;background-image: url('hình/travel.jpg');">
                    <div class="titlebooking" style="font-size: 60px;">Booking-Avada</div>  
                </div>  
                <div style="display: flex; align-items: center;justify-content:center">
                    <div style="width: 100%; height: auto; border-end-start-radius: 2% ; background-color: black; display: flex; justify-content: center; align-items: center;">
                       <div>
                        <div style="width: 100%;">
                            <input type="text" name=""  id="" placeholder="Tìm kiếm sự thương hại di bố mày tã lắm rồi ">
                        </div>
                        
                        <div>
                            <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                                <option value="" selected>Chọn tỉnh thành</option>
                            </select>
    
                            <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                                <option value="" selected>Chọn quận huyện</option>
                            </select>
    
                            <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                                <option value="" selected>Chọn phường xã</option>
                            </select>
                        </div>
                       
                       </div>
                        
                    </div>
                </div>

                <div>
                    <div class="row-box">
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Rosamia/Rosamia.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Khách sạn Rosamia Đà Nẵng</label>
                                <p>Giá: <span>1.910.000-5.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">282 Võ Nguyên Giáp, Phường Mỹ An, Quận Ngũ Hành Sơn, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Rosamia/Rosamia.jpg">
                                <input type="hidden" name="tenkhachsan" value="Khách sạn Rosamia Đà Nẵng">
                                <input type="hidden" name="gia" value="1990000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.24728111351!2d108.24511647502882!3d16.052652784624506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177af194d1ff%3A0xa55c8b30ba2465c!2zMjgyIFbDtSBOZ3V5w6puIEdpw6FwLCBC4bqvYyBN4bu5IFBow7osIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1709892671339!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                        <div class="box phone" style="display: block;">
                            <form action="#" method="post">
                                <img src="hình/anhTravel/Diamond/525162446.jpg"
                                    style="width: 100%; height: auto; border-radius:10px; margin-top:25px ; object-fit: cover;"
                                    alt="">
                                <label>Diamond Hotel & Apartment</label>
                                <p>Giá: <span>910.000-3.710.000</span>Đồng</p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span id="hotellocal">4 Chính Hữu, Phường An Hải Bắc, Quận Sơn Trà, Đà Nẵng</span>
                                <input type="hidden" name="img" value="hình/anhTravel/Diamond/525162446.jpg">
                                <input type="hidden" name="tenkhachsan" value="Diamond Hotel & Apartment">
                                <input type="hidden" name="gia" value="910.000">
                                <input type="hidden" name="maps" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8266945950472!2d108.23721107601445!3d16.07448058460572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142178876c3bdc3%3A0xdd36cb1014e42c46!2zNCBDaMOtbmggSOG7r3UsIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710464116885!5m2!1svi!2s">
                                <div>
                                    <input style="width: 80%;" id="openModalBtn" value="Đặt Ngay">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="dau1">
                <ul class="custom-list" style="position: fixed;">
                    <li class="custom-list-item"><i class="fa fa-user" aria-hidden="true"></i> <label>Friend</label>
                    </li>
                    <li class="custom-list-item">Hồ Sang</li>
                </ul>
            </div>
        </div>
        <script>
            // Lấy modal
            var modal = document.getElementById("myModal");
        
            // Lấy các phần tử trong modal
            var img = document.getElementById("img-info");
            var tenkhachsan = document.getElementById("tenkhachsan-info");
            var hotellocal = document.getElementById("hotellocal-info");
            var map = document.getElementById("map-info");
        
            // Lấy các nút mở và đóng modal
            var btns = document.querySelectorAll("#openModalBtn");
            var span = document.getElementsByClassName("close")[0];
        
            // Xử lý khi bấm nút mở modal
            btns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    modal.style.display = "block";
        
                    // Lấy thông tin từ form box
                    var parentBox = btn.closest(".box");
                    var imgSrc = parentBox.querySelector("input[name='img']").value;
                    var tenkhachsanValue = parentBox.querySelector("input[name='tenkhachsan']").value;
                    var hotellocalValue = parentBox.querySelector("#hotellocal").textContent;
                    var mapSrc = parentBox.querySelector("input[name='maps']").value;
        
                    // Đặt thông tin vào modal
                    img.src = imgSrc;
                    tenkhachsan.textContent = tenkhachsanValue;
                    hotellocal.textContent = hotellocalValue;
                    map.src = mapSrc;
                });
            });
        
            // Xử lý khi bấm nút đóng modal
            span.onclick = function() {
                modal.style.display = "none";
            };
        
            // Xử lý khi click ngoài modal thì đóng modal
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        </script>
          <script>
            let UserInfo = JSON.parse(sessionStorage.getItem("user-info"))
    
            let GreetHead = document.getElementById('greet');
            let SignoutBtn = document.getElementById('signoutbutton');
    
            let Signout = () => {
                sessionStorage.removeItem("user-creds");
                sessionStorage.removeItem("user-info");
                window.location.href = 'index.html'
            }
            let CheckCred = () => {
                if (!sessionStorage.getItem("user-creds"))
                    window.location.href = 'index.html'
                else {
    
                    GreetHead.innerText = `${UserInfo.firstname + " " + UserInfo.lastname}`;
                }
            }
            window.addEventListener('load', CheckCred);
            SignoutBtn.addEventListener('click', Signout)
    
    
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
            var citis = document.getElementById("city");
            var districts = document.getElementById("district");
            var wards = document.getElementById("ward");
            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };
            var promise = axios(Parameter);
            promise.then(function (result) {
                renderCity(result.data);
            });

            function renderCity(data) {
                for (const x of data) {
                    citis.options[citis.options.length] = new Option(x.Name, x.Id);
                }
                citis.onchange = function () {
                    district.length = 1;
                    ward.length = 1;
                    if (this.value != "") {
                        const result = data.filter(n => n.Id === this.value);

                        for (const k of result[0].Districts) {
                            district.options[district.options.length] = new Option(k.Name, k.Id);
                        }
                    }
                };
                district.onchange = function () {
                    ward.length = 1;
                    const dataCity = data.filter((n) => n.Id === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                        for (const w of dataWards) {
                            wards.options[wards.options.length] = new Option(w.Name, w.Id);
                        }
                    }
                };
            }
        </script>
        <script>
            
        </script>
         
        <script>
            var likeButton = document.getElementsByClassName('likeButton');
            likeButton.onclick = function () {
                if (likeButton.src.endsWith("unlike.png")) {
                    likeButton.src = "Hình/like.png";
                } else {
                    likeButton.src = "Hình/unlike.png";
                }
            };
        </script>
    </div>

</body>

</html>