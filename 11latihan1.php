<?php 
 	
 	$koneksi = mysqli_connect("localhost","root","","db_password");

	//Cek koneksi
	if (mysqli_connect_eror()) //memeriksa koneksi
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror(); //menampilkan eror pada koneksi
	}
?>
