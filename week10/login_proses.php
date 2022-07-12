<?php
session_start();
// data dari form
$username = $_POST['uname'];
$password = $_POST['upass'];

// 1.
$k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

// 2. 
$sql = "SELECT * FROM users
        WHERE username = ?";

// 3.
$result = $k->prepare($sql);
$result->execute([$username]);

// 4. 
if($row = $result->fetch()){
    // username ada
    // cek password apakah sesuai
    if(password_verify($password, $row['password'])){
        // password cocok
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['user_id'] = $row['id'];
        echo "Login berhasil";
        header('Location: page_internal.php');
    }
    else{
        // login gagal
        echo "Password salah";
        header('Location: login.php');
    }
}else{
        // login gagal
        header('Location: login.php');
}