<?php

class UserAccountManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Authenticate user given username or email and password.
     * 
     * @param string $username_email
     * @param string $password
     * @return array|null User data if successful , null if others
     */
    public function authenticate($username_email, $password) {
        try {
            // SQL injection baby
            $sql = "SELECT * FROM users WHERE username = :username_email OR email = :username_email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":username_email", $username_email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            } else {
                return null;
            }
        }
        catch (PDOException $e) {
            throw new Exception ("Error: ".$e->getMessage()) ;
        }
    }

        /**
     * Check if a user with the provided email already exist.
     * 
     * @param string $email
     * @return bool
     */
    private function is_email_exist($email) {
        $stmt = $this->conn-> prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    /**
     * Register a new user
     * 
     * @param string $username
     * @param string $email
     * @param string $password
     * @return string|null Error message or null if successful
     */
    public function register ($username, $email, $password) {
        if ($this->is_email_exist($email)) {
            return "Error: Email already in use";
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            // SQL injection baby
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
    
            if ($stmt->execute()) {
                header("Location: ../views/login.php");
                exit();
            } else {
                throw new Exception("Error: " . implode(" - ", $stmt->errorInfo()));
            }
        } catch (PDOException $e) {
            throw new Exception("Database error: " . $e->getMessage());
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $stmt = null;
        }

    }
}

?>