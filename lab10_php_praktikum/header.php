<?php
include("database.php");

// Create an instance of the Database class
$db = new Database();

// Query to display data
$sql = 'SELECT * FROM data_barang';
$result = $db->query($sql);

if (!$result) {
    die('Error: ' . $db->error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 10</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">
        <header>
            <h1>Database</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="tambah.php">Tambah Barang</a>
        </nav>