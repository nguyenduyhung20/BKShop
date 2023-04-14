<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';

class UserController {
    private $authService;
    private $userRepository;
    private $sessionManager;

    public function __construct(AuthenticateService $authService, UserRepository $userRepository, SessionManager $sessionManager) {
        $this->authService = $authService;
        $this->userRepository = $userRepository;
        $this->sessionManager = $sessionManager;
    }

    public function login() {
        if ($this->authService->isLoggedIn()) {
            header("Location: app/views/dashboard.php");
            exit;
        }

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->authService->login($username, $password)) {
                header("Location: app/views/dashboard.php");
                exit;
            } else {
                $errorMessage = 'Incorrect username or password';
            }
        }
        require_once 'app/views/login.php';
    }

    public function logout() {
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            $this->authService->logout();
            header("Location: index.php");
            exit;
        }
    }

    public function register() {
        if ($this->authService->isLoggedIn()) {
            header("Location: app/views/dashboard.php");
            exit;
        }

        $errorMessage = '';

        if (isset($_POST['register'])) {
            $username = $_POST['username'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $role = Role::USER;

            $registerResult = $this->authService->register($username, $firstName, $lastName, $email, $password, $phone, $address, $role);

            if ($registerResult['success']) {
                header("Location: index.php?register=success");
                exit;
            } else {
                $errorMessage = $registerResult['message'];
            }
        }

        require_once 'app/views/register.php';
    }

}
?>