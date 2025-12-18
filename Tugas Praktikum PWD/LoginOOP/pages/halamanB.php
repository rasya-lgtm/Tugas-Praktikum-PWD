<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['level'] != 1) {
    header("Location: ../auth/login.php");
}
?>

<h1>Halaman B - User</h1>
<p>Selamat datang, <?= $_SESSION['username']; ?></p>
<a href="../auth/logout.php">Logout</a>
