<?php
session_start();
include 'config.php';
    if(!isset($_SESSION['user_id']))?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengguna</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/kontak.css">
</head>
<body class="bg-light">
    <div class="navbar">

        <div class="container">
            
            <h2 class="nav-brand float-left"><b>StuffSecure</b></h2>

            <ul class="nav-menu float-left">
                <li><a href="home.php">Home</a></li>
                <li><a href="galery.php">Galery</a></li>
                <li><a href="kontak2.php">Kontak</a></li>
                <li><a href="tentang.php">Tentang</a></li>
            </ul>

            <div class="clearfix"></div>
        </div>
        
    </div>
</body>
</html>