<!DOCTYPE html>
<html lang="en">

<head>
    <title>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</title>
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
                    <a href="/">Sản phẩm</a>
                    <a href="/introduction">Giới thiệu</a>
                    <a href="/news">Tin tức</a>
                    <a href="/payment">Thanh toán</a>
                    <a href="/contact">Liên hệ</a>
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
            <div class="col-md-5 search">
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
                    <div class="dropbtn"><i class="fa fa-bars"></i> Sản phẩm</div>
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
                <li class="breadcrumb-item"><a href="#"></a>Sản phẩm</li>
                <li class="breadcrumb-item active" aria-current="page">PC</li>
            </ol>
        </nav>
        <?php
            $link = mysqli_connect("localhost","root","","bkshop");
            $id_product = $_GET['id_product'];
            $sql = "SELECT * FROM product WHERE id_product = $id_product";
            $query = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($query);
        ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" style="margin-top: 10px">
                <img src="img/<?php echo $row['image_product'] ?>" alt="main_pic" width="80%" height="450px">
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h2 class="product-name"><?php echo $row['name_product'] ?></h2>
                <ul style="list-style:none;">
                    <li style="margin-bottom:10px;">
                        <span style="color:#FFBF1B;">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                        <a href="#">Xem 123 đánh giá</a>
                    </li>
                    <li style="margin-bottom:10px;"><i class="bi bi-archive"></i> Bộ sản phẩm bao gồm: Adapter sạc, Bàn
                        phím, Chuột, Dây nguồn, Sách hướng dẫn</li>
                    <li><i class="bi bi-shield-check"></i>Bảo hành chính hãng 1 năm tại các trung tâm bảo hành hãng</li>
                </ul>
                <div class="product-promote">Ưu đãi</div>
                <ul class="product-promote-list">
                    <li>Mã giảm <span style="font-weight:600;">100.000đ áp dụng đơn hàng từ 500.000đ</span></li>
                    <li><span style="font-weight:600;">FREEship</span> đơn hàng từ 300.000đ hoặc thành viên VÀNG</li>
                    <li>Giao nhanh trong 2 giờ</li>
                </ul>
                <p class="price"> GIÁ BÁN: <span style="color: rgb(17, 17, 136);"><?php echo $row['price_product'] ?>Đ</span></p>
                <div style="display:flex; justify-content:flex-start;">
                    <button type="button" class="btn buy-now">
                        MUA NGAY
                    </button>
                    <button type="button" class="btn add-cart"><a href="app/views/add_cart.php?id_product=<?php echo $row['id_product'] ?>">THÊM VÀO GIỎ HÀNG</a></p></button>
                </div>
            </div>
        </div>
        <div class="row mx-2 mt-4">
            <div class="col-md-8 PI1">
                <h4 class="py-3"> THÔNG TIN SẢN PHẨM</h4>
                <p><?php echo $row['description_product'] ?></p>
            </div>
            <div class="col-md-4">
                <h4 class="py-4">THÔNG SỐ KỸ THUẬT</h4>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>CPU:</td>
                            <td>i5, 1235U, 1.30 GHz</td>
                        </tr>
                        <tr>
                            <td>RAM:</td>
                            <td>8 GB, DDR4 2 khe (1 khe 8 GB + 1 khe trống), 3200 MHz, 2 khe</td>
                        </tr>
                        <tr>
                            <td>Ổ cứng:</td>
                            <td>512 GB SSD, Hỗ trợ khe cắm HDD SATA3 2.5 inch, Hỗ trợ khe M.2 connector for WLAN</td>
                        </tr>
                        <tr>
                            <td>Màn hình:</td>
                            <td>21.5 inch, Full HD</td>
                        </tr>
                        <tr>
                            <td>Card màn hình:</td>
                            <td>Intel UHD</td>
                        </tr>
                        <tr>
                            <td>Cổng kết nối:</td>
                            <td>LAN (RJ45), Jack 3.5 mm, 2 x USB 2.0, HDMI, 2 x USB 3.2</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành:</td>
                            <td>Windows 11</td>
                        </tr>
                        <tr>
                            <td>Kích thước:</td>
                            <td>Dài 490.3 mm - Rộng 380.7 mm - Dày 204.5 mm - Nặng 5.7 kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $phone = $_POST['phone'];
                $comment = $_POST['comment'];
                date_default_timezone_set('Asia/SaiGon');
                $time = date('Y-m-d H:i:s');
                $sql0 = "INSERT INTO comment_product (id_product,username,phone,comment,time) VALUES ($id_product,'$username','$phone','$comment','$time')";
                $query0 = mysqli_query($link, $sql0);
            }
        ?>
        <div class="d-flex justify-content-between mx-2 my-4 pb-3 border-bottom">
            <div class="col-md-8 border rounded mr-3">
                <h4 class="py-3">ĐÁNH GIÁ SẢN PHẨM</h4>
                <div class="row mb-3">
                    <div class="col-md-4 text-center border-right border-secondary">
                        <h5>5/5</h5>
                        <div style="color:#FFBF1B;">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#">Xem 123 đánh giá</a>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="evaluate">Chia sẻ đánh giá của bạn</label>
                        <textarea class="form-control" id="evaluate" rows="4"></textarea>
                    </div>
                </div>

                <div class="row mb-3 cmt">
                    <h4 class="py-3" style="padding-left: 15px;">BÌNH LUẬN SẢN PHẨM</h4>
                    <?php
                        $sql1 = "SELECT * FROM comment_product WHERE id_product = $id_product";
                        $query1 = mysqli_query($link, $sql1);
                        while($row1 = mysqli_fetch_assoc($query1)){
                    ?>
                    <ul>
                        <li class="com-title"><?php echo $row1['username'] ?><br />
                        <span>
                            <?php
                                $oriDate = $row1['time'];
                                $newDate = date('d-m-Y H:i:s',strtotime($oriDate));
                                echo $newDate;
                            ?>
                        </span></li>
                        <li class="com-details"><?php
                            echo $row1['comment'];
                        ?></li>
                    </ul>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4 border rounded com">
                <h4 class="py-3">BÌNH LUẬN CỦA BẠN</h4>
                <form method="post">
                    <ul>
                        <li class="required text-dark">Tên <br><input class="form-control" required type="text" name="username" /></li>
                        <li class="required text-dark">Số điện thoại <br><input class="form-control" required type="text" name="phone" /></li>
                        <li class="required text-dark">Nội dung <br><textarea class="form-control" required name="comment"></textarea></li>
                        <li><button class="btn btn-outline-secondary" type="submit" name="submit">Bình luận</button></li>
                    </ul>
                </form>
            </div>
        </div>
        <h4 class="pl-4">CÓ THỂ BẠN THÍCH</h4>
        <div class="d-flex">
            <?php
                $sql2 = "SELECT * FROM product ORDER BY id_product DESC LIMIT 6";
                $query2 = mysqli_query($link, $sql2);
                while($row2 = mysqli_fetch_assoc($query2)){ 
            ?>
            <div class="product col-md-2">
                <img src="img/<?php echo $row2['image_product'] ?>" alt="Product">
                <p><?php echo $row2['name_product'] ?></p>
                <p>Giá: <?php echo $row2['price_product'] ?>Đ</p>
                <a href="index.php?action=detail&id_product=<?php echo $row2['id_product']?>" class="btn btn-outline-primary">Đặt mua</a>
            </div>
            <?php
                } 
            ?>
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