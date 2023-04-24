<!DOCTYPE html>
<html lang="en">

<head>
    <title>Si</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/signin.css">
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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="login.php">
            <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
            BKShop
        </a>
    </nav>
    <div class="container-fluid">
        <div class="col-md-3"></div>
        <div class="login col-md-6 p-2 my-2 col-12">
            <h2 class="text-center pt-3">Đăng ký </h2>
            <form action="" method="post">
                <div class="input-field">
                    <img src="img/user.png" alt="">
                    <input type="text" name="username" placeholder="Nhập tên đăng nhập" required />
                </div>
                <div class="input-field">
                    <img src="img/mail.png" alt="">
                    <input type="text" name="email" placeholder="Nhập email" required />
                </div>
                <div class="input-field">
                    <img src="img/pass.png" alt="">
                    <input type="password" name="password" placeholder="Nhập mật khẩu" required />
                </div>
                <div class="input-field">
                    <img src="img/pass.png" alt="">
                    <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required />
                </div>
                <div class="input-field button">
                    <button type="submit" name="submit">Tạo tài khoản</button>
                </div>
            </form>
            <h3> Bạn đã có tài khoản? <a href="login.php"> Đăng nhập </a></h3>
        </div>
        <div class="col-md-3"></div>
    </div>

</body>

</html>