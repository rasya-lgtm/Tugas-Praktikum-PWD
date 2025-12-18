<?php
class Mahasiswa {
    private $conn;
    private $table = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function tampil() {
        return $this->conn->query("SELECT * FROM {$this->table}");
    }

    public function tambah($nim, $nama, $jurusan) {
        $sql = "INSERT INTO {$this->table} VALUES (NULL,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nim, $nama, $jurusan]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nim, $nama, $jurusan) {
        $sql = "UPDATE {$this->table} SET nim=?, nama=?, jurusan=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nim, $nama, $jurusan, $id]);
    }

    public function hapus($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>