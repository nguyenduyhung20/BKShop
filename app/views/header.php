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
                    <a class="dropdown-item" href="/sigin">Đăng ký</a>
                </div>
            </div>
            <a href="/cart">Giỏ hàng</a>
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
        <a href="" class="px-2">
            <img src="/img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
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
    <div class="col-md-2 col-sm-3 d-none d-sm-block products">
        <a href="">
            <i class="fa fa-bars"></i>
            Danh mục sản phẩm
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