<?php
include '../config/Database.php';
include '../classes/Mahasiswa.php';

$db = new Database();
$mhs = new Mahasiswa($db->conn);
$data = $mhs->getById($_GET['id']);

if(isset($_POST['update'])){
    $mhs->update($_GET['id'], $_POST['nim'], $_POST['nama'], $_POST['jurusan']);
    header("Location: index.php");
}
?>
<form method="post">
<input name="nim" value="<?= $data['nim'] ?>"><br>
<input name="nama" value="<?= $data['nama'] ?>"><br>
<input name="jurusan" value="<?= $data['jurusan'] ?>"><br>
<button name="update">Update</button>
</form>