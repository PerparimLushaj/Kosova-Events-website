


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kosova Events | Miresevini - </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
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
echo " mijë eksponate të profileve të ndryshme prej pavijonit të arkeologjisë, teknologjisë, historisë, natyrës, ento-kulturës, folklorit, trashëgimisë etj. Aktualisht, muzeu është duke u angazhuar në rikthimin e 1200 objekteve/artefakteve të rëndësishme për Trashëgiminë kulturore të Kosovës, të marra nga Beogradi gjatë vitit 1998.";
?>

            </div>

        </section>
        <section class="info1" >

            <div class="info_pic2">

            </div>
            <div class="info_details1">
            <h3>
				Teatri Kombëtar!
				 
			</h3>
                <p>Teatri i Kosovës në Prishtinë nga populli i njohur si "Teatri Kombëtar i Kosovës".Shfaqjet me te suksesshme:<br>
				<?php
$ngjarjet = array("Sonte do të luajmë pa tekst", "La vita, o la si vive o la si scrive", "Mallkimi i fukarenjve","Zbutja e kryeneçes");
asort($ngjarjet);
echo implode(" <br>",$ngjarjet );
?><br>Aktoret me te mire:
		<?php
$aktoret = array("Adem Mikullovci", "Ema Ndoja", "Ilir Rexhepi","Hadi Shehu");
rsort($aktoret);
echo implode(" <br>",$aktoret );
?></p>
				
            </div>
        </section>

           <footer>
		<?php 
$Str1 = "Copyright © KosEvents - Te gjitha te drejtat e rezervuar";


function VariablatGlobale() {
    $GLOBALS['z'] = $GLOBALS['Str1'];
}

VariablatGlobale();
echo $z;


            
			?>
        </footer>


    </body>
</html>