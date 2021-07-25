<?php
session_start();
include "../sistem/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($con,"DELETE FROM user where id='$id'") or die(mysql_error());
	
if ($query) {

    header('location:user.php?sucsess');
}
?>