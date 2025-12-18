<?php
include '../config/Database.php';
include '../classes/Mahasiswa.php';

$db = new Database();
$mhs = new Mahasiswa($db->conn);
$mhs->hapus($_GET['id']);
header("Location: index.php");
?>