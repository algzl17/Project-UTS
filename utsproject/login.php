<?php
session_start();
$user = $_POST["email"];
$pass = $_POST["password"];
//==============================
$dbuser = "admin@gmail.com";
$dbpass = "akuganteng";
//==============================
if($user == $dbuser && $pass == $dbpass){
    echo "<script>alert('Berhasil');window.location = ('myadmin')</script>";
} else {
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]++;
    } else{
        $_SESSION["salah"] = 1;
    }
    echo "<script>alert('Email atau Password Salah !'); window.location = ('index.php')</script>";
}
?>
