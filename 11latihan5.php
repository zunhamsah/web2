<?php

	$conn = mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_eror())
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror();
	}
	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		While($data=mysqli_fetch_row($hasil))
		{
			echo "$data[0] $data[1] $data[2]";
		}
		mysqli_result($hasil);
	}	

?>
