<?php
require 'database.php';

class Produk {
    public function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM produk");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>