<?php
//session_start();
//include_once 'connection.php';
//
//if(!isset($_SESSION['user']))
//{
// header("Location: login2.php");
//}
//$res=mysqli_query($dbCon,"SELECT * FROM anetaret WHERE IdMember=".$_SESSION['user']);
//$userRow=mysqli_fetch_array($res);
//
//?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kosova Events | Miresevini - <?php echo $userRow['perdoruesi']; ?> </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css11.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/carouFredSel.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#flip").click(function () {
                    $("#panel").slideToggle("slow");
                });
            });
            var imagecount = 1;
            var total = 11;

            function slide(x) {
                var Image = document.getElementById('img');
                imagecount = imagecount + x;
                if (imagecount > total) {
                    imagecount = 1;
                }
                if (imagecount < 1) {
                    imagecount = total;
                }
                Image.src = "img/foto/img" + imagecount + ".jpg";
            }
            window.setInterval(function slideA() {
                var Image = document.getElementById('img');
                imagecount = imagecount + 1;
                if (imagecount > total) {
                    imagecount = 1;
                }
                if (imagecount < 1) {
                    imagecount = total;
                }
                Image.src = "img/foto/img" + imagecount + ".jpg";
            }, 3000);
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
                    <li><span style="color:white">Miresevini </span> <span style="color:salmon"> </span> <a class="fb" href="logout.php"></a></li>
                    
                </ul>
            </div>
        </header>

        <section class="billboardHis">
            <div class="wrapper">
                <div class="caption">
                    <p>"Historia e botës është vetëm biografia e njerëzve të mëdhenj. "</p>
                    <p>-Raseli-</p>
                </div>
            </div>
        </section>



        <section class="info1" >

            <div class="info_pic1">

            </div>
             <div class="info_details1"> 
		<h3>Muzeu i Republikes se Kosoves</h3>
                <p>Muzeu i Kosovës është themeluar në 
				
		
		
				<?php 
				//Përcjellja përmes Referencës
$a=1947;
function fo(&$var){
$var++;

}
fo($a);
	
echo " vitin ".$a;

function foo(&$var){
	$var=$var+12;
}

foo($a);
	
echo "  , ndërkaq ndërtesa me arkitekturë Austro-hungareze daton që nga  ".$a;
//funksioni unset()  
unset($a);
$a=1200;
echo ". Ajo ka për qëllim ruajtjen, mbrojtjen dhe prezantimin e Trashëgimisë Kulturore të Kosovës. Muzeu i Kosovës përfshin një koleksion, me më shumë se " .$a ; 
echo " mijë eksponate të profileve të ndryshme prej pavijonit të arkeologjisë, teknologjisë, historisë, natyrës, ento-kulturës, folklorit, trashëgimisë etj. Aktualisht, muzeu është duke u angazhuar në rikthimin e 1200 objekteve/artefakteve të rëndësishme për Trashëgiminë kulturore të Kosovës, të marra nga Beogradi gjatë vitit 1998. Muzeu i Kosovës gjendet në rrugën Nazim Gafurri....";
?>
            </div>

        </section>
        <section class="info1" >

            <div class="info_pic2">

            </div>
            <div class="info_details1">
                <h3>Teatri Kombëtar </h3>
                <p>Teatri i Kosovës në Prishtinë nga populli i njohur si "Teatri Kombëtar i Kosovës" dhe sipas Søren Jessen-Petersen Përfaqësues Special i Sekretarit të Përgjithshëm ky teatër nuk bënë të thirret Teatër Kombëtarë po Teatri Kosoavarë.<br>Shfaqjet me te suksesshme nder vite kane qene:<br><?php
$ngjarjet = array("Sonte do të luajmë pa tekst", "La vita, o la si vive o la si scrive", "Mallkimi i fukarenjve","Zbutja e kryeneçes");
asort($ngjarjet);
echo implode(" <br>",$ngjarjet);
?></p>
				
            </div>
        </section>
        <section class="info1" >

            <div class="info_pic2">

            </div>
            <div class="info_details1">
                <h3>Teatri Kombëtar </h3>
                <p>Teatri i Kosovës në Prishtinë nga populli i njohur si "Teatri Kombëtar i Kosovës" dhe sipas Søren Jessen-Petersen Përfaqësues Special i Sekretarit të Përgjithshëm ky teatër nuk bënë të thirret Teatër Kombëtarë po Teatri Kosoavarë.</p>
            </div>

        </section>
        <section class="slider">
            <div id="container">
                <img src="img/foto.jpg" alt="foto" id="img">
                <div id="left_holder"><img onClick="slide(-1)" class="left" src="img/arrow_left.png" alt="arrow"></div>
                <div id="right_holder"><img onClick="slide(1)" class="right" src="img/arrow_right.png" alt="arrow"></div>
            </div>
        </section>

        <footer>

            <p class="rights">Copyright © KosEvents - Te gjitha te drejtat e rezervuar</a></p>
        </footer>

    </body>
</html>