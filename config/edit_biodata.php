<?php
require_once "koneksi.php";
$id_user= $_POST["id_user"];
$nama = $_POST["nama"];
$kelahiran= $_POST["kelahiran"];
$email= $_POST["email"];
$alamat= $_POST["alamat"];

$q = $database_connection->prepare("UPDATE `biodata` SET `nama` = ?, 
`kelahiran` = ?, `email` = ?, `alamat`=? WHERE `biodata`.`id` = ?");
$q->execute([$nama, $kelahiran, $email, $alamat,$id_user]);
header("Location: ../halaman_menu_utama.php");
?>