
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Sign in</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<!-- confirmed bookings  -->
<link rel="stylesheet" href="css/login.css" />

</head>
<body>
<div class="container">
    <div class="row form">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" method="POST" action="manage.php">
                <input type="text" placeholder="Username" name="mail" required/>
                <input type="password" placeholder="Password" name="pass" required/>
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
<?php
error_reporting(0);

session_start();
if($_SESSION['user']!=''){header("Location:admin.php");}

$dbh=new PDO('mysql:dbname=sunset;host=127.0.0.1', 'root', '');/*Change The Credentials to connect to database.*/
$email=$_POST['mail'];
$password=$_POST['pass'];
if(isset($_POST) && $email!='' && $password!=''){
 $sql=$dbh->prepare("SELECT id,password,psalt FROM users WHERE username=?");
 $sql->execute(array($email));
 while($r=$sql->fetch()){
  $p=$r['password'];
  $p_salt=$r['psalt'];
  $id=$r['id'];
 }
 $site_salt="subinsblogsalt";/*Common Salt used for password storing on site. You can't change it. If you want to change it, change it when you register a user.*/
 $salted_hash = hash('sha256',$password.$site_salt.$p_salt);
 if($p==$salted_hash){
  $_SESSION['user']=$id;
  header("Location:admin.php");
 }else{
  echo "<h2>Username/Password is Incorrect.</h2>";
 }
}
?>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Powered by: <a href="http://jrico.es">JRico.es</a></div>
</div>
</body>
</html>