<?php
session_id("deb");
session_start();
$x=0;
echo "<title>SWATCH BHARAT | DASHBORD </title>
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
	echo("<!-- Sidebar/menu -->
<nav class='w3-sidebar w3-collapse w3-white w3-animate-left' style='z-index:3;width:300px;' id='mySidebar'><br>
  <div class='w3-container'>
    <a href='#' onclick='w3_close()' class='w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey' title='close menu'>
      <i class='fa fa-remove'></i>
    </a>
    <center><img src='photos/avatar.png' style='width:100%;' class='w3-circle w3-margin-top'></center>
    <h2><b>My Account</b></h2>
    <h3 class='w3-text-grey'>@fubble.tk</h3>
  </div>
  <div class='w3-bar-block'><h5>
    <a href='#about' onclick='w3_close()' class='w3-bar-item w3-button w3-padding'><i class='fa fa-user fa-fw w3-margin-right'></i>".$_SESSION['NAME']."</a> 
    <a href='#contact' onclick='w3_close()' class='w3-bar-item w3-button w3-padding'><i class='fa fa-envelope fa-fw w3-margin-right'></i>".$_SESSION['EMAIL']."</a></h5>
  </div>
  <div class='w3-panel w3-large '><h3>
    <i class='fa fa-facebook-official w3-hover-opacity'></i>
    <i class='fa fa-instagram w3-hover-opacity'></i>
    <i class='fa fa-snapchat w3-hover-opacity'></i>
    <i class='fa fa-pinterest-p w3-hover-opacity'></i>
    <i class='fa fa-twitter w3-hover-opacity'></i>
    <i class='fa fa-linkedin w3-hover-opacity'></i></h3>
  </div><hr>
  
  <div class='w3-container w3-border-top w3-padding-16 w3-light-grey'>
      	<form action=t.php method='post'><input type='submit' value='LOGOUT' class='w3-button w3-black'></form>
      </div>

</nav>
");
echo "<div style='color:w3-black' class='body-rl'><U><center><h1><b>SWATCH BHARAT ABHIYAN</b></h1>
         <h2>PUBLIC  INITIATIVE</h2>
    <img src='photos/LOGO.jpg' height='30%' width='30%'>
    <h3>NEW INDIA , CLEAN INDIA</h3></U>
  </center></div>";


echo("<H3><div style='color:w3-black' class='body-rl'><center>
      <form action='upload.php' method= 'post'>
  Select a file: <input type='file' name='myFile' placeholder='IMAGE'><br><br>
  <input type='submit' class='w3-button w3-black'>
</form>

  ");
  echo("<br><br><br><br></center>
  <!-- Container (Contact Section) -->
<div class='w3-content w3-container w3-padding-64 body-r' id='contact '>
  <h3 class='w3-center' style='color:black'>WHERE TO FIND US</h3>
  <h4 class='w3-center' style='color:w3-black'><em>I'd love your feedback!</em></h4>

  <div class='w3-row w3-padding-32 w3-section'>
    <div class='w3-col m4 w3-container'>
      <img src='photos/nsec.jpg' class='w3-image w3-round' style='width:100%'>
    </div><b>
    <div class='w3-col m8 w3-panel'>
      <div class='w3-large w3-margin-bottom'><h4 style='color:black'><b>
        <i class='fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Netaji Subhash Engineering college, Garia,Kolkata , INDIA<br>
        <i class='fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Phone: +91 7004000074<br>
        <i class='fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right'></i>Email:askme.fubble1199@gmail.com<br></h4></b>
      </div>
      <h4 style='color: black'>Swing by for a cup of <i class='fa fa-coffee'></i>, or leave me a note:</h4></b>
      <form action='contact.php' method='post'>
      <div class='w3-row-padding w3-input' style='margin:0 -16px 8px -16px'>
          <div class='w3-half'>
            <input class='w3-input w3-border' type='text' placeholder='Name' required name='Name'>
          </div>
          <div class='w3-half'>
            <input class='w3-input w3-border' type='text' placeholder='Email' required name='Email'>
          </div>
        </div>
       
        <input class='w3-input w3-border' type='text' placeholder='Message' required name='Message'>
        <button class='w3-button w3-black w3-right w3-section' type='submit'>
          <i class='fa fa-paper-plane'></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
");
?>