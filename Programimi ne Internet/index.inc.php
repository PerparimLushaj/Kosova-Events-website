<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kosova Events | Ballina</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
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

        <section class="billboard">
            <div class="wrapper">
                <div class="caption">
                    <p>"Kemi artin per te mos vdekur nga e verteta"</p>
                    <p>-Friedrich Nietzsche-</p>
                </div>
            </div>
        </section>

        <section class="features">

            <div class="wrapper">
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon2.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Prishtina</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Prishtines.</p>
                        <a href="listaeventeve.php">me shume<span>→</span></a>

                    </div>
                </div>
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon2.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Gjakova</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Gjakoves.</p>
                        <a href="#">me shume<span>→</span></a>
                    </div>
                </div>
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon2.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Prizreni</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Prizrenit.</p>
                        <a href="#">me shume<span>→</span></a>
                    </div>
                </div>
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon6.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Peja</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Pejes.</p>
                        <a href="#">me shume<span>→</span></a>
                    </div>
                </div>
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon6.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Mitrovica</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Mitrovices.</p>
                        <a href="#">me shume<span>→</span></a>
                    </div>
                </div>				
                <div class="feature">
                    <div class="ficon">
                        <img src="img/icon6.png" alt="">
                    </div>
                    <div class="details_exp">
                        <h3>Gjilan</h3>
                        <p>Ketu mund ti gjeni te gjitha informacionet rreth ngjarjeve qe do te ndodhin ne qytetin e Gjilanit.</p>
                        <a href="#">me shume<span>→</span></a>
                    </div>
                </div>
            </div>

        </section>

        <section class="info">

            <div class="info_pic">

            </div>
            <div class="info_details">
                <h3>Historiku kulturor i Republikes se Kosoves</h3>
                <p>Në botën e filmit, 28 dhjetori i vitit 1895 njihet si fillim i kinematografisë, meqë në këtë datë, për herë të parë, vëllezërit Lumier shfaqën programin dhe projeksionin e tyre të parë në Grand Cafe, në bulevardin Des Capucines, në Paris. Filmat e parë ishin të thjeshtë, xhirimet e ngjarjeve të përditshme...</p>
                <a href="historiku.php">me shume<span>→</span></a>

            </div>

        </section>


        <footer>
            <audio controls>
                <source src="2.ogg" type="audio/ogg">
                <source src="2.mp3" type="audio/mp3">
            </audio>
            <?php
			$filename="C:/xampp/htdocs/Final/copyright.txt";
			$file=fopen($filename,"r");
			if($file==false)
			{
			echo("Teksti nuk eshte i disponushem");
			exit();
			}
			$filesize=filesize($filename);
			$filetext=fread($file,$filesize);
			
			fclose($file);
			
			echo ("File size :	$filesize bytes");
			echo ("<pre>$filetext</pre>");
			?>

        </footer>

    </body>
</html>