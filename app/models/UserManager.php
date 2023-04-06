<?php
require_once '../config/config.php';

class UserManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function updateAdmin($id, $username, $first_name, $last_name, $email, $phone, $address, $role) {
        $sql = "UPDATE users SET 
            username = :username, 
            first_name = :first_name, 
            last_name = :last_name, 
            email = :email, 
            phone = :phone, 
            address = :address, 
            role = :role 
        WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
    }


    public function updateUser($id, $first_name, $last_name, $email, $phone, $address) {
        $sql = "UPDATE users SET 
                    first_name = :first_name, 
                    last_name = :last_name, 
                    email = :email, 
                    phone = :phone, 
                    address = :address
                WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}


?>