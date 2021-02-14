<?php
require_once 'koneksi.php';
$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$password = $_POST['password'];


if (isset($_POST['register'])) {
    try {
        $query = $koneksi->prepare("INSERT INTO `user` (`id`, `email`, `password`) VALUES (NULL, ?, SHA1(?));
   INSERT INTO `biodata` (`biodata_id`, `id`, `nama`,) VALUES (NULL, LAST_INSERT_ID(), ?);");
        $query->execute([$email, $password, $nama]);
        echo "<script>
            alert('Sukses');
            window.location.replace('../halaman_login.php');
            </script>";
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
