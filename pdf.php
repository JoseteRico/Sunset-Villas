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
<link rel="stylesheet" href="css/pdf.css" />

</head>
<!--<body  onload="window.print()">-->
<body onload="window.print()">
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
        		$status= $row['confirmed'];

        		/*echo "<tr><td colspan=2><img src=images/fondo_3.png></td></tr><tr id=".$id." name=".$id."><td>Booking ID</td><td>".$id."</td></tr><tr><td>Customer Name</td><td name=".$name.">".$name."</td></tr><tr><td>Customer Email</td><td name=".$email.">".$email."</td></tr><tr><td>Customer Phone</td><td name=".$phone.">".$phone."</td></tr><tr><td>Nº Rooms </td><td name=".$rooms.">".$rooms."</td></tr><tr><td>Nº Adults </td><td name=".$adults.">".$adults."</td></tr><tr><td>Check IN </td><td name=".$checkin.">".$checkin."</td></tr><tr><td>Check OUT </td><td name=".$checkout.">".$checkout."</td></tr><tr><td>Customer's Message</td><td name=".$message.">".$message."</td></tr>";*/
        	}	    	
?>
</table>
    <header class="clearfix">
      <div id="logo">
        <img src="images/fondo_3.png">
      </div>
      <h1>INVOICE BOOKING ID: <?php echo $id ?></h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>Sunset Villas<br /> Turkey</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:jrico@jrico.es">Company mail</a></div>
      </div>
      <div id="project">
        <div><span>Client name</span> <?php echo $name ?></div>
        <div><span>Phone</span> <?php echo $phone ?></div>
        <?php 
        	if ($status='false'){
        		echo "<div><span>Booking Status</span> Pending </div>";
        	}
        	else{
        		echo "<div><span>Booking Status</span> Confirmed </div>";
        	}
        ?>       
        <div><span>Email</span> <a href="mailto:john@example.com"><?php echo $email ?> </a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>QTY</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Nº Rooms </td>
            <td class="desc">Number of rooms</td>
            <td class="qty"><?php echo $rooms ?> </td>
          </tr>
          <tr>
            <td class="service">Nº of Adults </td>
            <td class="desc">Number of Adults  </td>
            <td class="qty"><?php echo $adults ?></td>
          </tr>
          <tr>
            <td class="service">Check IN date </td>
            <td class="desc">Date of the first CHECK IN</td>            
            <td class="qty"><?php echo $checkin ?></td>           
          </tr>
          <tr>
            <td class="service">Check OUT date</td>
            <td class="desc">Date of the CHECK OUT date</td>            
            <td class="qty"><?php echo $checkout ?></td>            
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Final price will be sent by E-mail.</div>
      </div>
    </main>
  </body>
</body>
</html>