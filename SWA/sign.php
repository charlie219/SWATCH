<?php
session_id("deb");
session_start();
$OTP=$_SESSION['OTP'];
echo("<script> alert('ENTER THE OTP')</script>");
echo("<h1><center>NAME :- ".$_SESSION['NAME']."<br><br>");
echo("<div>
	<input type='text' name='OTP' value='<?php echo $otp;?>'>
	</div>");
echo($otp);


?>