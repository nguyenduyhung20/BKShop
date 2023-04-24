<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';

class UserController
{
    private $authService;
    private $userRepository;
    private $sessionManager;

    public function __construct(AuthenticateService $authService, UserRepository $userRepository, SessionManager $sessionManager)
    {
        $this->authService = $authService;
        $this->userRepository = $userRepository;
        $this->sessionManager = $sessionManager;
    }

    public function login()
    {
        if ($this->authService->isLoggedIn()) {
            header("Location: /");
            exit;
        }

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->authService->login($username, $password)) {
                header("Location: /");
                exit;
            } else {
                $errorMessage = 'Incorrect username or password';
            }
        }
        require_once 'app/views/login.php';
    }

    public function logout()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            $this->authService->logout();
            header("Location: /");
            exit;
        }
    }

    public function register()
    {
        if ($this->authService->isLoggedIn()) {
            header("Location: /");
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
                header("Location: /");
                exit;
            } else {
                $errorMessage = $registerResult['message'];
            }
        }

        require_once 'app/views/register.php';
    }

    public function profile()
    {
        $loggedInUser = $this->authService->getLoggedInUser();
        if (!$loggedInUser) {
            header('Location: /');
            exit;
        }
        $user = $loggedInUser;
        require_once 'app/views/profile.php';
    }

    public function updateProfile($data)
    {
        $loggedInUser = $this->authService->getLoggedInUser();
        if (!$loggedInUser) {
            header('Location: index.php?action=login');
            exit;
        }

        $loggedInUser->setFirstName($data['first_name']);
        $loggedInUser->setLastName($data['last_name']);
        $loggedInUser->setEmail($data['email']);
        $loggedInUser->setPhone($data['phone']);
        $loggedInUser->setAddress($data['address']);

        $this->userRepository->updateUser($loggedInUser);
        header('Location: /profile');
    }
    public function change_password_handler()
    {
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;

        // Check if user is logged in
        if (!$authService->isLoggedIn()) {
            $sessionManager->set('login_error', 'Please log in to change your password.');
            header('Location: /login');
            exit;
        }

        // Get current user's ID
        $userId = $authService->getLoggedInUser()->getId();

        // Get form data
        $currentPassword = $_POST['current_password'] ?? '';
        $newPassword = $_POST['new_password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        // Validate form data
        if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
            $sessionManager->set('change_password_error', 'Please fill in all required fields.');
            header('Location: /profile/change_password');
            exit;
        }

        if ($newPassword !== $confirmPassword) {
            $sessionManager->set('change_password_error', 'The new password and confirmation password do not match.');
            header('Location: /profile/change_password');
            exit;
        }

        // Get current user's password hash
        $user = $userRepository->findById($userId);
        $currentPasswordHash = $user->getPassword();

        // Verify current password
        if (!password_verify($currentPassword, $currentPasswordHash)) {
            $sessionManager->set('change_password_error', 'The current password ' . $currentPassword . ' is incorrect.');
            header('Location: /profile/change_password');
            exit;
        }

        // Update user's password
        $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $user->setPassword($newPasswordHash);
        $userRepository->updateUser($user);

        // Redirect to dashboard with success message
        $sessionManager->set('change_password_success', 'Your password has been changed successfully.');
        header('Location: /profile/change_password');
        exit;
    }
}
?>