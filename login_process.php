<?php 
session_start();
require_once 'config.php';

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (!empty($username) && !empty($password)) {
    try {
        $sql = "SELECT * FROM users WHERE username = :username_email OR email = :username_email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username_email", $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: dashboard.php");
        } else {
            echo "Invalid credentials. Please try again.";
        }
    }
    catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}

?>
