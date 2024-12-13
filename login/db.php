<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud_remedial';

$config = mysqli_connect($host, $user, $password, $database);

if (!$config) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
?>