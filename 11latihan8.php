<?php
$conn=mysqli_connect("localhost","root","","Universitas_db");
	if (mysqli_connect_eror())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_eror();
  	}
      echo "koneksi berhasil";

  	$nm_dpn = $_POST['firstname'];
	$nm_blkang = $_POST['lastname'];
	$age = $_POST['age'];

	$sql = "INSERT INTO tbl_mahasiswa (FirstName, LastName, Age) VALUES('$nm_dpn','$nm_blkang','$age')"
	$query = mysqli_query($conn, $sql) or die (mysqli_eror());

	if($query){
		echo "Data berhasil di insert";
	}
	else
	{
		echo "Error :".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
