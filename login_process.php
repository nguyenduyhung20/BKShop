<?php 
session_start();
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
 * User authentication functionality
 */
class UserAuthentication {
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
}

$username = validate_input($_POST['username']);
$password = validate_input($_POST['password']);

if ($username && $password) {
    $userAuth = new UserAuthentication($conn);
    $user = $userAuth->authenticate($username, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header('Location: dashboard.php');
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }

}
$conn = null;
?>
