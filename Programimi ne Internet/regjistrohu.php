<?php
$connection = mysqli_connect("localhost", "root", "1234", "phpdatabase"); // Establishing Connection with Server
if(isset($_POST['submit'])){ 
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$perdoruesi = $_POST['perdoruesi'];
$fjalekalimi = $_POST['fjalekalimi'];
$konfirmofjalekalimi = $_POST['kfjalekalimi'];

if($emri !=''&&$mbiemri !=''&&$email!=''&& $perdoruesi!='' && $fjalekalimi!='' && $konfirmofjalekalimi!='' && $fjalekalimi==$konfirmofjalekalimi){
$query = mysqli_query($connection, "INSERT INTO anetaret(Emri, Mbiemri,Email,perdoruesi, fjalekalimi,konfirmofjalekalimin) Values ('$emri', '$mbiemri','$email','$perdoruesi','$fjalekalimi','$konfirmofjalekalimi')");

echo "<script type='text/javascript'>alert('Regjistrimi u kry me sukses...!!');</script>";
}
else
{

echo "<script type='text/javascript'>alert('Regjistrimi nuk eshte kryer me sukses ....!!');</script>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
  <header>
            <div class="wrapper">
                <a href="#" class="menu_icon" id="menu_icon"></a>
                <nav id="nav_menu">
                    <ul>
                        <li><a href="index.php">Ballina</a></li>
                        <li><a href="historiku.php">Historiku</a></li>
                        <li><a href="kontakti.php">Kontakt</a></li>
						<li><a href="regjistrohu.php">Regjistrohu</a></li>

                    </ul>
                </nav>

                <ul class="social">
                    <li><a class="fb" href="login2.php"></a></li>
                    
                </ul>
            </div>
        </header>
	<head>	
		<title>Regjistrohu: Kosova Events</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	<div class="login-head">
					    <h1>Regjistrohu</h1>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Regjistrohu</h2>
						 	 </div>
						  	<form  id="lg-form" name="lg-form" method="post">
			
		<center>	<div><br>
			<center>	
		<center>		<input type="text" name="emri" id="emri" placeholder="Emri"/>
			</div>
			
			<div><br>
		<center>		
		<center>		<input type="text"  name="mbiemri" id="mbiemri" placeholder="Mbiemri"  />
			</div>
			<div><br>
		<center>		
		<center>		<input type="text"  name="email" id="email" placeholder="email"  />
			</div>
			<div><br>
		<center>		
		<center>		<input type="text"  name="perdoruesi" id="perdoruesi" placeholder="perdoruesi"  />
			</div>
			<div><br>
		<center>		
		<center>		<input type="password"  name="fjalekalimi" id="fjalekalimi" placeholder="fjalekalimi"  />
			</div>
			<div><br>
		<center>		
		<center>		<input type="password"  name="kfjalekalimi" id="kfjalekalimi" placeholder="konfirmo fjalekalimi"  />
			</div>
			<div>				
		<center>		<button type="submit" name = "submit"  id="regjistro">Regjistro</button>
			</div>
			
		</form>
					</div>
					
			</div>
			
			  </div>
	</body>
</html>


