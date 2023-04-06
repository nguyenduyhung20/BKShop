<?php
require_once 'config.php';

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (!empty($username) && !empty($email) && !empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    #SQL injection baby
    try{
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
    
    
        if ($stmt->execute()) {
            header("Location: login.php");
        } else {
            echo "Error: " . implode(" - ", $stmt->errorInfo());
        }
    
    }
    catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $stmt = null;
}

$conn = null;
?>