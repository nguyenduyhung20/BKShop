<?php
require_once '../config/config.php';
require_once '../models/UserManager.php';

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userManager = new UserManager($conn);
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Input validation and error handling
    if (empty($email)) {
        $errors[] = 'Email is required.';
    }
    if (empty($role)) {
        $errors[] = 'Role is required.';
    }

    if (empty($errors)) {
        $userManager->updateAdmin($id, $username, $first_name, $last_name, $email, $phone, $address, $role);
        $success = true;
    }
}

$user_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$user_id) {
    header('Location: admin_dashboard.php');
    exit();
}

$userManager = new UserManager($conn);
$user = $userManager->getUserById($user_id);

if (!$user) {
    header('Location: admin_dashboard.php');
    exit();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <?php if (!empty($errors)): ?>
        <div class="errors">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="success">
            <p>User updated successfully.</p>
        </div>
    <?php endif; ?>
    <form action="edit_user.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="USER" <?php echo $user['role'] === 'USER' ? 'selected' : ''; ?>>User</option>
            <option value="ADMIN" <?php echo $user['role'] === 'ADMIN' ? 'selected' : ''; ?>>Admin</option>
        </select>
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $user['first_name']; ?>">
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo $user['last_name']; ?>">
        <br>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="<?php echo $user['phone']; ?>">
        <br>
        <label for="address">Address:</label>
        <textarea name="address" id="address"><?php echo $user['address']; ?></textarea>
        <br>
        <input type="submit" value="Update User">
    </form>
</body>
</html>