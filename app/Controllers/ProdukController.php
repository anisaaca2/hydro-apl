<?php
require 'app/Models/Produk.php';
require 'database.php';

class ProdukController {
    public function index() {
        if (!file_exists('views/produk.php')) {
            die("File views/produk.php tidak ditemukan");
        }
        $produkModel = new Produk();
        $produk = $produkModel->getAll();
        require 'views/produk.php';
    }
}
?>