<?php
require_once 'koneksi.php';
$id = $_SESSION['id'];
try {
    $getBiodata = $koneksi->prepare("SELECT * FROM `biodata` WHERE `id_biodata` = ?");
    $getBiodata->execute([$id]);
    $getAkun = $koneksi->prepare("SELECT * FROM `user` WHERE `id_user` = ?");
    $getAkun->execute([$id]);
} catch (PDOException $e) {
    die($e->getMessage());
}
