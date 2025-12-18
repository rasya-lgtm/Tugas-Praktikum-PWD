<?php
include_once 'config/Database.php';
include_once 'class/Buku.php';

$database = new Database();
$db = $database->getConnection();

$buku = new Buku($db);
$data = $buku->tampilkanData();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📚 Data Buku Perpustakaan</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
    </tr>

    <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?= $row['id_buku']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['tahun']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
