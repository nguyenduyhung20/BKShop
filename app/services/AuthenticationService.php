<?php 
require_once '../models/UserRepository.php';
require_once '../models/SessionManager.php';
class AuthenticateService {
    private $userRepository;
    private $sessionManager;

    public function __construct(UserRepository $userRepository, SessionManager $sessionManager) {
        $this->userRepository = $userRepository;
        $this->sessionManager = $sessionManager;
    }

    public function login($username, $password){
        $user = $this->userRepository->findByUsername($username);

        if ($user && password_verify($password, $user->getPassword())) {
            $this->sessionManager->set('user_id', $user->getId()); 
            return true;
        }

        return false;
    }

    public function logout() {
        unset($_SESSION['user_id']);
    }

    public function isLoggedIn(){
        return isset($_SESSION['user_id']);
    }

    public function getLoggedInUser(){
        if ($this->isLoggedIn()) {
            return $this->userRepository->findById($_SESSION['user_id']);
        }
        return null;
    }
}


?>
