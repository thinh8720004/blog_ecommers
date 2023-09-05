<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.0.0/js/all.js" integrity="your-integrity-hash-here" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/header.css">
    <title>Document</title>
    <style>
        body{
            height: 1000px;
            margin: 0;
            padding: 0;
                }
                .dt {
    
    left: 0px;
    top: 0px;
    position: fixed;
    z-index: 97;
    height: 30px;
    overflow: hidden;
    width: 100%;
    background-color: #f25a29;
    border-bottom: solid 1px #f5835f;
}


        .dt a{
            position: relative;
            left: 100px;
            line-height: 30px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
    font-family: Arial;
            margin-right: 10px;
        
        
        }
        .dt span {
            float: right;
            line-height: 30px;
            color: #fff;
            padding: 0 60px;

        }
        .search {
                padding-top: 54px;
            width: 100%;
            height: 100px;
            display: inline-block;
        }
        .logo {
            width: 30%;
            height: 80%;
            position: relative;
            left: 60px;
        }
        .logo img {
            width: 50%;
            height: 100px;
            position: relative;
            top: -10px;
            left: 60px;

        }
        .input {
            width: 30%;
            height: 30px;
        }

        .input input {
            width: 30%;
            height: 30px;
            position: absolute;
            right: 590px;
            top: 80px;
            line-height: 100px;
        }
        .input .fa {
            width: 30%;
            height: 30px;
            position: absolute;
            right: 590px;
            top: 70px;
            line-height: 100px;
        }
        #iSear {
            padding-top: 1.5px;
            margin-right: 5px;
            width: 30px;
            height: 30px;
        }
        .r {
            position: relative;

            float: right;
            left: 720px;
            bottom: 60px;
        }
        .r span {
    font-size: 18px;}

.r b {
    color: #306472;
    font-size: 20px;
}
     /* CSS cho menu cơ bản */
    
     .menu-container {
        background-color: #333;
        position: relative;
    }
    
    .menu {
        list-style: none;
        padding: 0;
        margin: 0 80px;
        display: flex;
        justify-content: space-between;
        background-color: #333;
        height: 40px;
    }
    
    .menu-item {
        margin: 0;
        width: auto;
        text-align: center;
    }
    
    .menu-link:hover {
        background-color: #f25a29;
    }
    
    .menu-link {
        text-decoration: none;
        color: #fff;
        padding:  0 10px;
        display: block;
        line-height: 40px;
        /* background-color: ; */
    }
    /* Hiệu ứng khi hover vào mục menu cha */
    
    .menu-item:hover .submenu {
        display: block;
    }
    
    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        /* background-color: #fff; */
        /* border: solid 2px #ccc; */
        width: 200px;
        background-color: #fff;
        z-index: 1;
        width: 80%;
        margin: 0 100px;
        cursor: pointer;
        /* text-decoration: underline; */
        border: solid 10px #f3f3f3;

    }
    
    .submenu-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex; /* Hiển thị các mục con trong cùng một hàng */
  /* flex-wrap: wrap; Cho phép các mục con chuyển hàng khi không đủ không gian */
        width: 80%;
        /* background-color: black;s */

    }
    .submenu-list1 {
        list-style: none;
        padding: 0;
        margin: 0;
  /* flex-wrap: wrap; Cho phép các mục con chuyển hàng khi không đủ không gian */
        width: 60%;
        height: 300px;
        /* background-image: url('https://noithatgiaphong.vn/img/m/p103.jpg'); */
        background-size: 30%; /* Sử dụng cover để hình nền bao phủ phần tử */
        background-repeat: no-repeat;
background-color: red;
        float: right;
    }

    
    .submenu-item {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        height: 300px;

    }
    
    .submenu-link {
        text-decoration: none;
        color: #3d3e42;
        display: block;
        padding: 8px 120px;
        text-align: left;
        /* border-bottom: 1px solid #ccc; */
        transition: background-color 0.3s;
        cursor: pointer;
        width: 50%;
        display: flex; /* Hiển thị các phần tử con trong cùng một hàng */

    }
    
    .submenu-link:hover {
        /* background-color: blue; */
        /* text-decoration: solid; */
        text-decoration: underline;
        color: red;
    }
    
   
    .menu-item .ok img {
        width: 250px;
        height: 250px;
        padding-top: 1px;
        float:  right
        

    }
    .ok img
    {
        margin-right: 60px;;
    }
    .submenu img {
        display: inline;
    }
  
    </style>
</head>
<body>
    <header>
        <div class="dt">
            <a href="">Trang chủ | </a>
            <a href="">Giới thiệu | </a>
            <a href="">Tầm nhìn - Sứ mệnh | </a>
            <a href="">Mua hàng đảm bảo | </a>
            <a href="">Tin tức | </a>
            <a href="">Tuyển dụng | </a>
            <a href="">Sự Kiện</a>
            <span>  Hotline: <b>0935.194.469 - 0901.945.455</b></span>
        </div>
        </header>
        <div class="search">
            <div class="logo">
                <img src="image/logo.jpg" alt="">
            </div>

            <div class="input">
            <div>
            <input name="ctl00$key" type="text" id="key" class="txt" placeholder="Nhập từ khóa tìm kiếm"></div>
            <input type="image" name="ctl00$iSear" id="iSear" class="s" src="https://i.gifer.com/7jM3.gif">

            <div class="r">
            <span>Hotline hỗ trợ</span>
            <br>
            <b>0935.194.469 - 0901.945.455</b>
            </div>
            </div>
        </div>


        <div class="menu-container">
    <ul class="menu">
        <li class="menu-item">
            <a class="menu-link" href="#">TRANG CHỦ</a>
            <!-- <div class="submenu">
                <ul class="submenu-list">

                </ul>
            </div> -->
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="KHUYẾN MÃI">KHUYẾN MÃI</a>
            <!-- <div class="submenu">
                <ul class="submenu-list">
                    
                </ul>
            </div> -->
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="SOFA ĐÀ NẴNG">SOFA</a>
            <div class="submenu">
                <ul class="submenu-list">

                    <li class="submenu-item">

                        <a class="submenu-link" href="#">Sofa Da thật</a>
                        <a class="submenu-link" href="#">Sofa Phong cách Ý</a>
                        <a class="submenu-link" href="#">Sofa Phong Cách Malaysia</a>
                        <a class="submenu-link" href="#">Sofa Phong Cách Hàn Quốc</a>
                        <a class="submenu-link" href="#">Sofa Phong Cách Bắc Âu</a>

                        <div class="image">
                        <!-- <img src="https://noithatgiaphong.vn/img/m/p103.jpg" alt="" srcset=""> -->

                        </div>
                   
                    </li>

                    

                    


                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="SOFA GỖ">SOFA GỖ</a>
            <div class="submenu">
                <ul class="submenu-list">
                    <li class="submenu-item">
                        <a class="submenu-link" href="#">Sofa Gỗ Óc Chó</a>
                        <a class="submenu-link" href="#">Sofa Gỗ Chữ U</a>
                        <a class="submenu-link" href="#">Sofa Gỗ Chữ L</a>
                    </li>
                    
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="BÀN ĂN">BÀN ĂN</a>
            <div class="submenu">
                <ul class="submenu-list">
                    <li class="submenu-item">
                        <a class="submenu-link" href="#">Bàn Ăn Nhập Khẩu</a>
                        <a class="submenu-link" href="#">Bộ bàn ăn ghế văng</a>
                        <a class="submenu-link" href="#">Bàn Ăn Gỗ</a>
                        <a class="submenu-link" href="#">Bàn Ăn Tròn</a>
                        <a class="submenu-link" href="#">Bàn Ăn Oval</a>
                        <a class="submenu-link" href="#">Bàn ăn Căn hộ</a>
                        <a class="submenu-link" href="#">Bàn Ăn Thông Minh</a>
</li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="GIƯỜNG TỦ">GIƯỜNG TỦ</a>
            <div class="submenu">
                <ul class="submenu-list">
                    <li class="submenu-item">
                        <a class="submenu-link" href="#">Giường Gỗ Tự Nhiên</a>
                        <a class="submenu-link" href="#">Giường Gỗ Veneer</a>
                        <a class="submenu-link" href="#">Giường Gỗ MDF</a>
                        <a class="submenu-link" href="#">Giường Tầng</a>
                        <a class="submenu-link" href="#">Tủ Quần Áo Tự Nhiên</a>
                        <a class="submenu-link" href="#">Tủ Quần Áo Veneer</a>
                        <a class="submenu-link" href="#">Tủ Quần Áo MDF</a>
                        <a class="submenu-link" href="#">Tủ Nhựa</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="ĐỒ NỘI THẤT">ĐỒ NỘI THẤT</a>
            <div class="submenu">
                <ul class="submenu-list">
                    <li class="submenu-item">
                        <a class="submenu-link" href="#">Nội Thất Phòng Khách</a>
                        <a class="submenu-link" href="#">Bàn Trà Sofa</a>
                        <a class="submenu-link" href="#">Kệ Tivi Nhập Khẩu</a>
                        <a class="submenu-link" href="#">Kệ Tivi Gỗ</a>
                        <a class="submenu-link" href="#">Tủ Giày</a>
                        <a class="submenu-link" href="#">Kệ Trang Trí</a>
                        <a class="submenu-link" href="#">Đồ Trang Trí</a>
                        <a class="submenu-link" href="#">Thảm Trải Sàn</a>
                        <a class="submenu-link" href="#">Tranh tường 3D</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="THIẾT KẾ THI CÔNG">THIẾT KẾ THI CÔNG</a>
            <div class="submenu">
                <ul class="submenu-list">
                    <li class="submenu-item">
                        <a class="submenu-link" href="#">Thiết kế nội thất</a>
                        <a class="submenu-link" href="#">Thiết kế Nhà Phố</a>
                        <a class="submenu-link" href="#">Thiết kế Căn hộ - chung cư</a>
                        <a class="submenu-link" href="#">Thiết kế Quán Cafe -Nhà hàng</a>
                        <a class="submenu-link" href="#">Thiết kế Văn Phòng</a>
                        <a class="submenu-link" href="#">Thiết kế Tủ Bếp</a>
                    </li>

                    <li class="submenu-item-clearfix"></li>
                </ul>
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="THỰC TẾ KHÁCH HÀNG">THỰC TẾ KHÁCH HÀNG</a>
            <div class="submenu">
                
            </div>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="#" title="DỊCH VỤ">DỊCH VỤ</a>
            <div class="submenu">

            </div>
        </li>
    </ul>
</div>

</body>
</html>