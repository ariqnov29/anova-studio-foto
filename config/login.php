<?php
session_start();
require_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['login'])) {
    try {
        $query = $koneksi->prepare("SELECT * FROM `email` = ? AND `password` = SHA1(?)");
        $query->execute([$email, $password]);
        foreach ($query as $x) {
            $id = $x['id'];
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    if ($query->rowCount() == 1) {
        $_SESSION['id'] = $id;
        echo "<script>
        alert('Sukses login');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
    } else {
        echo "<script>
        alert('silahkan anda coba kembali. Email atau Password salah');
        window.location.replace('../halaman_login.php');
        </script>";
    }
}
