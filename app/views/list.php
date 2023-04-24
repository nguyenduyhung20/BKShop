<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/list.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="login.php">Đăng nhập</a>
                            <a class="dropdown-item" href="sigin.php">Đăng ký</a>
                        </div>
                    </div>
                    <a href="cart.php">Giỏ hàng</a>
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
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
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
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
                <a href="cart.php" id="shopcart_text">
                    <i class="bi bi-cart3" style="font-size:20px;"></i>
                    Giỏ hàng
                </a>           
            </div>
        </div>
        <!-- Task bar -->
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
            <div class="col-md-2 col-sm-2 d-none d-sm-block intro">
                <a href="introduction.php">
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
        <nav style="margin-left: 30px;" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent border-bottom">
                <li class="breadcrumb-item"><a href="home.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#"></a>Danh mục sản phẩm</li>
                <li class="breadcrumb-item active" aria-current="page">PC</li>
            </ol>
        </nav>
        <div class="d-flex flex-wrap justify-content-between m-2">
            <div class="col-md-2 filter">
                <h5 class="py-3 text-center border-bottom">BỘ LỌC</h5>
                <div class="border-bottom pb-3">
                    <h6 class="py-2">SẮP XẾP THEO:</h6>
                    <form>
                        <div class="form-row align-items-center">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Giá tăng dần</option>
                                <option value="1">Giá giảm dần</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="border-bottom">
                    <h6 class="py-2">HỆ ĐIỀU HÀNH</h6>
                    <form>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="OS" id="OS1" value="option1" >
                            <label class="form-check-label" for="OS1">
                                Tất cả
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="OS" id="OS2" value="option2" >
                            <label class="form-check-label" for="OS2">
                                Windows
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="OS" id="OS3" value="option3" >
                            <label class="form-check-label" for="OS3">
                                Linux
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="OS" id="OS4" value="option4">
                            <label class="form-check-label" for="OS4">
                                Mac OS
                            </label>
                        </div>
                    </form>
                </div>
                <div class="border-bottom">
                    <h6 class="py-2">RAM</h6>
                    <form>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="RAM" id="RAM1" value="option1" checked>
                            <label class="form-check-label" for="RAM1">
                                Tất cả
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="RAM" id="RAM2" value="option2" >
                            <label class="form-check-label" for="RAM2">
                                8GB
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="RAM" id="RAM3" value="option3" >
                            <label class="form-check-label" for="RAM3">
                                16GB
                            </label>
                        </div>
                    </form>
                </div>
                <div class="border-bottom">
                    <h6 class="py-2">SSD</h6>
                    <form>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="SSD" id="SSD1" value="option1" >
                            <label class="form-check-label" for="SSD1">
                                Tất cả
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="SSD" id="SSD2" value="option2" >
                            <label class="form-check-label" for="SSD2">
                                128GB
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="SSD" id="SSD3" value="option3" >
                            <label class="form-check-label" for="SSD3">
                                256GB
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="SSD" id="SSD4" value="option4">
                            <label class="form-check-label" for="SSD4">
                                512GB
                            </label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="SSD" id="SSD5" value="option5">
                            <label class="form-check-label" for="SSD5">
                                1TB
                            </label>
                        </div>
                    </form>
                </div>
                <input class="btn mx-5 my-4" id="btn-filter" type="submit" value="Áp dụng">
            </div>
            <div class="col-md-10">
                <div class="row px-2">
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
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Trang trước</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Trang kế</a>
                        </li>
                    </ul>
                </nav>
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
