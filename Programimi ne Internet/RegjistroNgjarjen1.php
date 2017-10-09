<?php

function customError($errno, $errstr,$error_file,$error_line) {
  echo "<b>Nuk mund te regjistrohet ngjarja mbushni te gjitha fushat e nevojshme...</b> [$errno] $errstr - $error_file:$error_line";
}

//set error handler
set_error_handler("customError");

//trigger error




$connection = mysqli_connect("localhost", "root", "1234", "phpdatabase"); // Establishing Connection with Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['emringjarjes'];
$pershkrimi = $_POST['pershkrimii'];
$data = date('Y-m-d',strtotime($_POST['dataN']));
$qyteti= $_POST['qyteti'];
$vendi=$_POST['vendi'];
if($name !=''&&$pershkrimi !=''&&$data!='' ){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO ngjarjet(emringjarjes, pershkrimingjarjes, dataNgjarjes,dataRegjistrimit,Qyteti,Vendi) Values ('$name', '$pershkrimi', '$data',now(),'$qyteti','$vendi')");

echo "<script type='text/javascript'>alert('Ngjarja u shtua me sukses...!!');</script>";
}
else{
echo($test);
}
}
mysqli_close($connection); // Closing Connection with Server
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kosova Events | Ballina</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
			<link rel="stylesheet" href="styleRe.css" />

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/carouFredSel.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script>
            $(document).ready(function () {
                $("#flip").click(function () {
                    $("#panel").slideToggle("slow");
                });
            });
        </script>
        <style> 
            #panel,#flip
            {
                padding:5px;
                text-align:center;	
                background-color:#e5eecc;
                border:solid 1px #c3c3c3;
            }
            #panel
            {
                padding:50px;
                display:none;
            }
        </style>

    </head>
    <body>

        <header>
            <div class="wrapper">
                <a href="#" class="menu_icon" id="menu_icon"></a>
                <nav id="nav_menu">
                    <ul>
                        <li><a href="index_Admin.php">Ballina</a></li>
                        <li><a href="historiku2.php">Historiku</a></li>
                        <li><a href="kontakti2.php">Kontakt</a></li>
												<li><a href="regjistroNgjarjen1.php">Regjistro Ngjarjen</a></li>

                    </ul>
                </nav>

                <ul class="social">
                    
                </ul>
            </div>
        </header>
<br><br><br><br><br><br><br>
		<nav>
		<center>	<div class="lg-container">
		<h1>Regjistro Ngjarje</h1>
		<form  id="lg-form" name="lg-form" method="post">
			
		<center>	<div><br>
			<center>	<label for="emriNgjarjes">Emri i Ngjarjes:</label>
		<center>		<input type="text" name="emringjarjes" id="emriNgjarjes" placeholder="Emri i Ngjarjes"/>
			</div>
			
			<div><br>
		<center>		<label for="pershkrimi">Pershkrimi i ngjarjes:</label>
		<center>		<input type="text"  name="pershkrimii" id="pershkrimi" placeholder="Pershkrimi i ngjarjes"  />
			</div>
			<div><br>
		<center><input type="date" name="dataN" id="data"  placeholder="Data e ngjarjes"/>
			</div>
			<div><br>Qyteti:<br><br>
		<center>		<label for="qyteti">Qyteti:</label>
		<select name=qyteti>
<option value ="Prishtine" selected>Prishtine</option>
<option value ="Gjakove" >Gjakove</option>
<option value ="Prizren">Prizren</option>
<option value ="Peje">Peje</option>
<option value ="Mitrovice">Mitrovice</option>
<option value ="Gjilan">Gjilan</option>
</select>
			</div>
			<div><br>
		<center>		<label for="vendi">Vendi:</label>
		<center>		<input type="text"  name="vendi" id="vendi" placeholder="Vendi"  />
			</div>
			
			
			<div>				
		<center>		<button type="submit" name = "submit"  id="regjistro">Regjistro</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
	</nav>
        

      
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
    <footer>
       <br>
<br>
            <p class="rights"><a href="#"> Copyright © KosEvents - Te gjitha te drejtat e rezervuar</a></p>
        </footer>

    </body>
</html>