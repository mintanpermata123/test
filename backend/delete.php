<?php

	include_once("koneksi.php");
	$id = $_GET['id'];
	$query = "DELETE FROM karyawan WHERE id='$id'";
	$result = mysqli_query($koneksi, $query);
	header("location:index.php");
?>