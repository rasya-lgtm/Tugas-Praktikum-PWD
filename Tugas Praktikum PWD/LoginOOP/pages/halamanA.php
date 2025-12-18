<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['level'] != 0) {
    header("Location: ../auth/login.php");
}
?>

<h1>Halaman A - Admin</h1>
<p>Selamat datang, <?= $_SESSION['username']; ?></p>
<a href="../auth/logout.php">Logout</a>
