<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/detail.css">
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
                    <a href="#">Giỏ hàng</a>
                    <hr>
                    <a href="#">Danh mục sản phẩm</a>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Tin tức</a>
                    <a href="#">Thanh toán</a>
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
                <a href="#" id="shopcart_text">
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
                <a href="/payment">
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
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ol>
        </nav>
        <h4 class="text-center my-3">Giỏ hàng của bạn</h4>
        <table class="table table-striped mx-auto my-3" style="width:85%;">
            <thread>
                <tr class="table-success">
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col"></th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>
                        <img src="img/hp1.jpg" alt="main_pic" width="10%" height="10%">
                        HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)
                    </td>
                    <td>20.390.000Đ</td>
                    <td class="col-1">
                        <form action="" method="GET">
                            <input tpye="text" class="form-control">
                        </form>
                    </td>
                    <td>20.390.000Đ</td>
                    <td>
                        <button type="button" class="btn btn-outline-danger">
                            <i class="bi bi-trash text-danger"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="img/imac1.jpg" alt="Product" width="10%" height="10%">
                        iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A)
                    </td>
                    <td>27.990.000Đ</td>
                    <td class="col-1">
                        <form action="" method="GET">
                            <input tpye="text" class="form-control">
                        </form>
                    </td>
                    <td>27.990.000Đ</td>
                    <td>
                        <button type="button" class="btn btn-outline-danger">
                            <i class="bi bi-trash text-danger"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-right table-info" colspan="5">
                        Tổng tiền:
                        <span style="color: rgb(17, 17, 136); font-weight:600;">48.380.000Đ</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between mb-3">
            <button class="btn" style="background-color:#FFD700; font-weight:500;" onclick="location.href='/'"
                type="button">
                TIẾP TỤC MUA HÀNG
            </button>
            <button class="btn" style="background-color:#00B2EE; font-weight:500;" onclick="location.href='/payment'"
                type="button">
                THANH TOÁN
            </button>
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