<?php
require_once '../config/config.php';
require_once '../models/SessionManager.php';
require_once '../models/User.php';
require_once '../models/RBAC.php';
require_once '../services/AuthenticationService.php';
require_once '../models/UserRepository.php';

class AdmninController {
    private $userRepository;
    private $authService;
    private $sessionManager;

    public function __construct(UserRepository $userRepository, AuthenticateService $authService, SessionManager $sessionManager) {
        $this->userRepository = $userRepository;
        $this->authService = $authService;
        $this->sessionManager = $sessionManager;
    }

    public function redirectNotLoggedInUser() {
        if (!$this->authService->isLoggedIn()) {
            header("Location: ../../../index.php");
            exit;
        }
    }
    public function index() {
        $this->redirectNotLoggedInUser();

        $loggedInUser = $this->authService->getLoggedInUser();

        if (AccessControl::hasAccess($loggedInUser, 'view_users')) {
            $this->viewUsers();
        } else {
            echo "Access denied. You don't have permission to view users.";
            exit;
        }
    }

    public function viewUsers() {
        $users = $this->userRepository->findAll();
        if ($users){
            require_once '../views/admin/view_users.php';
            exit;
        } else {
            echo "User not found.";
            exit;
        } 
    }

    public function editUser($id) {
        $loggedInUser = $this->authService->getLoggedInUser();

        if (AccessControl::hasAccess($loggedInUser, 'edit_users')) {
            $user = $this->userRepository->findById($id);
            require_once '../views/admin/edit_users.php';
        } else {
            header("Location: ../../../index.php");
            exit;
        }
    }

    
    public function updateUser($id, $data) {
        $loggedInUser = $this->authService->getLoggedInUser();

        if (AccessControl::hasAccess($loggedInUser, 'edit_users')) {
            $user = $this->userRepository->findById($id);
            // Update the user object with the new data
            $user->setUsername($data['username']);
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setEmail($data['email']);
            $user->setPhone($data['phone']);
            $user->setAddress($data['address']);
            $user->setRole($data['role']);

            $this->userRepository->updateUser($user);
            header("Location: ../views/admin/view_users.php");
            exit;
        } else {
            header("Location: ../../../index.php");
            exit;
        }
    }

    public function deleteUser($id) {
        $loggedInUser = $this->authService->getLoggedInUser();

        if (AccessControl::hasAccess($loggedInUser, 'edit_users')) {
            $user = $this->userRepository->findById($id);
            $this->userRepository->deleteUser($user);
            header("Location: ../views/admin/view_users.php");
            exit;
        } else {
            header("Location: ../../../index.php");
            exit;
        }
    }

}


?>