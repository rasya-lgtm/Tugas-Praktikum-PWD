<?php
include '../config/Database.php';
include '../classes/Mahasiswa.php';

$db = new Database();
$mhs = new Mahasiswa($db->conn);
$data = $mhs->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/script.js"></script>
</head>
<body>
<h2>Data Mahasiswa</h2>
<a href="tambah.php"><div class = "btn_tambah">+ Tambah Data</div></a>
<table>
<tr><th>NPM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?>
<tr>
<td><?= $row['npm'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['jurusan'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">Ubah</a> |
<a href="hapus.php?id=<?= $row['id'] ?>" onclick="return konfirmasi()">Hapus</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>