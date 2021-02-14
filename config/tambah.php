<?php
require_once 'koneksi.php';

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$file_name = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];


try {
    $query = $koneksi->prepare("INSERT INTO `produk` (`id_produk`, `id_user`, `gambar`, `produk`, `deskripsi`, `harga`) VALUES (NULL, ?, ?, ?, ?,?)");
    $query->execute([$id, 'images/' . $id . '-' . $file_name, $nama_produk, $deskripsi, $harga]);
    move_uploaded_file($tmp_name, '../images/' . $id . '-' . $file_name);
    header("Location: ../halaman_menu_utama.php");
} catch (PDOException $e) {
    die($e->getMessage());
}
