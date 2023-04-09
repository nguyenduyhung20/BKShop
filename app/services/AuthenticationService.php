<?php 

require_once 'app/models/UserRepository.php';
require_once 'app/models/SessionManager.php';

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
            $this->sessionManager->set('username', $user->getUsername()); 
            return true;
        }

        return false;
    }

    public function register($username, $firstName, $lastName, $email, $password, $phone, $address, $role){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $this->userRepository->createUser($username, $firstName, $lastName, $email, $hashedPassword, $phone, $address, $role);
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
