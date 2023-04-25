<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanh toán</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/header.css">
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
        <?php
        require_once "header.php";
        ?>
        <nav class="text-center" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent border-bottom">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
            </ol>
        </nav>
        <div class="row justify-content-between mx-2 my-4 pb-3">
            <div class="col-md-4 col-12 mb-4">
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
            <div class="col-md-4 col-12 mb-4">
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
            <div class="col-md-4 col-12 mb-4">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        <h4 class="py-2">Chi tiết đơn hàng</h4>
                    </div>
                    <div class="card-body">
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