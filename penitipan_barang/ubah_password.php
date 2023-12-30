<?php include 'header.php'?>
<?php
function changePassword($userId, $newPassword, $conn) {
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password='$hashedPassword' WHERE id=$userId";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["old_password"]) && isset($_POST["new_password"]) && isset($_POST["confirm_password"])) {
    $oldPassword = $_POST["old_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];


    $userId = $_SESSION["user_id"];
    $sql = "SELECT password FROM users WHERE id=$userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $oldHashedPassword = $row["password"];

        if (password_verify($oldPassword, $oldHashedPassword)) {

            if ($newPassword == $confirmPassword) {

                if (changePassword($userId, $newPassword, $conn)) {
                    echo '<div class="alert alert-success">Password Berhasil diUbah</div>';
                } else {
                    echo '<div class="alert alert-error">Gagal mengubah password</div>';
                }
            } else {
                echo '<div class="alert alert-error">Password baru dan konfirmasi password tidak cocok</div>';
            }
        } else {
            echo '<div class="alert alert-error">Password lama salah</div>';
        }
    } else {
        echo '<div class="alert alert-error">Gagal mengambil data pengguna</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h3 {
            color: #555;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .alert {
            padding:10px 16px;
            border: 1px solid;
        }

        .alert-success {
            background-color: #59981A;
            border: 1px solid #3D550C;
            color: #fff;
            padding: 7px;
        }

        .alert-error {
            background-color: #eee2e3;
            border: 1px solid #ff0019;
            color: #ff0019;
            padding: 7px;
        }
        .error {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>
<h3>Ubah Password</h3>
<form id="changePasswordForm" action="" method="post">
    Password Lama: <input type="password" name="old_password" required><br>
    Password Baru: <input type="password" name="new_password" required><br>
    Konfirmasi Password: <input type="password" name="confirm_password" required><br>
    <input type="submit" value="Konfirmasi Password">
</form>
</body>
</html>
