<?php
session_start();
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage StuffSecure</title>
    <link rel="stylesheet" href="./assets/css/homepage.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">StuffSecure</h2>
            </div>

            <div class="menu">
                <ul class="nav-menu float-left">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="galery.php">Galeri</a></li>
                    <li><a href="kontak2.php">kontak</a></li>
                    <li><a href="#">Tentang</a></li>
                </ul>
            </div>
        </div> 
        <div class="img">
            <img src="./foto/1.png" alt="Foto 1">
        </div>
                <div class="content">
                    <h1>Selamat Datang di aplikasi<br>StuffSecure</h1>
                        <p class="par">Adalah Aplikasi penitipan barang yang <br> paling Aman dan Terpercaya 100% </p>

                        <button class="cn"><B><a href="login.php">Login</a></B></button>
                        <button class="ca"><B><a href="regrestasi.php">Daftar</a></B></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>