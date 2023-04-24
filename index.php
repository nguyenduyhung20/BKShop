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
} elseif (isset($_GET['action']) && $_GET['action'] == 'login') {
    $userController->login();
} elseif (isset($_GET['action']) && $_GET['action'] == 'dashboard') {
    require_once 'app/views/dashboard.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'view_user') {
    $adminController->index();
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'edit_user' && isset($_GET['id'])) {
    $adminController->editUser($_GET['id']);
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'update_user' && isset($_GET['id']) && !empty($_POST)) {
    $adminController->updateUser($_GET['id'], $_POST);
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete_user' && isset($_GET['id'])) {
    $adminController->deleteUser($_GET['id']);
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'introduction') {
    require_once 'app/views/introduction.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'news') {
    require_once 'app/views/news.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'payment') {
    require_once 'app/views/payment.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'contact') {
    require_once 'app/views/contact.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'list') {
    require_once 'app/views/list.php';
    exit;
} elseif (isset($_GET['action']) && $_GET['action'] == 'cart') {
    require_once 'app/views/cart.php';
    exit;
} else {
    // Redirect to the homepage
    require_once 'app/views/home.php';
    exit;
}