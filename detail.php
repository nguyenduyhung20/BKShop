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
            <div class="col-md-2 Logo">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav">
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
                <a href="login.php" class="px-2">
                    <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                    BKShop
                </a>            
            </div>
            <div class="col-md-6 search">
                <form class="input-group">
                    <input type="text" class="form-control" placeholder="Bạn muốn tìm gì?">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 account">
                <div class="dropdown">
                    <i class="fa fa-user-circle-o account-icon"></i>
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
                        Tài khoản
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Đăng nhập</a>
                        <a class="dropdown-item" href="sigin.php">Đăng ký</a>
                    </div>
                </div>   
            </div>
            <div class="col-md-2 shopcart">
                <a href="#" id="shopcart_text">
                    <i class="fa fa-shopping-bag shop-cart"></i>
                    Giỏ hàng
                </a>           
            </div>
        </div>
        <div class="row cus_navbar">
            <div class="col-md-2 products">
                <div class="dropdown">
                    <div class="dropbtn"><i class="fa fa-bars"></i> Danh mục sản phẩm</div>
                    <div class="dropdown-content">
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
                </div>
            </div>
            <div class="col-md-2 intro ml-5">
                <a href="">
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
        <div class="row main-content">
            <nav class="col-md-12" style="margin-left: 30px;" aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent border-bottom">
                    <li class="breadcrumb-item"><a href="home.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#"></a>Danh mục sản phẩm</li>
                    <li class="breadcrumb-item active" aria-current="page">PC</li>
                </ol>
            </nav>
            <div class="col-md-1"></div>
            <div class="col-md-5" style="margin-top: 10px">
                <img src="img/hp1.jpg" alt="main_pic" width="80%" height="450px">
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h2 class="product-name">HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)</h2>
                <ul style="list-style:none;">
                    <li style="margin-bottom:10px;"><i class="bi bi-archive"></i> Bộ sản phẩm bao gồm: Adapter sạc, Bàn phím, Chuột, Dây nguồn, Sách hướng dẫn</li>
                    <li><i class="bi bi-shield-check"></i>Bảo hành chính hãng 1 năm tại các trung tâm bảo hành hãng</li>
                </ul>
                <div class="product-promote">Ưu đãi</div>
                <ul class="product-promote-list">
                    <li>Mã giảm <span style="font-weight:600;">100.000đ áp dụng đơn hàng từ 500.000đ</span></li>
                    <li><span style="font-weight:600;">FREEship</span> đơn hàng từ 300.000đ hoặc thành viên VÀNG</li>
                    <li>Giao nhanh trong 2 giờ</li>
                </ul>
                <p class="price"> GIÁ BÁN: 20.390.000Đ</p>
                <div class="buy-now">
                    MUA NGAY
                    <p>(Giao nhanh trong 2 giờ hoặc nhận tại cửa hàng)</p>
                </div>
                <div class="row">
                    <div class="installment1">
                        TRẢ GÓP 0%
                        <br>(Xét duyệt qua điện thoại)
                    </div>
                    <div class="installment2">
                        TRẢ GÓP QUA THẺ
                        <p>(Visa, Mastercard)</p>
                    </div>
                </div>    
            </div>
            <div class="row">
                <button class="btn" onclick="changeIntoProductInfo()" onclick ="toggleText('ProductInfo')">Thông tin sản phẩm</div>
                <div class="btn" onclick="changeIntoSpec()" onclick ="toggleText('Spec')">Thông số kỹ thuật</div>
                <div class="btn" onclick="changeIntoEva()">Đánh giá sản phẩm</div>
            </div>
            <!-- <div id="content"></div> -->
            <div id="ProductInfo" style="display:none;">
                <p>Nếu bạn đang cần một trợ thủ đắc lực sở hữu đầy đủ mọi ưu điểm từ cấu hình mạnh mẽ đến màn hình lớn,
            ngoại hình đẹp mắt, máy tính để bàn HP AIO 22 dd2002d i5 (6K7G1PA) \n sẽ là sản phẩm All-in-one mà bạn 
            không nên bỏ lỡ, cực kỳ phù hợp cho mọi đối tượng là sinh viên, dân văn phòng hay thậm chí là người 
            dùng sáng tạo.</p>
                <p>Mang trên mình bộ vi xử lý Intel Core i5 1235U mạnh mẽ kết hợp với card Intel UHD Graphics giúp 
            bạn vận hành tốt mọi tác vụ học tập - văn phòng từ cơ bản đến nâng cao hay chỉnh sửa hình ảnh, 
            giải trí với các tựa game nhẹ nhàng. Nếu muốn xử lý khối lượng công việc nhiều hơn, bạn hoàn toàn 
            có thể lắp thêm thanh RAM khác và kích hoạt Dual-Channel để nâng cấp lên card Iris Xe.</p>
                <p>Bộ nhớ RAM 8 GB cho phép người dùng xử lý công việc trên nhiều cửa sổ ứng dụng cùng lúc nhưng vẫn 
            đảm bảo trơn tru, hạn chế tình trạng giật lag. Ổ cứng 512 GB SSD mang đến không gian lưu trữ ổn 
            định khi tải các tệp tài liệu, học tập cần thiết đồng thời gia tăng tốc độ khởi động máy chỉ trong 
            vài giây.</p>
                <p>Làm việc tốt hơn trên kích thước màn hình 21.5 inch cho phép bạn quan sát bao quát nội dung 
            được hiển thị trên máy, độ sáng 250 nits cùng độ phân giải Full HD (1920 x 1080) cung cấp chất 
            lượng khung ảnh sắc nét ở nhiều điều kiện ánh sáng khác nhau với gam màu sắc chuẩn xác trên 
            từng chi tiết. Thời gian làm việc trên máy lâu dài nhưng vẫn bảo vệ tốt cho thị lực của người 
            dùng nhờ màn hình Anti Glare, giảm thiểu độ chói sáng ở những nơi ánh sáng cao.</p>
                <p>Công nghệ High Definition (HD) Audio cho chất âm to rõ, chân thực trên từng thước phim hay bản 
            nhạc.</p>
                <p>Máy tính để bàn học tập được bao bọc bởi chiếc áo màu trắng tinh khôi, toát lên vẻ đẹp tinh tế
             và sang trọng khi đặt ở mọi vị trí khác nhau, cân nặng 5.7 kg dễ dàng bưng bê và lắp đặt cố định 
             ở không gian văn phòng, bàn lễ tân nhà hàng, khách sạn,...</p>
                <p>Tính năng mở khóa bằng khuôn mặt tích hợp với Camera IR hồng ngoại hiện đại được trang bị 
            trên chiếc máy tính để bàn này giúp bạn mở khóa nhanh chóng và an toàn hơn rất nhiều so với các 
            kiểu bảo mật truyền thống dù ở những nơi có điều kiện ánh sáng thấp.</p>
                <p>Mặt sau máy tính để bàn HP được trang bị đa dạng các cổng kết nối như USB 2.0, Jack 3.5 mm, 
            LAN (RJ45), HDMI và USB 3.2 cho khả năng kết xuất và truyền tải dữ liệu đến các thiết bị ngoại vi 
            nhanh chóng, dễ dàng hơn.
            </div>
            <div id="Spec" style="display:none;">nội dung được thay đổi</div>
            <!-- <div id="display-content"></div> -->
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
