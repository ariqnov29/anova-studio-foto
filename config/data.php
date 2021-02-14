<?php
require_once 'koneksi.php';


try {
    $getAllProduk = $koneksi->prepare("SELECT * FROM `produk`");
    $getAllProduk->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}
