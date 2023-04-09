<?php 

class SessionManager{
    
    public function __construc() {
        $this->startSession();
    }

    public function startSession() {
        if (session_status() !== PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function endSession() {
        if (session_status() !== PHP_SESSION_NONE) {
            session_destroy();
            $_SESSION = array();
        }
    }

    public function regenerateSession() {
        if (session_status() !== PHP_SESSION_NONE) {
            session_regenerate_id(true);
        }
    }

    public function set($key, $value) {
        if (session_status() !== PHP_SESSION_NONE) {
            $_SESSION[$key] = $value;
        }
    }

    public function get($key) {
        if (session_status() !== PHP_SESSION_NONE && isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    public function isLoggedIn() {
        return $this->get('user_id') !== null;
    }
}


?>