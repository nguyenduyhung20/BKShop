<?php
require_once 'config.php';

/**
 * Sanitize input data
 * 
 * @param string $data
 * @return string
 */
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * User registration functionality
 */
class UserRegistration {
    private $conn;

    public function __contruct($conn) {
        $this->conn = $conn;
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
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
    
            if ($stmt->execute()) {
                header("Location: login.php");
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

// XSS (Cross-site Scripting) attacks
$username = validate_input($_POST['username']);
$email = filter_var(validate_input($_POST['email']), FILTER_VALIDATE_EMAIL);
$password = validate_input($_POST['password']);

if ($username && $email && $password) {
    $userRegistration = new UserRegistration($conn);
    $result = $userRegistration->register($username, $email, $password);
    if ($result) {
        echo $result;
    }
}

$conn = null;
?>
