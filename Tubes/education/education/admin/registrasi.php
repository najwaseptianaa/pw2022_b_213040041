<?php
require 'functions.php';

if( isset($_POST["register"]) ) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
    
}

?>













<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
</head>
<body>

<h1>Halaman Registrasi</h1>

<form action="" method="post">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="text" name="password" id="password">
        </li>
        <li>
            <label for="password2">password :</label>
            <input type="text" name="password" id="password2"> 
        </li>
        <li>
            <button type="submit" name="register">Register!</button>
        
        </li>
    </ul>
</body>
</html>