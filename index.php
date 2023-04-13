<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';


$sessionManager = new SessionManager();


// if (isset($_SESSION['user_id'])) {
//     header("Location: app/views/dashboard.php");
// } else {
//     header("Location: app/views/login.php");
// }
$userRepository = new UserRepository($conn);
$authService = new AuthenticateService($userRepository, $sessionManager);

//Redirect user if already loggedin
if ($authService->isLoggedIn()) {
    header("Location: app/views/dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($authService->login($username, $password)) {
        header("Location: app/views/dashboard.php");
        exit;
    } else {
        echo 'Incorrect username or password';
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $authService->logout();
    echo 'Logged out successfully';
}

// Check register before log in ?
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = Role::USER;

    $registerResult = $authService->register($username, $firstName, $lastName, $email, $password, $phone, $address, $role);
    echo $registerResult['message'];
    
} elseif (isset($_GET['action']) && $_GET['action'] == 'register') {
    echo 'Button sign up pressed';
    require_once 'app/views/register.php';
    exit;
}

// If not logged in
if (!$authService->isLoggedIn()) {
    require_once 'app/views/login.php';
    exit;
}





