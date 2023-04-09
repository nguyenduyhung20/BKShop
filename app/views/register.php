<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1></h1>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
        <br>
        <input type="submit" name="register" value="Register">

    </form>
    <a href="index.php">Login</a>
</body>

</html>