<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';
require_once 'app/controllers/UserController.php';
require_once 'app/middlewares/AuthMiddleware.php';
require_once 'app/controllers/AdminController.php';


$sessionManager = new SessionManager();
$userRepository = new UserRepository($conn);
$authMiddleware = new AuthMiddleware($sessionManager);
$authService = new AuthenticateService($userRepository, $sessionManager);
$userController = new UserController($authService, $userRepository, $sessionManager);
$adminController = new AdminController($userRepository, $authService, $sessionManager, $authMiddleware);


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $userController->logout();
} elseif (isset($_GET['action']) && $_GET['action'] == 'register') {
    $userController->register();
} elseif (isset($_GET['action']) && $_GET['action'] == 'login'){
    $userController->login();
} elseif (isset($_GET['action']) && $_GET['action'] == 'dashboard'){
    require_once 'app/views/dashboard.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'view_user'){
    $adminController->index();
    exit;
}else {
    // Redirect to the homepage
    require_once 'app/views/homepage.php';
    exit;
}





