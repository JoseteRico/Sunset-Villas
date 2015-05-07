<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Manage Bookings</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<!-- confirmed bookings  -->
<link rel="stylesheet" href="css/confirmed.css" />

</head>
<!--<body  onload="window.print()">-->
<body>
<table border="1" align="center">

<?php
	include 'conexion.php';
	$id=$_GET['id'];

	$sql="SELECT * FROM bookings where idBooking=$id";
	$result=mysql_query($sql) or die (mysql_error());

        	while ($row=mysql_fetch_assoc($result)) {
        		$id=$row['idBooking'];
        		$name= $row['Name'];
        		$email= $row['Email'];
        		$phone= $row['Phone'];
        		$rooms= $row['Rooms'];
        		$adults= $row['Adults'];
        		$checkin= $row['CheckIN'];
        		$checkout= $row['CheckOUT'];
        		$message= $row['Message'];

        		/*echo "<tr><td colspan=2><img src=images/fondo_3.png></td></tr><tr id=".$id." name=".$id."><td>Booking ID</td><td>".$id."</td></tr><tr><td>Customer Name</td><td name=".$name.">".$name."</td></tr><tr><td>Customer Email</td><td name=".$email.">".$email."</td></tr><tr><td>Customer Phone</td><td name=".$phone.">".$phone."</td></tr><tr><td>Nº Rooms </td><td name=".$rooms.">".$rooms."</td></tr><tr><td>Nº Adults </td><td name=".$adults.">".$adults."</td></tr><tr><td>Check IN </td><td name=".$checkin.">".$checkin."</td></tr><tr><td>Check OUT </td><td name=".$checkout.">".$checkout."</td></tr><tr><td>Customer's Message</td><td name=".$message.">".$message."</td></tr>";*/
        	}	    	
?>
</table>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-offset-5">
				<img src="images/fondo_3.png">
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-offset-2">
				<hr style="border: 3px solid">
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2  medio" >
				<h4>Customer's Name</h4>
			</div>
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4><?php echo $name; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2" >
				<h4 >Customer's Email</h4>
			</div>
			<div class="col-md-4 col-md-offset-2" >
				<h4><?php echo $email; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4>Customer's Phone</h4>
			</div>
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4><?php echo $phone; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2" >
				<h4>Nº of Rooms</h4>
			</div>
			<div class="col-md-4 col-md-offset-2" >
				<h4><?php echo $rooms; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4>Nº of Adults</h4>
			</div>
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4><?php echo $adults; ?></h4>
			</div>
			<hr style="border 1px solid">
		</div>

		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2" >
				<h4>Check IN</h4>
			</div>
			<div class="col-md-4 col-md-offset-2" >
				<h4><?php echo $checkin; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4>Check OUT</h4>
			</div>
			<div class="col-md-4 col-md-offset-2 medio" >
				<h4><?php echo $checkout; ?></h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-2" >
				<h4>Message</h4>
			</div>
			<div class="col-md-4 col-md-offset-2" >
				<h4><?php echo $message; ?> </h4>
			</div>
		</div>
	</div>
</body>
</html>