<?php
require_once 'koneksi.php';
$id_user = $_POST['id_user'];
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_brand'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$harga = $_POST['harga'];
$nameGambar_produk = $_FILES['gambar_produk']['name'];
$tmpGambar_produk = $_FILES['gambar_produk']['tmp_name'];

try {
    if ($nameGambar_produk != '') {
        $queryUpdate = $koneksi->prepare("UPDATE `produk` SET `gambar`=? = ?,`deskripsi`=?,`harga`=? 
        WHERE `id_produk` = ? AND `id_user` = ?");
        $queryUpdate->execute(['images/' . $id_user . '-' . $nameGambar_produk, $nama_produk, $deskripsi, $harga, $id_produk, $id_user]);
        unlink('../' . $gambar);
        move_uploaded_file($tmpGambar_produk, '../images/' . $id_user . '-' . $nameGambar_produk);
        echo "<script>
        alert('berhasil');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
    } else {
        $queryUpdate = $koneksi->prepare("UPDATE `produk` SET `nama_produk`=?,`deskripsi`=?,`harga`=? 
        WHERE `id_produk` = ? AND `user_id` = ?");
        $queryUpdate->execute([$nama_produk, $deskripsi, $harga, $id, $id_user]);
        echo "<script>
        alert('berhasil');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
