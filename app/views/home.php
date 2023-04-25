<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/home.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row cus_header">
            <div class="col-md-3 text-md-left text-center text">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav pt-5">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="d-flex align-items-center px-3">
                        <i class="bi bi-person-circle" style="font-size:20px;"></i>
                        <div class="dropdown">

                            <?php if ($authService->isLoggedIn()): ?>
                                <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                                    aria-expanded="false">
                                    <?php echo $authService->getLoggedInUser()->getUsername(); ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            <?php else: ?>
                                <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                                    aria-expanded="false">
                                    Tài khoản
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/login">Đăng nhập</a>
                                    <a class="dropdown-item" href="/register">Đăng ký</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="/cart">Giỏ hàng</a>
                    <hr>
                    <a href="#">Sản phẩm</a>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Tin tức</a>
                    <a href="#">Thanh toán</a>
                    <a href="#">Liên hệ</a>
                </div>
                <button class="btn sidebar d-md-none" onclick="openNav()" type="submit">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Logo of web page -->
                <a href="" class="px-2">
                    <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                    BKShop
                </a>
            </div>
            <!-- Search bar -->
            <div class="col-md-4 search">
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
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
                <div class="dropdown">
                    <i class="bi bi-person-circle" style="font-size:20px;"></i>
                    <?php if ($authService->isLoggedIn()): ?>
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                            aria-expanded="false">
                            <?php echo $authService->getLoggedInUser()->getUsername(); ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    <?php else: ?>
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                            aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/login">Đăng nhập</a>
                            <a class="dropdown-item" href="/register">Đăng ký</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Shopping cart -->
            <div class="col-md-3 d-none d-sm-block" style="font-size:18px;">
                <a href="/cart" id="shopcart_text">
                    <i class="bi bi-cart3" style="font-size:20px;"></i>
                    Giỏ hàng
                </a>
            </div>
        </div>
        <!-- Task bar -->
        <div class="row cus_navbar px-2">
            <div class="col-md-2 col-sm-3 d-none d-sm-block products">
                <a href="">
                    <i class="fa fa-bars"></i>
                    Sản phẩm
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block intro">
                <a href="/introduction">
                    Giới thiệu
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block news">
                <a href="/news">
                    Tin tức
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block payment">
                <a href="/payment">
                    Thanh toán
                </a>
            </div>
            <div class="col-md-2 col-sm-2 d-none d-sm-block contact">
                <a href="/contact">
                    Liên hệ
                </a>
            </div>
        </div>
        <div class="row main-content py-3">
            <div class="col-md-2 col-sm-10 mx-3 my-3 list_product">
                <ul>
                    <li><a href="#"><i class="bi bi-laptop"></i><span>Laptop</span></a><br></li>
                    <li><a href="/list"><i class="bi bi-pc-display"></i><span>PC</span></a><br></li>
                    <li><a href="#"><i class="bi bi-mouse"></i><span>Chuột máy tính</span></a><br></li>
                    <li><a href="#"><i class="bi bi-keyboard"></i><span>Bàn phím</span></a><br></li>
                    <li><a href="#"><i class="bi bi-headphones"></i><span>Tai nghe</span></a><br></li>
                    <li><a href="#"><i class="bi bi-cpu"></i><span>Linh kiện</span></a><br></li>
                    <li><a href="#"><i class="bi bi-tv"></i><span>Màn hình</span></a><br></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="img/slideshow_1.png" alt="pst1" width="100%" height="300px">
                <div class="row" style="margin-top:10px">
                    <img class="col-md-6" src="img/slideshow_15.png" alt="pst2" width="100%" height="145px">
                    <img class="col-md-6" src="img/slideshow_4.png" alt="pst3" width="100%" height="145px">
                </div>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/solid4.png" alt="pst2" width="100%" height="25%">
                <img src="img/solid5.png" alt="pst2" width="100%" height="25%" style="margin-top:10px">
                <img src="img/slideshow_5.png" alt="pst2" width="100%" height="25%" style="margin-top:10px">
            </div>
        </div>
        <div class="pc_top">
            PC BÁN CHẠY NHẤT
            <a style="float:right; text-decoration: none; color: white;" href="/list">Xem tất cả ></a>
        </div>
        <div class="d-flex flex-wrap justify-content-between">
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p> Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p> Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p> Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p> Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/hp1.jpg" alt="Product">
                <p>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</p>
                <p> Giá: 20.390.000Đ</p>
                <a href="detail.php" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <div class="product col-lg-4 col-md-5 col-sm-12">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p> Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
            </div>
        </div>
    </div>
    <footer class="bg-primary">
        <div class="row g-3">
            <div class="col-md-4">
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