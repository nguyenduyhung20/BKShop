<?php
require_once 'app/config/config.php';
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';
require_once 'app/services/AuthenticationService.php';
require_once 'app/models/UserRepository.php';
require_once 'app/middlewares/AuthMiddleware.php';

class AdminController {
    private $userRepository;
    private $authService;
    private $sessionManager;
    private $authMiddleware;

    public function __construct(UserRepository $userRepository, AuthenticateService $authService, SessionManager $sessionManager, AuthMiddleware $authMiddleware) {
        $this->userRepository = $userRepository;
        $this->authService = $authService;
        $this->sessionManager = $sessionManager;
        $this->authMiddleware = $authMiddleware;
    }


    public function index() {
        $this->authMiddleware->checkAdmin();

        $users = $this->userRepository->findAll();
        require_once 'app/views/admin/view_user.php';
    }

    public function editUser($id) {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        require_once "app/views/admin/edit_user.php";
    }

    
    public function updateUser($id, $data) {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        // Update the user object with the new data
        $user->setUsername($data['username']);
        $user->setFirstName($data['first_name']);
        $user->setLastName($data['last_name']);
        $user->setEmail($data['email']);
        $user->setPhone($data['phone']);
        $user->setAddress($data['address']);
        $user->setRole($data['role']);

        $this->userRepository->updateAdmin($user);
        header("Location: /admin");
        exit;
    }

    public function deleteUser($id) {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        $this->userRepository->deleteUser($user);
        header("Location: /admin");
        exit;
    }

}


?>