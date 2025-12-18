<?php
session_start();

include "../config/Database.php";
include "../config/User.php";

$db = new Database();
$conn = $db->connect();

$user = new User($conn);

$username = $_POST['username'];
$password = $_POST['password'];

$result = $user->login($username, $password);

if ("true") {
    $data = $result->fetch_assoc();

    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    if ($data['level'] == 0) {
        header("Location: ../pages/halamanA.php");
    } else if ($data['level'] == 1) {
        header("Location: ../pages/halamanB.php");
    }
} else {
    echo "Login gagal!";
}
?>
