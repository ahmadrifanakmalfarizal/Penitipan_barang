<?php
session_start();
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login StuffSecure</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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
        <div class="content">
            <h1>Selamat Datang di aplikasi<br>StuffSecure</h1>
            <p class="par">Adalah Aplikasi penitipan barang yang <br> paling Aman dan Terpercaya 100% </p>

                <button class="cn"><a href="https://chat.whatsapp.com/KZUAz70O8G2F52PPQK2lxU" target="blank">JOIN WA<ion-icon name="logo-whatsapp" style="font-size:30px ;"></a></button>

                <div class="form">
                    <h2>Login</h2>

                <?php
                    if(isset ($_GET['msg'])){
                        echo "<div class='alert-error'>" .$_GET['msg']."</div>";
                    }
                ?>

                    <form action="login.php" method="post">
                    <input type="text" name="identifier" required="" placeholder="Number/E-mail">
                    <input type="password" name="password" required="" placeholder="Password">
                    <input class="btnn" type="submit" name="submit" value="Login" > 
                    </form>
                    
                    <?php 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $identifier = $_POST["identifier"];
                        $password = $_POST["password"];

                        if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                            $identifierType = "email";
                        } else {
                            $identifierType = "phone";
                        }

                        $sql = "SELECT * FROM users WHERE $identifierType='$identifier'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            if (password_verify($password, $row["password"])) {
                                $_SESSION["user_id"] = $row["id"];

                                echo "<script>window.location = 'penitipan.php'</script>";

                                }else{
                                    echo '<div class="alert alert-error">Password salah</div>';
                                    }

                                }else{
                                    echo '<div class="alert alert-error">Username tidak ditemukan</div>';
                            }
                         }

                    $conn->close();
                    ?>

                    <p class="link">Belum punya akun?
                    <a href="regrestasi.php">Daftar</a></p>
                    <br><p class="lupa"><a href="ubah_password2.php">Lupa Password</a></p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>