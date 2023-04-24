<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/register.css">
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
        <a class="navbar-brand" href="/login">
            <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
            BKShop
        </a>
    </nav>
    <div class="container-fluid content">
        <div class="col-md-3"></div>
        <div class="login col-md-6 p-3 my-2 col-12">
            <h2 class="text-center pt-3">Sign in</h2>
            <?php if (!empty($errorMessage)): ?>
                <p>
                    <?php echo $errorMessage; ?>
                </p>
            <?php endif; ?>
            <form method="post">
                <div class="input-field">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-field">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" id="first_name" required>
                </div>
                <div class="input-field">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" required>
                </div>
                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="input-field">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div class="input-field">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="input-field button">
                    <input type="submit" name="register" value="Register">
                </div>
            </form>
            <div class="text-center">
                <h3>Already have an account? <a href="/login">Login</a></h3>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php require_once "footer.php" ?>
</body>

</html>