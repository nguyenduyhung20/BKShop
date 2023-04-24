<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/login.css">
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
        <a class="navbar-brand" href="/">
            <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
            BKShop
        </a>
    </nav>
    <div class="container-fluid content">
        <div class="col-md-3"></div>
        <div class="login col-md-6 p-3 my-4 col-12">
            <h2 class="text-center pt-3">Login</h2>
            <?php if (!empty($errorMessage)): ?>
                <p>
                    <?php echo $errorMessage; ?>
                </p>
            <?php endif; ?>
            <form class="p-2" method="post">
                <div class="input-field">
                    <img src="img/user.png" alt="">
                    <input type="text" name="username" id="username" placeholder="Enter username" required />
                </div>
                <div class="input-field">
                    <img src="img/pass.png" alt="">
                    <input type="password" name="password" id="password" placeholder="Enter password" required />
                </div>
                <div class="input-field button">
                    <button type="submit" name="login" value="Login">Login</button>
                </div>
            </form>
            <h3> <a href="/register">Don't have an account? Register now</a></h3>
            <h3> <a href="/forgot-password">Forgot password? </a></h3>
        </div>
    </div>
    <?php require_once "footer.php" ?>
</body>

</html>