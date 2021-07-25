<?php 
session_start();
include('../koneksi.php');
if (isset($_POST['n'])) {
	$nama		=	$_POST['nama'];
	$tanggal_lahir		=	$_POST['tanggal_lahir'];
	$alamat		=	$_POST['alamat'];
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="../images/";
	$sql= mysqli_query($con,"insert into pelatih (nama,tanggal_lahir,alamat,gambar) values 
		('$nama','$tanggal_lahir','$alamat','$vlampiran')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:pelatih.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


