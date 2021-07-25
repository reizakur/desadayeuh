<?php
session_start();
include "../sistem/koneksi.php";

$id_berita = $_GET['id_berita'];

$query = mysqli_query($con,"DELETE FROM berita where id_berita='$id_berita'") or die(mysql_error());
	
if ($query) {

    header('location:berita.php?sucsess');
}
?>