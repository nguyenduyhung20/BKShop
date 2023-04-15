<?php 
require_once 'app/models/SessionManager.php';
require_once 'app/models/User.php';
require_once 'app/models/RBAC.php';

class AuthMiddleware {
    private $sessionManager;

    public function __construct(SessionManager $sessionManager) {
        $this->sessionManager = $sessionManager;
    }

    public function checkLoggedIn() {
        if (!$this->sessionManager->isLoggedIn()) {
            header('Location: index.php');
            exit;
        }
    }

    public function checkAdmin() {
        $this->checkLoggedIn();

        $user = $this->sessionManager->get('user');

        if (!$user || $user->getRole() != Role::ADMIN) {
            header("Location: index.php");
            exit;
        }
    }
}

?>