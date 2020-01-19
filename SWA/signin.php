<?php

$nam=$_POST["usrnam"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];

echo "<title>SWATCH BHARAT | SignIN </title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' href='photos/LOGO.jpg'>
<link rel='stylesheet' href='w3.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<body bgcolor=yellow>
<style type='text/css'>
	body {
		background-image: url('photos/black.jpeg');
		font-family: 'Roboto', sans-serif;
		
	}
	.body-r {
  margin-left: 300px;
  margin-right: 10px;
}
	.body-rl {
  margin-left: 200px;
  margin-right: 10px;
}
	
	::placeholder {
  color: black;
  opacity: 1;

:-ms-input-placeholder {
 color: black;
}

input[type=text] {
  background-color:black;
  color:red;
}

	</style>";

echo "<div style='color:w3-black'><U><center><h1><b>SWATCH BHARAT ABHIYAN</b></h1>
         <h2>PUBLIC  INITIATIVE</h2>
    <img src='photos/LOGO.jpg' height='30%' width='30%'>
    <h3>NEW INDIA , CLEAN INDIA</h3></U>
  </center></div>";

if($cpass==$pass){
	$con=mysqli_connect("localhost","root","","swatch");
	$n=$con->query("SELECT * FROM info WHERE EMAIL='$email' OR NAME='$nam'");
	$num=mysqli_num_rows($n);
	if($num>0)
		echo("<center><br><br><h2>EMAIL/USERNAME ALREADY EXISTS......</h2>");
	else{
		//$con->query("INSERT INTO signin SET NAME='$nam',EMAIL='$email',PASSWORD='$pass'");
		//$q=$con->query("SELECT * FROM signin WHERE EMAIL='$usr_nam' OR NAME='$usr_nam'");
		session_start();
		//$row=mysqli_fetch_assoc($q);
		$otp=rand(1000,9999);
		$_SESSION['OTP']=$otp;
		$_SESSION['NAME']=$nam;
		$_SESSION['EMAIL']=$email;
		$_SESSION['PASSWORD']=$pass;
		header("location:otp2.php");
	}
}
else
	echo("<h1><center>PASSWORD MISMACHED....<BR>
		TRY AGAIN....<BR><br><br>
		<a href='signIN.html'>CLICK HERE TO RETRY</a></center></h1>")

?>