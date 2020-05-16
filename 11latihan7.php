<?php
	$conn=mysqli_connect("localhost","root","","Universitas");
	if (mysqli_connect_eror())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_eror();
  	}  	
      echo "koneksi berhasil";
  	$sql = "SELECT * FROM tbl_mahasiswa";
	if ($hasil=mysqli_query($conn,$sql))
	{
		$hit=mysqli_num_rows($hasil);
		echo "Jumlah Record $hit";
	}
	
?>
