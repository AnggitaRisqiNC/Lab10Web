<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'latihan1');

$conn = mysqli_connect(HOST, USER, PASS, DATABASE);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
}   #else echo "Koneksi berhasil";
?>