<?php

// data dari form
$username = $_POST['uname'];
$password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
$role = $_POST['role'];

// 1. 
$k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

// 2.
$sql = "INSERT INTO users (username, password, role)
        VALUES (?, ?, ?)";

// 3.
$result = $k->prepare($sql);
$result->execute([$username, $password, $role]);

echo "Registrasi berhasil";
// redirect
header('Location: Login.php');