<?php
session_start();
include 'config.php';

    if(!isset($_SESSION['user_id'])){
        echo "<script>window.location = 'login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengguna</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/pengguna.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="navbar">

        <div class="container">
            
            <h2 class="nav-brand float-left"><b>StuffSecure</b></h2>

            <ul class="nav-menu float-left">
                <li><a href="penitipan.php">Penitipan</a></li>
                <li><a href="pengiriman.php">Pengiriman</a></li>
                <li>
                    <a href="">Akun <i class="fa fa-caret-down"></i></a>

                    <ul class="dropdown">
                        <li><a href="ubah_password.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
        
    </div>
</body>
</html>