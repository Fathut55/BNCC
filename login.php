<?php
require 'functions.php';

if( isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' " );

    //cek username
    if( mysqli_num_rows($result) === 1){
        
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("location: home.html");
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label{
            display: block;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" >
</head>
<body>
    <br><br><br><br><br>
    <div class="container">
    <form action="" method="post" class="signup-login">
    <h1 class="judul">Log In</h1>
        <div class="input-group">
            <label for="username"> <i class="uil uil-user"></i> Username :</label>
            <input type="text" placeholder="Username" name="username" id="username">
        </div>
        <div class="input-group">
            <label for="password"> <i class="uil uil-lock"></i> Password :</label>
            <input type="password" placeholder="Password" name="password" id="password"> 
        </div>

        <!-- kalau username atau password salah -->
        <?php if( isset($error)) : ?>
        <p style="color: red; font-style: intalic;">Username Atau Password Salah</p>
        <?php endif; ?>
        
        <div class="input-group">
            <button type="sumbit" name="login" class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't Have an Account ? <a href="registrasi.php">Sign Up</a> </p>
    </form>
    </div>
    
</body>
</html>