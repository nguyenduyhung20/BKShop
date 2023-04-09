<?php  

require_once 'RBAC.php';
class User {
    private $id;
    private $username;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $phone;
    private $address;
    private $role;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $username, $firstName, $lastName, $email, $password, $phone, $address, $role, $createdAt, $updatedAt) {
        $this->id = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
        $this->role = $role;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getRole() {
        return $this->role;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setRole($role) {
        if (!Role::isValidRole($role)) {
            throw new InvalidArgumentException("Invalid role provided");
        }
        $this->role = $role;
    }

    public function toString() {
        $output = "";
        $output .= "ID: " . $this->id . "\n";
        $output .= "Username: " . $this->username . "\n";
        $output .= "First Name: " . $this->firstName . "\n";
        $output .= "Last Name: " . $this->lastName . "\n";
        $output .= "Email: " . $this->email . "\n";
        $output .= "Phone: " . $this->phone . "\n";
        $output .= "Address: " . $this->address . "\n";
        $output .= "Role: " . $this->role . "\n";
        $output .= "Created At: " . $this->createdAt . "\n";
        $output .= "Updated At: " . $this->updatedAt . "\n";
        return $output;
    }
    
}

?>