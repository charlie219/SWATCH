

<?php

echo "<title>SWATCH BHARAT | OTP </title>
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
session_id("deb");
session_start();
$otp=$_SESSION['OTP'];
$con=mysqli_connect("localhost","root","","swatch");
echo($otp);
$OTP=$_POST['otp'];
if($OTP==$otp){
	$nam=$_SESSION['NAME'];
	$email=$_SESSION['EMAIL'];
	$pass=$_SESSION['PASSWORD'];
	$con->query("INSERT INTO info SET NAME='$nam',EMAIL='$email',PASSWORD='$pass'");
		echo("<center><h1>
			Account Created......<br>welcome $nam<br><br><br>
			<a href='index.html'> CLICK HERE TO LOGIN</a></h1></center>");
}
else{
	echo("<center><h2>Wrong Password
		<br>TRY AGAIN......
		<br><a href='index.html'> CLICK HERE TO LOGIN</a></h1></center>");
}
?>

<!DOCTYPE html>
<html lang="en">

<body>

<form action="otp2.php" method="post">
OTP <input type="text" name="otp"><br>
<input type="submit">
</form>

</body>
</html>