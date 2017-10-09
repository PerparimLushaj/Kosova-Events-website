
<?php
session_start();
//include_once 'connection.php';
$connection = mysqli_connect("localhost", "root", "1234", "phpdatabase"); // Establishing Connection with Server

if(!isset($_SESSION['user']))
{
 header("Location: login2.php");
}
$res=mysqli_query($connection,"SELECT * FROM anetaret WHERE IdMember=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$nrFilmit = $_POST['nrIdentifikues'];
$qyteti = $_POST['qyteti'];
$gjinia =$_POST['gjinia'];
$nrBiletave= $_POST['nrBiletave'];
if($emri !=''&&$mbiemri !=''&&$email!='' ){
//Insert Query of SQL
$query = mysqli_query($connection,"INSERT INTO porosit(Emri, Mbiemri, Email,NrIdentifikues, Qyteti, Gjinia, NrBiletave) Values ('$emri','$mbiemri','$email','$nrFilmit','$qyteti','$gjinia','$nrBiletave')");

echo "<script type='text/javascript'>alert('Porosia u be me sukses...!!');</script>";
}
else{
echo($test);
}
}

?>








<!DOCTYPE html>




<html lang="en">
    <head>
        <title>Kosova Events | Ballina</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css11.css">
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
		<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

    </head>
    <body>

        <header>
            <div class="wrapper">
                <a href="#" class="menu_icon" id="menu_icon"></a>
                <nav id="nav_menu">
                    <ul>
                        <li><a href="index_anetaret.php">Ballina</a></li>
                        <li><a href="historiku1.php">Historiku</a></li>
                        <li><a href="kontakti1.php">Kontakt</a></li>
						<li><a href="porosit.php">Porosit</a></li>
                        
                    </ul>
                </nav>

                 <ul class="social">
					
                    <li><span style="color:white">Miresevini - </span> <span style="color:salmon"> <?php echo $userRow['perdoruesi']; ?></span> <a class="fb" href="logout.php"></a></li>
                    
                </ul>
            </div>
			
        </header>
		
<style>
table,th,td {
  
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
$(document).ready(function (){
    $("#hide").click(function (){
        $("table").hide();
    });

</script>
Shfaq Eventin dhe llojin </p>
<button type="button" onclick="loadDoc()">Vendi : Eventi : Lloji</button>
<br><br>

<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "Eventet.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Qyteti</th><th>Eventi</th><th>Lloji i Filmit</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}

</script>
<button id="demo">Hide</button>


<br><br><br><br><br><br><br>
		<nav>
		<center>	<div class="lg-container">
		<h1>Rezervo...</h1>
		<form  id="lg-form" name="lg-form" method="post">
			
		<center>	<div><br>
			<center>	<label for="emri">Emri</label>
		<center>		<input type="text" name="emri" id="emri" placeholder="emri"/>
			</div>
			
			<div><br>
		<center>		<label for="mbiemri">Mbiemri</label>
		<center>		<input type="text"  name="mbiemri" id="mbiemri" placeholder="mbiemri"  />
			</div>
<div><br>
			<center>	<label for="email">Email</label>
		<center>		<input type="text" name="email" id="email" placeholder="email"/>
			</div>
			<div><br>Eventi:<br><br>
		<center>		<label for="qyteti">Eventi:</label>
		<select name=nrIdentifikues>
<option value ="Captain America" selected>Captain America</option>
<option value ="Divergent" >Divergent</option>
<option value ="Prizren">Allegiant</option>
<option value ="Peje">Edie The Eagle</option>
<option value ="Mitrovice">Shok</option>
<option value ="Gjilan">Angry Birds</option>
</select>
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
			<center>	<label for="gjinia">Gjinia</label>
		<center>		<input type="text" name="gjinia" id="gjinia" placeholder="gjinia"/>
			</div>
			<div><br>
			<center>	<label for="nrBiletave">NrBiletave</label>
		<center>		<input type="text" name="nrBiletave" id="nrBiletave" placeholder="numri i biletave"/>
			</div>
			<div>				
		<center>		<button type="submit" name = "submit"  id="porosit">Porosit</button>
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

<nav>
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Selektoni nje Qytet per tju shfaqur eventet perkatese:</option>
  <option value="1">Gjakove</option>
  <option value="2">Prishtine</option>
  <option value="3">Gjilan</option>
  <option value="4">Peje</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Shfaqja e eventeve...</b></div>
</nav>

Modifiko Numrin e biletave:

    <footer>
       <br>
<br>
            <p class="rights"><a href="#"> Copyright © KosEvents - Te gjitha te drejtat e rezervuar</a></p>
        </footer>

    </body>
</html>