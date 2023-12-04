<?php
require 'database.php';

$id = $_GET['id'];

$db = new Database();

$db->delete('data_barang', "id_barang = {$id}");

if ($db->delete('data_barang', "id_barang = {$id}")) {
  header('location: home.php');
  exit;
} else {
  echo 'Gagal menghapus data';
}
?>
