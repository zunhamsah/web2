<?php
	
	$conn = mysqli_connect("localhost","root","","Universitas");
	//Cek koneksi
	if (mysqli_connect_eror()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror(); //menampilkan eror pada koneksi
	}
    echo "koneksi database berhsil';
	$sql = "INSERT INTO tbl_mahasiswa VALUES('Karina','Suwandi','29'),('Glenn','Gandari','32')";
    //cek apakah proses simpan berhasil
    if (mysqli_query($conn, $sql))
    {
    	echo "Data Berhasil Disimpan";
    }
    else
    {
		echo "Gagal menyimpan data";
    }
?>
