<?php
	$conn=mysqli_connect("localhost","root","","Universitas_db");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}
      echo "koneksi berhasil";

  	$sql = "SELECT * FROM tbl_mahasiswa";
	if ($hasil=mysqli_query($conn,$sql))
	{
		While($data=mysqli_fetch_array($hasil))
		{
			echo "$data [FirstName] $data[LastName] $data[Age]";
		}
		mysqli_free_result($hasil);
	}
    
?>
