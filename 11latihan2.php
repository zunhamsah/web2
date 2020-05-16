<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '<password here>';


$conn = mysqli_connect("localhost","root","password");

if($conn){
    echo 'connected fail';//koneksi gagal
}
    echo 'connected success';//koneksi berhasil

$sql = "CREATE DATABASE Universitas";

    if(mysqli_query($conn , $sql)){
        echo "Database berhasil dibuat";
    } else {
        echo "eror creating database: ";

    }
?>
