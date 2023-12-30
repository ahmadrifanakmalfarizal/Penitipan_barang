<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, phone, password) VALUES ('$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regrestasi StuffSecure</title>
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
                    <h2>Daftar</h2>

                <form action="regrestasi.php" method="post">
                    <input type="teks" name="phone" required ="" placeholder="Number">
                    <input type="teks" name="email" required ="" placeholder="E-mail">
                    <input type="password" name="password" required="" placeholder="Password">
                    <input type="submit" value="Daftar" class="btnn">
                </form>

                    <p class="link">Sudah punya akun?
                    <a href="login.php">Login</a></p>
                </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>