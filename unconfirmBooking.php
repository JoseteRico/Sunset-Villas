<?php
	include 'conexion.php';

	$id=$_GET['id'];

	$sql="UPDATE bookings SET confirmed='false' WHERE idBooking=$id";
	mysql_query($sql) or die (mysql_error());

	header('Location: admin.php');
?>