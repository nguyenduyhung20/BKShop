<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanh toán</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/payment.css">
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
    <script src="detail.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row cus_header">
            <div class="col-md-2 text-md-left text-center text">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav pt-5">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                            aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/login">Đăng nhập</a>
                            <a class="dropdown-item" href="/register">Đăng ký</a>
                        </div>
                    </div>
                    <a href="/cart">Giỏ hàng</a>
                    <hr>
                    <a href="">Danh mục sản phẩm</a>
                    <a href="/introduction">Giới thiệu</a>
                    <a href="#">Tin tức</a>
                    <a href="/payment">Thanh toán</a>
                    <a href="#">Liên hệ</a>
                </div>
                <button class="btn sidebar d-md-none" onclick="openNav()" type="submit">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Logo of web page -->
                <a href="/" class="px-2">
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
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
                <div class="dropdown">
                    <i class="bi bi-person-circle" style="font-size:20px;"></i>
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                        aria-expanded="false">
                        Tài khoản
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/login">Đăng nhập</a>
                        <a class="dropdown-item" href="/register">Đăng ký</a>
                    </div>
                </div>
            </div>
            <!-- Shopping cart -->
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
                <a href="/cart" id="shopcart_text">
                    <i class="bi bi-cart3" style="font-size:20px;"></i>
                    Giỏ hàng
                </a>
            </div>
        </div>
        <div class="row cus_navbar">
            <div class="col-md-2 products">
                <div class="dropdown">
                    <div class="dropbtn"><i class="fa fa-bars"></i> Danh mục sản phẩm</div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#"><i class="bi bi-laptop"></i><span>Laptop</span></a><br></li>
                            <li><a href="#"><i class="bi bi-pc-display"></i><span>PC</span></a><br></li>
                            <li><a href="#"><i class="bi bi-mouse"></i><span>Chuột máy tính</span></a><br></li>
                            <li><a href="#"><i class="bi bi-keyboard"></i><span>Bàn phím</span></a><br></li>
                            <li><a href="#"><i class="bi bi-headphones"></i><span>Tai nghe</span></a><br></li>
                            <li><a href="#"><i class="bi bi-cpu"></i><span>Linh kiện</span></a><br></li>
                            <li><a href="#"><i class="bi bi-tv"></i><span>Màn hình</span></a><br></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2 intro ml-5">
                <a href="/introduction">
                    Giới thiệu
                </a>
            </div>
            <div class="col-md-2 news">
                <a href="/news">
                    Tin tức
                </a>
            </div>
            <div class="col-md-2 payment">
                <a href="">
                    Thanh toán
                </a>
            </div>
            <div class="col-md-2 contact">
                <a href="/contact">
                    Liên hệ
                </a>
            </div>
        </div>
        <nav style="margin-left: 30px;" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent border-bottom">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between mx-2 my-4 pb-3">
            <div class="col-md-4">
                <h4 class="py-3">Thông tin nhận hàng</h4>
                <form action="" method="GET">
                    <div class="form-group">
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                            placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="PhoneNum" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Note" placeholder="Ghi chú">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header font-weight-bold">
                        <i class="fa fa-truck"></i> Phương thức vận chuyển
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-check py-2 border-bottom">
                                <input class="form-check-input" type="radio" name="SM" id="SM1" value="option1" chcked>
                                <label class="form-check-label" for="SM1">
                                    Nhận tại cửa hàng
                                </label>
                            </div>
                            <div class="form-check pt-2">
                                <input class="form-check-input" type="radio" name="SM" id="SM2" value="option2">
                                <label class="form-check-label" for="SM2">
                                    Giao hàng nhanh (Trong vòng 2 giờ)
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header font-weight-bold">
                        <i class="fa fa-money"></i> Hình thức thanh toán
                    </div>
                    <div class="card-body">
                        <div class="form-check py-2 border-bottom">
                            <input class="form-check-input" type="radio" name="PM" id="PM1" value="option1" checked>
                            <label class="form-check-label" for="PM1">
                                Thanh toán bằng tiền mặt
                            </label>
                        </div>
                        <div class="form-check py-2 border-bottom">
                            <input class="form-check-input" type="radio" name="PM" id="PM2" value="option1">
                            <label class="form-check-label" for="PM2">
                                Internet Banking
                            </label>
                        </div>
                        <div class="form-check py-2 border-bottom d-flex justify-content-left">
                            <input class="form-check-input" type="radio" name="PM" id="PM3" value="option1">
                            <label class="form-check-label" for="PM3">
                                <img src="img/logo-vnpay.svg" height="20"> Thanh toán qua VNPAY
                            </label>
                        </div>
                        <div class="form-check pt-2 d-flex justify-content-left">
                            <input class="form-check-input" type="radio" name="PM" id="PM4" value="option2">
                            <label class="form-check-label" for="PM4">
                                <img src="img/momo.png" height="20"> Thanh toán bằng ví MOMO
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border rounded">
                <h4 class="py-3">Chi tiết đơn hàng</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)<br>
                                <span style="color:#999999;">
                                    Giá bán: 20.390.000Đ<br>
                                    Số lượng: 1
                                </span>
                            </td>
                            <td>20.390.000Đ</td>
                        </tr>
                        <tr>
                            <td>
                                iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A)<br>
                                <span style="color:#999999;">
                                    Giá bán: 27.990.000Đ<br>
                                    Số lượng: 1
                                </span>
                            </td>
                            <td>27.990.000Đ</td>
                        </tr>
                        <tr>
                            <td>
                                Tạm tính:<br>
                                Phí vận chuyển:<br>
                                Tổng tiền:
                            </td>
                            <td>
                                <span style="color: rgb(17, 17, 136);">48.380.000Đ</span><br>
                                Miễn phí<br>
                                <span
                                    style="color: rgb(17, 17, 136); font-size:20px; font-weight:bold;">48.380.000Đ</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between mb-3">
                    <button class="btn btn-link" id="return_cart" onclick="location.href='/cart'" type="button">
                        Quay lại giỏ hàng
                    </button>
                    <button class="btn" id="btn-order" type="button">
                        Đặt hàng
                    </button>
                </div>
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
    <script src="js/detail.js"></script>
</body>

</html>