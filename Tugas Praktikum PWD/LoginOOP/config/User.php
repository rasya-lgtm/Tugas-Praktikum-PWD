<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($username, $password) {
        $password = md5($password);
        $query = "SELECT * FROM users 
                  WHERE username='$username' 
                  AND password='$password'";
        return $this->conn->query($query);
    }
}
?>
