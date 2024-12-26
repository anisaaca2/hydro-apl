<?php
class HomeController {
    public function index() {
        if (!file_exists('views/home.php')) {
            die("File views/home.php tidak ditemukan");
        }
        require 'views/home.php';
    }
}
?>