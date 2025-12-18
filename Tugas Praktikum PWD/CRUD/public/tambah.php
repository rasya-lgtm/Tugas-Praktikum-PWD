<?php
include '../config/Database.php';
include '../classes/Mahasiswa.php';

$db = new Database();
$mhs = new Mahasiswa($db->conn);

if(isset($_POST['simpan'])){
    $mhs->tambah($_POST['nim'], $_POST['nama'], $_POST['jurusan']);
    header("Location: index.php");
}
?>
<form method="post">
<input name="nim" placeholder="NIM"><br>
<input name="nama" placeholder="Nama"><br>
<input name="jurusan" placeholder="Jurusan"><br>
<button name="simpan">Simpan</button>
</form>