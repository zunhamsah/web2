<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysqli_connect("localhost" , "root" , "password");
if($conn){
    die('gagal koneksi: ' . mysqli_eror());

}
echo 'koneksi berhasil';
$sql = "CREATE TABLE mahasiswa('mhsID int NOT NULL AUTO_INCREMENT ',
                                'PRIMARY KEY(mhsID) ',
                                'FirstName varchar(15) ',
                                'LastName varchar(15) ',
                               'Age int'
                                )";

mysqli_select_db('universitas_db');
if(mysqli_query($sql , $conn)){
    echo  "Tabel berhasil dibuat";
} else {
    echo "Tabel berhasil dibuat";
}
?>
