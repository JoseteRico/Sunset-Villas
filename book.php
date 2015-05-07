<?php 

$link=mysql_connect("localhost", "root", "");
mysql_select_db("sunset",$link) OR DIE ("Error: No es posible establecer la conexión");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$rooms=$_POST['rooms'];
$adults=$_POST['adults'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$message=$_POST['message'];

$sql="Insert into bookings (name,email,phone,rooms,adults,checkin,checkout,message,confirmed) VALUES ('$name','$email','$phone','$rooms','$adults','$checkin','$checkout','$message','false')";
mysql_query($sql) or die (mysql_error());
mysql_close();

/*header('Location: index.php');*/
?>