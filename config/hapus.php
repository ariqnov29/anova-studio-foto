<?php
require_once 'koneksi.php';
$id_produk = $_POST['id_produk'];
$gambar = $_POST['gambar'];


try {
    $queryDelete = $koneksi->prepare("DELETE FROM `produk` WHERE `produk`.`id_produk` = ?");
    $queryDelete->execute([$id_produk]);
    unlink('../' . $gambar);
    echo "<script>
    alert('terHapus');
    window.location.replace('../halaman_menu_utama.php');
    </script>";
} catch (PDOException $e) {
    die($e->getMessage());
}
