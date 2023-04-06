<?php
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
$email = filter_var(validate_input($_POST['email']), FILTER_VALIDATE_EMAIL);
$password = validate_input($_POST['password']);

if ($username && $email && $password) {
    $userRegistration = new UserManager($conn);
    $result = $userRegistration->register($username, $email, $password);
    if ($result) {
        echo $result;
    }
}

$conn = null;
?>
