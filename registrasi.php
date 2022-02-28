<?php
require 'functions.php';

if( isset($_POST["register"])){ 
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('user baru berhasil ditambahkan')
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" >
</head>
<body>
    <div class="container">
    <form action="" method="post" class="signup-login">
    <h1 class="judul">Sign Up</h1>
        <div class="input-group">
            <label for="fullname"> <i class="uil uil-user"></i> Fullname :</label>
            <input type="text" placeholder="Fullname" name="fullname" id="fullname">
        </div>
        <div class="input-group">
            <label for="username"> <i class="uil uil-user"></i> Username :</label>
            <input type="text" placeholder="Username"  name="username" id="username">
        </div>
        <div class="input-group">
            <label for="password"> <i class="uil uil-lock"></i> Password :</label>
            <input type="password" placeholder="Password" name="password" id="password">
        </div>    
        <div class="input-group">
            <label for="password2"> <i class="uil uil-lock"></i> Konfirmasi Password :</label>
            <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2">
        </div>    
        <div class="input-group">
            <label for="address"> <i class="uil uil-home"></i> Address :</label>
            <input type="text" placeholder="Address" name="address" id="address"> 
        </div>        
        <div class="input-group">
            <label for="phone number"> <i class="uil uil-phone"></i> Phone Number :</label>
            <input type="text" placeholder="Phone Number" name="phonenumber" id="phonenumber">
        </div>    
        <div class="input-group">
            <label for="age"> <i class="uil uil-user-plus"></i> Age :</label>
            <input type="number" placeholder="Age" name="age" id="age">
        </div>    
        <div class="input-group">
            <label for="birthdate"> <i class="uil uil-calendar-alt"></i> Birth Date :</label>
            <input type="date" placeholder="Birth Date" name="birthdate" id="birthdate">
        </div>        
        <div class="input-group">
            <button type="submit" name="register" class="btn">Sign Up</button>
        </div>    
        <p class="login-register-text">Have an Account ? <a href="login.php">Log In</a> </p>
    </form>
    </div>
    
</body>
</html>