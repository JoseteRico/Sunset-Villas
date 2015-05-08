<?php
	include 'conexion.php';

	$id=$_GET['id'];

	$sql="DELETE from bookings WHERE idBooking=$id";
	mysql_query($sql) or die (mysql_error());

	header('Location: admin.php');
?>