<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';
require_once 'app/controllers/UserController.php';


$sessionManager = new SessionManager();
$userRepository = new UserRepository($conn);
$authService = new AuthenticateService($userRepository, $sessionManager);
$userController = new UserController($authService, $userRepository, $sessionManager);

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $userController->logout();
} elseif (isset($_GET['action']) && $_GET['action'] == 'register') {
    $userController->register();
} else {
    $userController->login();
}




