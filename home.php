<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/home.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row cus_header">
            <div class="col-md-2 Logo text-md-left text-center text">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav pt-5">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="login.php">Đăng nhập</a>
                            <a class="dropdown-item" href="sigin.php">Đăng ký</a>
                        </div>
                    </div>
                    <a href="#">Giỏ hàng</a>
                    <hr>
                    <a href="#">Danh mục sản phẩm</a>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Tin tức</a>
                    <a href="#">Thanh toán</a>
                    <a href="#">Liên hệ</a>
                </div>
                <button class="btn sidebar d-md-none"  onclick="openNav()" type="submit">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Logo of web page -->
                <a href="" class="px-2">
                    <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                    BKShop
                </a>            
            </div>
            <!-- Search bar -->
            <div class="col-md-6 search">
                <form class="input-group">
                    <input type="text" class="form-control" placeholder="Bạn muốn tìm gì?">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Account -->
            <div class="col-md-2 d-none d-sm-block account" style="font-size:18px;">
                <div class="dropdown">
                    <i class="bi bi-person-circle" style="font-size:20px;"></i>
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
                        Tài khoản
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Đăng nhập</a>
                        <a class="dropdown-item" href="sigin.php">Đăng ký</a>
                    </div>
                </div>   
            </div>
            <!-- Shopping cart -->
            <div class="col-md-2 d-none d-sm-block shopcart" style="font-size:18px;">
                <a href="#" id="shopcart_text">
                    <i class="bi bi-cart3" style="font-size:20px;"></i>
                    Giỏ hàng
                </a>           
            </div>
        </div>
        <!-- Task bar -->
        <div class="row cus_navbar">
            <div class="col-md-2 col-sm-3 d-none d-sm-block products">
                <a href="list.php">
                    <i class="fa fa-bars"></i>
                    Danh mục sản phẩm
                </a>            
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block intro">
                <a href="">
                    Giới thiệu
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block news">
                <a href="new.php">
                    Tin tức
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block payment">
                <a href="payment.php">
                    Thanh toán
                </a>           
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block contact">
                <a href="contact.php">
                    Liên hệ
                </a>           
            </div>
        </div>
        <div class="row main-content">
            <div class="col-md-2 list_product">
                <table>
                    <tr>
                        <td><a href="#"><i class="bi bi-laptop"></i></a></td>
                        <td><a href="#">Laptop</a></td>
                    </tr>  
                    <tr>
                        <td><a href="#"><i class="bi bi-pc-display"></i></a></td>
                        <td><a href="#">PC</a></td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="bi bi-mouse"></i></a></td>
                        <td><a href="#">Chuột máy tính</a></td>
                    </tr>  
                    <tr>
                        <td><a href="#"><i class="bi bi-keyboard"></i></a></td>
                        <td><a href="#">Bàn phím</a></td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="bi bi-headphones"></i></a></td>
                        <td><a href="#">Tai nghe + Loa</a></td>
                    </tr>  
                    <tr>
                        <td><a href="#"><i class="bi bi-cpu"></i></a></td>
                        <td><a href="#">Linh kiện PC</a></td>
                    </tr> 
                    <tr>
                        <td><a href="#"><i class="bi bi-tv"></i></a></td>
                        <td><a href="#">Màn hình</a></td>
                    </tr> 
                </table>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6" style="margin-top: 10px">
                <img src="img/slideshow_1.png" alt="pst1" width="100%" height="300px">
                <div class="row" style="margin-top:10px">
                    <img class = "col-md-6" src="img/slideshow_15.png" alt="pst2" width="100%" height="145px">
                    <img class = "col-md-6" src="img/slideshow_4.png" alt="pst3" width="270px" height="145px">
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 10px">
                <img src="img/solid4.png" alt="pst2" width="270px" height="145px">
                <img src="img/solid5.png" alt="pst2" width="270px" height="145px" style="margin-top:10px">
                <img src="img/slideshow_5.png" alt="pst2" width="270px" height="145px" style="margin-top:10px">
            </div>
        </div>
        <div class="pc_top">
            PC BÁN CHẠY NHẤT
            <a style="float:right; text-decoration: none; color: white;" href="#">Xem tất cả ></a>
        </div>
        <div class="row ml-4">
            <div class="product col-md-2">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch M1 2021 4.5K/7-core GPU</p>
                <p> Giá: 23.990.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch M1 2021 4.5K/7-core GPU</p>
                <p> Giá: 23.990.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch M1 2021 4.5K/7-core GPU</p>
                <p> Giá: 23.990.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch M1 2021 4.5K/7-core GPU</p>
                <p> Giá: 23.990.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-md-2">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
        </div>
    </div>
    <footer class="bg-primary">
        <div class="row g-3">
            <div class="col-md-4">
                <!-- <img src="smartphone.png" alt=""> -->
                <!-- Liên hệ với chúng tôi qua số điện thoại: 0999 999 999 -->
                <h4>LIÊN HỆ</h4>
                <p>Hệ thống tổng đài: 0999 999 999<br>(Hoạt động từ 8h đến 20h cùng ngày)</p>
                <p>Email: bkshop.vn@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h4>HỆ THỐNG CỬA HÀNG</h4>
                <p>- Địa chỉ 1: 268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p>- Địa chỉ 2: Đông Hòa, Dĩ An, Bình Dương, Việt Nam</p>   
            </div>
            <div class="col-md-4">
                <h4>THÔNG TIN VÀ CHÍNH SÁCH</h4>
                <a href="#">Mua hàng và đổi trả online</a><br>
                <a href="#">Tra thông tin đơn hàng</a><br>
                <a href="#">Tra cứu hóa đơn điện tử</a><br>
                <a href="#">Dịch vụ bảo hành</a><br>
                <a href="#">Tuyển dụng</a><br>
            </div>
        </div>
    </footer>
    <script src="js/home.js"></script>  
</body>
</html>
