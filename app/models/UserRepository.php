<?php

require_once "User.php";

class UserRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function findAll() {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($usersData as $userData) {
            $users[] = $this->createUserFromData($userData);
        }

        return $users;
    }

    public function findById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createUserFromData($userData);
    }

    private function createUserFromData($data) {
        return new User(
            $data['id'],
            $data['username'],
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['password'],
            $data['phone'],
            $data['address'],
            $data['role'],
            $data['created_at'],
            $data['updated_at']
        );
    }

    private function updateAdmin(User $user) {
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
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->bindParam(':username', $user->getUsername(), PDO::PARAM_STR);
        $stmt->bindParam(':first_name', $user->getFirstName(), PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $user->getLastName(), PDO::PARAM_STR);
        $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
        $stmt->bindParam(':address', $user->getAddress(), PDO::PARAM_STR);
        $stmt->bindParam(':role', $user->getRole(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateUser (User $user) {
        $sql = "UPDATE users SET 
        first_name = :first_name, 
        last_name = :last_name, 
        email = :email, 
        phone = :phone, 
        address = :address
        WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->bindParam(':first_name', $user->getFirstName(), PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $user->getLastName(), PDO::PARAM_STR);
        $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
        $stmt->bindParam(':address', $user->getAddress(), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteUser(User $user) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }
}


?>