<?php 
session_start();
require_once '../config/config.php';
require_once 'UserManager.php';

/**
 * Sanitize input data
 * 
 * @param string $data
 * @return string
 */
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// XSS (Cross-site Scripting) attacks
$username = validate_input($_POST['username']);
$password = validate_input($_POST['password']);

if ($username && $password) {
    $userAuth = new UserManager($conn);
    $user = $userAuth->authenticate($username, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_role'] = $user['role'];

        header('Location: ../views/dashboard.php');
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }

}
$conn = null;
?>
