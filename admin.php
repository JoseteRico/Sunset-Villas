<?php
session_start();
if($_SESSION['user']==''){
 header("Location:manage.php");
}else{
 $dbh=new PDO('mysql:dbname=sunset;host=127.0.0.1', 'root', '');
 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
 $sql->execute(array($_SESSION['user']));
 while($r=$sql->fetch()){
  echo "<center><h2>Hello, ".$r['username']."</h2></center>";
 }
}
?>
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
<?php
	
	$link=mysql_connect("localhost", "root", "");
	mysql_select_db("sunset",$link) OR DIE ("Error: No es posible establecer la conexión");

	

?>
<form action="logout.php" align="center">
<input type="submit" value="LOG OUT"class="btn"> </input>
</form>
<hr style="border:3px solid">
<form method="get" action="confirmBooking.php">
<table class="order-table table" name="tabla">
<h1> Pending Bookings </h1>
	<div class="col-md-3">
	<br>
		<input type="text" class="light-table-filter" data-table="order-table" placeholder="Filter"><hr>
	</div>	
    <thead>
        <tr>
        	<th>ID Booking </th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Rooms</th>
            <th>Adults</th>
            <th>Check IN</th>
            <th>Check OUT</th>
            <th>Message</th>
            <th>Actions</th>
            <th>Confirm Booking</th>
        </tr>
    </thead>
    <tbody>
        <?php
        	$bookings="Select * from bookings where confirmed='false'";
			$result=mysql_query($bookings) or die (mysql_error());

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

        		echo "<tr id=".$id." name=".$id."><td>".$id. '<a href=pdf.php?id='.$id.'><img src=images/pdf.png></a>'."</td><td name=".$name.">".$name."</td><td name=".$email.">".$email."</td><td name=".$phone.">".$phone."</td><td name=".$rooms.">".$rooms."</td><td name=".$adults.">".$adults."</td><td name=".$checkin.">".$checkin."</td><td name=".$checkout.">".$checkout."</td><td name=".$message.">".$message."</td><td>".'<a  onclick="return checkDelete();" href=deleteBooking.php?id='.$id.'><img src=images/delete.png alt="Delete Booking"></a>'.'<a href=mailto:'.$email.'>'.'<img src=images/email.gif alt="Send email"></a>'."</td><td>".'<a href=confirmBooking.php?id='.$id.'>CONFIRM BOOKING</a>'."</td></tr>";

        		# code...
        	}
         ?>
    </tbody>
</table>
</form>
<hr style="border:2px solid">
<h1> Confirmed Bookings </h1>
<table class="order-table table" name="tabla">
	<div class="col-md-3">
	<br>
		<input type="text" class="light-table-filter" data-table="order-table" placeholder="Filter"><hr>
	</div>	
    <thead>
        <tr>
        	<th>ID Booking </th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Rooms</th>
            <th>Adults</th>
            <th>Check IN</th>
            <th>Check OUT</th>
            <th>Message</th>
            <th>Actions</th>
            <th>Unconfirm Booking</th>
        </tr>
    </thead>
    <tbody>
        <?php
        	$bookings="Select * from bookings where confirmed='true'";
			$result=mysql_query($bookings) or die (mysql_error());

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

        		echo "<tr class=confirmed id=".$id." name=".$id."><td>".$id. '<a href=pdf.php?id='.$id.'><img src=images/pdf.png></a>'."</td><td name=".$name.">".$name."</td><td name=".$email.">".$email."</td><td name=".$phone.">".$phone."</td><td name=".$rooms.">".$rooms."</td><td name=".$adults.">".$adults."</td><td name=".$checkin.">".$checkin."</td><td name=".$checkout.">".$checkout."</td><td name=".$message.">".$message."</td><td>".'<a onclick="return checkDelete();" href=deleteBooking.php?id='.$id.'> <img src=images/delete.png alt="Delete Booking"></a>'.'<a href=mailto:'.$email.'>'.'<img src=images/email.gif alt="Send email"></a>'."</td><td>".'<a href=unconfirmBooking.php?id='.$id.'>UNCONFIRM BOOKING</a>'."</td></tr>";

        		# code...
        	}
         ?>
    </tbody>
</table>

<!-- SCRIPT ZONE  -->

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Delete this booking?');
}
</script>


<script language="javascript" type="text/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>

</html>