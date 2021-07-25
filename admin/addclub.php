<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['n'])) {
	$judul		=	$_POST['judul'];	
	$deskripsi		=	$_POST['deskripsi'];
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="../img/";
	$sql= mysqli_query($con,"insert into berita (id_berita,judul,deskripsi,gambar) values 
		('','$judul','$deskripsi','$vlampiran')");
	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location:berita.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
