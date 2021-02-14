<?php
$db_hostname = 'localhost';
$db_username = 'id16157638_newproject';
$db_password = 'Dk6VuN<A&PS8}Uci';
$db_name = 'id16157638_crudava';
try {
    $koneksi = new PDO(
        "mysql:host=$db_hostname;dbname=$db_name",
        $db_username,
        $db_password
    );
} catch (PDOException $e) {
    die($e->getMessage());
}
