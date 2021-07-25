<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['n'])) {
	$nama_jenis		=	$_POST['nama_jenis'];
	$sql= mysqli_query($con,"insert into jenis (id_jenis,nama_jenis) values 
		('','$nama_jenis')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:jenis.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


