<!DOCTYPE html>
<html lang="en">
<head>
  <title>HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/detail.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <a href="home.php" class="px-2">
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
                <a href="introduction.php">
                    Giới thiệu
                </a>
            </div>
            <div class="col-md-2 news">
                <a href="new.php">
                    Tin tức
                </a>
            </div>
            <div class="col-md-2 payment">
                <a href="payment.php">
                    Thanh toán
                </a>           
            </div>
            <div class="col-md-2 contact">
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
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" style="margin-top: 10px">
                <img src="img/hp1.jpg" alt="main_pic" width="80%" height="450px">
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h2 class="product-name">HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</h2>
                <ul style="list-style:none;">
                    <li style="margin-bottom:10px;">
                        <span style="color:#FFBF1B;">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                        <a href="#">Xem 123 đánh giá</a></li>
                    <li style="margin-bottom:10px;"><i class="bi bi-archive"></i> Bộ sản phẩm bao gồm: Adapter sạc, Bàn phím, Chuột, Dây nguồn, Sách hướng dẫn</li>
                    <li><i class="bi bi-shield-check"></i>Bảo hành chính hãng 1 năm tại các trung tâm bảo hành hãng</li>
                </ul>
                <div class="product-promote">Ưu đãi</div>
                <ul class="product-promote-list">
                    <li>Mã giảm <span style="font-weight:600;">100.000đ áp dụng đơn hàng từ 500.000đ</span></li>
                    <li><span style="font-weight:600;">FREEship</span> đơn hàng từ 300.000đ hoặc thành viên VÀNG</li>
                    <li>Giao nhanh trong 2 giờ</li>
                </ul>
                <p class="price"> GIÁ BÁN: <span style="color: rgb(17, 17, 136);">20.390.000Đ</span></p>
                <div style="display:flex; justify-content:flex-start;">
                    <button type="button" class="btn buy-now">
                        MUA NGAY
                    </button>
                    <button type="button" class="btn add-cart">THÊM VÀO GIỎ HÀNG</button>
                </div>
            </div>
        </div>
        <div class="row mx-2 mt-4">
            <div class="col-md-8 PI1">
                <h4 class="py-3"> THÔNG TIN SẢN PHẨM</h4>
                <p>Nếu bạn đang cần một trợ thủ đắc lực sở hữu đầy đủ mọi ưu điểm từ cấu hình mạnh mẽ đến 
                màn hình lớn, ngoại hình đẹp mắt, máy tính để bàn HP AIO 22 dd2002d i5 (6K7G1PA) sẽ là sản phẩm All-in-one 
                mà bạn không nên bỏ lỡ, cực kỳ phù hợp cho mọi đối tượng là sinh viên, dân văn phòng hay 
                thậm chí là người dùng sáng tạo.</p>
                <p>Mang trên mình bộ vi xử lý Intel Core i5 1235U mạnh mẽ kết hợp với card Intel UHD 
                Graphics giúp bạn vận hành tốt mọi tác vụ học tập - văn phòng từ cơ bản đến nâng cao hay 
                chỉnh sửa hình ảnh, giải trí với các tựa game nhẹ nhàng. Nếu muốn xử lý khối lượng công 
                việc nhiều hơn, bạn hoàn toàn có thể lắp thêm thanh RAM khác và kích hoạt Dual-Channel để 
                nâng cấp lên card Iris Xe.</p>
                <p>Bộ nhớ RAM 8 GB cho phép người dùng xử lý công việc trên nhiều cửa sổ ứng dụng cùng lúc 
                nhưng vẫn đảm bảo trơn tru, hạn chế tình trạng giật lag. Ổ cứng 512 GB SSD mang đến không 
                gian lưu trữ ổn định khi tải các tệp tài liệu, học tập cần thiết đồng thời gia tăng tốc độ 
                khởi động máy chỉ trong vài giây.</p>
                <p>Làm việc tốt hơn trên kích thước màn hình 21.5 inch cho phép bạn quan sát bao quát nội 
                dung được hiển thị trên máy, độ sáng 250 nits cùng độ phân giải Full HD (1920 x 1080) cung 
                cấp chất lượng khung ảnh sắc nét ở nhiều điều kiện ánh sáng khác nhau với gam màu sắc chuẩn 
                xác trên từng chi tiết. Thời gian làm việc trên máy lâu dài nhưng vẫn bảo vệ tốt cho thị lực 
                của người dùng nhờ màn hình Anti Glare, giảm thiểu độ chói sáng ở những nơi ánh sáng cao.</p>
                <p>Công nghệ High Definition (HD) Audio cho chất âm to rõ, chân thực trên từng thước phim hay bản nhạc.</p>
                <p>Máy tính để bàn học tập được bao bọc bởi chiếc áo màu trắng tinh khôi, toát lên vẻ đẹp 
                tinh tế và sang trọng khi đặt ở mọi vị trí khác nhau, cân nặng 5.7 kg dễ dàng bưng bê và lắp 
                đặt cố định ở không gian văn phòng, bàn lễ tân nhà hàng, khách sạn,...</p>
                <p>Tính năng mở khóa bằng khuôn mặt tích hợp với Camera IR hồng ngoại hiện đại được trang bị 
                trên chiếc máy tính để bàn này giúp bạn mở khóa nhanh chóng và an toàn hơn rất nhiều so với
                các kiểu bảo mật truyền thống dù ở những nơi có điều kiện ánh sáng thấp.</p>
                <p>Mặt sau máy tính để bàn HP được trang bị đa dạng các cổng kết nối như USB 2.0, Jack 3.5 mm, 
                LAN (RJ45), HDMI và USB 3.2 cho khả năng kết xuất và truyền tải dữ liệu đến các thiết bị ngoại
                vi nhanh chóng, dễ dàng hơn.    
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
            </div>
            <div class="col-md-4 border rounded">
                <h4 class="py-3">BÌNH LUẬN CỦA BẠN</h4>
                <div class="form-group">
                    <textarea class="form-control" id="evaluate" rows="6"></textarea>
                </div>
            </div>
        </div>
        <h4 class="pl-4">CÓ THỂ BẠN THÍCH</h4>
        <div class="d-flex">
            <div class="product col-md-2">
                <img src="img/imac1.jpg" alt="Product">
                <p>iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A) </p>
                <p>Giá: 27.990.000Đ</p>
                <a href="" class="btn btn-outline-primary">Đặt mua</a>
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
