<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giới thiệu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/intro.css">
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
            <div class="col-md-2 text-md-left text-center text">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav pt-5">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/login">Đăng nhập</a>
                            <a class="dropdown-item" href="/register">Đăng ký</a>
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
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text" aria-expanded="false">
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
        <!-- Task bar -->
        <div class="row cus_navbar">
            <div class="col-md-2 products dropdown">
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
            <div class="col-md-2 col-sm-2 d-none d-sm-block intro">
                <a href="">
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
        <nav style="margin-left: 30px;" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent border-bottom">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
            </ol>
        </nav>
        <div class="abs1 col-md-12">
            VỀ CHÚNG TÔI
        </div>
        <h3>BKShop - Online Computer Gear Store</h3>
        <div class="row">
            <img src="img/founder.png" class="col-md-4 ml-3" alt="founder" width="90%" height="250px">
            <div class="col-md-7" style="line-height:28px;">
                &emsp;Chào mừng đến với BKShop - nơi mà bạn có thể tìm thấy những sản phẩm máy tính chất lượng và 
                dịch vụ tốt nhất. Tại bkshop, chúng tôi cam kết cung cấp cho khách hàng những sản phẩm chọn lọc,
                chất lượng và có giá cả cạnh tranh nhất. Với các sản phẩm từ các thương hiệu nổi tiếng trong 
                ngành công nghệ, khách hàng có thể hoàn toàn yên tâm về chất lượng sản phẩm.<br>
                &emsp;Ngoài sản phẩm chất lượng, chúng tôi cũng cam kết mang đến dịch vụ chăm sóc khách hàng tốt nhất.
                Chúng tôi luôn luôn lắng nghe ý kiến của khách hàng và đáp ứng mọi nhu cầu của khách hàng. Với 
                một đội ngũ nhân viên tận tâm và giàu kinh nghiệm, chúng tôi cam kết đưa ra giải pháp tốt nhất 
                cho từng khách hàng, giúp khách hàng có những trải nghiệm mua hàng thật sự tuyệt vời.<br>
                &emsp;Nếu bạn đang tìm kiếm một địa chỉ mua sắm máy tính đáng tin cậy, hãy đến với bkshop. Chúng tôi 
                hy vọng sẽ trở thành đối tác đáng tin cậy và đồng hành cùng bạn trong hành trình sử dụng máy 
                tính.
            </div>
        </div>
        <div class="abs2 mx-2 mt-4">
            <h3 class="py-4">VÌ SAO BẠN NÊN CHỌN CHÚNG TÔI</h3>
            <div class="row pb-3">
                <div class="col-md-4 px-5 border-right border-primary">
                    &emsp;Chúng tôi tự hào là một trong những đơn vị hàng đầu trong lĩnh vực bán máy tính. Chúng tôi cam kết mang lại
                    cho khách hàng những sản phẩm và dịch vụ chất lượng nhất, đồng thời luôn lắng nghe và đáp ứng mọi nhu cầu 
                    của khách hàng. Với đội ngũ nhân viên nhiệt tình, giàu kinh nghiệm và chuyên môn cao, chúng tôi đảm bảo 
                    sẽ mang đến cho quý khách một trải nghiệm mua hàng tốt nhất.
                </div>
                <div class="col-md-4 px-5 border-right border-primary">
                    &emsp;Đại diện cho các thương hiệu lớn nhất trong ngành công nghiệp máy tính, chúng tôi cam kết cung cấp những 
                    sản phẩm chất lượng, hiệu quả và đa dạng nhất cho khách hàng. Chúng tôi cũng cung cấp dịch vụ hậu mãi tốt 
                    nhất để đảm bảo rằng khách hàng của chúng tôi sẽ luôn hài lòng với sản phẩm mà mình đang sử dụng.
                </div>
                <div class="col-md-4 pr-5">
                    &emsp;Chúng tôi hiểu rằng khách hàng là yếu tố quan trọng nhất trong sự phát triển của chúng tôi. Vì vậy, chúng 
                    tôi cam kết sẽ luôn đáp ứng những nhu cầu của khách hàng bằng cách cung cấp những sản phẩm chất lượng nhất,
                    dịch vụ tốt nhất và giá cả cạnh tranh nhất. Chúng tôi hy vọng sẽ có thể trở thành đối tác đáng tin cậy 
                    nhất của quý khách trong thời gian tới.
                </div>
            </div>
        </div>
        <div class="row mx-auto my-5 text-justify abs3">
            <div class="col-md-3 px-3 py-2 mx-5 border border-secondary">
                <h3>TẦM NHÌN</h3>
                &emsp;Tầm nhìn của chúng tôi là trở thành đơn vị hàng đầu trong lĩnh vực bán máy tính, mang đến cho khách 
                hàng những sản phẩm và dịch vụ chất lượng nhất. Chúng tôi cam kết cải thiện liên tục để đáp ứng nhu 
                cầu ngày càng đa dạng của khách hàng, từ các sản phẩm tiên tiến nhất đến dịch vụ hậu mãi tốt nhất. 
                Chúng tôi tin rằng sự phát triển bền vững đến từ sự tôn trọng và đáp ứng mọi nhu cầu của khách hàng 
                của chúng tôi và luôn lắng nghe ý kiến của khách hàng để cải thiện chất lượng dịch vụ của chúng tôi.
            </div>
            <div class="col-md-3 px-3 py-2 mx-5 border border-secondary">
                <h3>SỨ MỆNH</h3>
                &emsp;Sứ mệnh của chúng tôi là giúp khách hàng tận hưởng những trải nghiệm tốt nhất khi mua sắm và sử dụng 
                sản phẩm máy tính. Chúng tôi cam kết cung cấp những sản phẩm chất lượng, giá cả cạnh tranh và dịch vụ 
                chăm sóc khách hàng tốt nhất để giúp khách hàng luôn cảm thấy hài lòng và tin tưởng khi đến với chúng 
                tôi. Chúng tôi hy vọng đồng hành với khách hàng trong hành trình sử dụng máy tính và đóng góp cho sự 
                phát triển của công nghệ thông tin trong xã hội.
            </div>
            <div class="col-md-3 px-3 py-2 mx-5 border border-secondary">
                <h3>GIÁ TRỊ CỐT LÕI</h3>
                &emsp;Giá trị cốt lõi của chúng tôi là sự tận tâm và trung thực trong kinh doanh. Chúng tôi cam kết luôn đặt 
                lợi ích của khách hàng lên hàng đầu, tôn trọng và đáp ứng mọi nhu cầu của khách hàng. Chúng tôi cũng 
                luôn nỗ lực cải tiến để mang đến cho khách hàng những sản phẩm và dịch vụ tốt nhất, đồng thời duy trì 
                mối quan hệ lâu dài và đáng tin cậy với khách hàng. Chúng tôi tin rằng sự thành công của chúng tôi phụ 
                thuộc vào sự hài lòng của khách hàng và chúng tôi sẽ không ngừng nỗ lực để đạt được mục tiêu đó.
            </div>
        </div>
        <h3 class="archieve">
            THÀNH TỰU
        </h3>
        <div class="row mx-2 my-3 abs4 text-justify">
            <h3 class="col-md-12 mb-2">ĐỘI NGŨ</h3>
            <div class="col-md-3 abs4-img">
                <img src="img/member1.jpg" alt="member1">
                <h5>NGUYỄN DUY HƯNG</h5>
                <p class="abs4-role">LEADER</p>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-envelope"></i></a>
                <p class="text-justify">Với sự lãnh đạo của tôi, BKShop đã trở thành một trong những địa chỉ mua sắm máy 
                    tính hàng đầu, luôn cam kết đưa đến cho khách hàng những sản phẩm chất lượng và dịch vụ 
                    tốt nhất.</p>
            </div>
            <div class="col-md-3 abs4-img">
                <img src="img/member2.jpg" alt="member2">
                <h5>NGUYỄN KHÔI NGUYÊN</h5>
                <p class="abs4-role">FRONT-END DEVELOPER</p>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-envelope"></i></a>
                <p class="text-justify">Với kinh nghiệm phát triển Front-end, tôi đã giúp nhà phát triển Back-end của chúng tôi tạo ra các trang
                    web hoàn chỉnh và hiệu quả.</p>
            </div>
            <div class="col-md-3 abs4-img">
                <img src="img/member3.png" alt="member3">
                <h5>PHẠM ĐỨC THẮNG</h5>
                <p class="abs4-role">BACK-END DEVELOPER</p>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-envelope"></i></a>
                <p class="text-justify"> Với những kiến thức chuyên sâu và chuyên môn về các ngôn ngữ lập trình như Java, Python, 
                    NodeJS, ... tôi luôn đảm bảo rằng các chức năng Back-end hỗ trợ trang web của chúng tôi 
                    luôn hoạt động tốt.</p>
            </div>
            <div class="col-md-3 abs4-img">
                <img src="img/member4.jpg" alt="member4">
                <h5>NGUYỄN VĂN ĐẠT</h5>
                <p class="abs4-role">TESTER</p>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-envelope"></i></a>
                <p class="text-justify">Với khả năng phân tích và truyền đạt các lỗi và điều chỉnh cần thiết cho đội ngũ phát triển,
                    tôi là người đảm bảo rằng sản phẩm của chúng tôi được kiểm tra kỹ lưỡng và đầy đủ trước khi 
                    đưa ra demo.</p>
            </div>
        </div>
        <h3>KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</h3>
        <p class="abs6"> Chúng tôi đã làm việc với nhiều khách hàng và chúng tôi luôn muốn nghe rằng họ vui vẻ và hài lòng sau 
            khi hợp tác. Hãy xem khách hàng nói gì về chúng tôi.</p>
        <div class="row mx-2 my-3 text-justify">
            <div class="col-md-3 abs5-img">
                <p>"Tôi rất hài lòng với sự phục vụ tận tình và chuyên nghiệp của nhân viên tại BKShop. Họ đã 
                    giải đáp tất cả các thắc mắc của tôi và đưa ra sự lựa chọn tốt nhất cho nhu cầu của tôi."</p>
                <div class="text-right">
                    <i class="bi bi-quote"></i>
                    <span>KHÁCH HÀNG 1</span>
                    <img src="img/client1.jpg" alt="member1">
                </div>  
            </div>
            <div class="col-md-3 abs5-img">
                <p>"Sản phẩm mà tôi mua tại BKShop rất chất lượng và giá cả cũng rất cạnh tranh so với các cửa 
                    hàng khác. Tôi sẽ quay lại mua sắm tại đây cho những nhu cầu tiếp theo."</p>
                <div class="text-right">
                    <i class="bi bi-quote"></i>
                    <span>KHÁCH HÀNG 2</span>
                    <img src="img/client2.jpg" alt="member1">
                </div>
            </div>
            <div class="col-md-3 abs5-img">
                <p>"Tôi rất thích trang web của bkshop vì nó rất dễ sử dụng và thông tin sản phẩm được cập nhật 
                    rất đầy đủ và chính xác. Hơn nữa, quá trình thanh toán và vận chuyển cũng được thực hiện 
                    rất nhanh chóng."</p>
                <div class="text-right">
                    <i class="bi bi-quote"></i>
                    <span>KHÁCH HÀNG 3</span>
                    <img src="img/client3.jpg" alt="member1">
                </div>
            </div>
            <div class="col-md-3 abs5-img">
                <p>"BKShop là địa chỉ mua sắm máy tính đáng tin cậy của tôi. Tôi đã sử dụng các sản phẩm từ 
                    BKShop suốt một thời gian và chúng luôn hoạt động tốt và ổn định. Tôi sẽ giới thiệu địa 
                    chỉ này cho bạn bè và người thân của mình."</p>
                <div class="text-right">
                    <i class="bi bi-quote"></i>
                    <span>KHÁCH HÀNG 4</span>
                    <img src="img/client4.jpg" alt="member1">
                </div>
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
