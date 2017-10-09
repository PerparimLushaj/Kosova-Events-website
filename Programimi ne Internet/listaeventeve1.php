<?php 
    $username = "root";
    $hostname = "localhost";
    $password = "1234";
    $databaseName = "phpdatabase";
    $conn = mysqli_connect($hostname, $username, $password, $databaseName);
    if ($conn) {
        $sql = "SELECT emringjarjes,pershkrimiNgjarjes,dataNgjarjes,dataRegjistrimit,Vendi FROM ngjarjet order by dataRegjistrimit DESC";
        $result =  mysqli_query($conn,$sql);
		$storeArray=array();
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
		  array_push($storeArray,$row['emringjarjes'],$row['pershkrimiNgjarjes'],$row['Vendi'],$row['dataNgjarjes']);
             /*$id =  $row['emringjarjes'];
             $user_lastname =  $row['pershkrimiNgjarjes'];
             $user_firstname = $row['dataNgjarjes'];*/
            
          }
		 // print_r($storeArray[0]);
		 // print_r($storeArray[1]);
		 // print_r($storeArray[2]);
        } else 
		{
          echo "Nuk ka asnje ngjarje te regjistruar .. !";
        }
    } else {
      echo "I pamundur lidhja me databaz .. !";
    }
  ?>
<head>
        <title>Kosova Events | Ngjarjet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/carouFredSel.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/3dcarousel.js"></script>

        <!--$(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
             });
         });-->



        <script type="text/javascript">
            $(document).ready(function () {
                $('#carousel').carousel3d();
            });
        </script>
        <style type="text/css">
            #perspective {
                margin: 0 auto;
                margin-top: 0px;
                width: 190px;
                height: 200px;
                position: relative;
                -webkit-perspective: 100px;
                perspective: 2100px;
            }

            #carousel {
                width: 330%;
                height: 350%;
                position: absolute;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -webkit-transform: rotateY(0deg) translateZ(-288px);
            }

            #carousel figure {
                display: block;
                position: absolute;
                background: #2ecc71;
                width: 540px;
                height: 190px;
                opacity: 1.6;
                margin-top: 60px;
                color: #C00;
                cursor: pointer;
                -webkit-transition: opacity 1s, -webkit-transform 1s;
                -moz-transition: opacity 1s, -moz-transform 1s;
                -o-transition: opacity 1s, -o-transform 1s;
                transition: opacity 1s, transform 1s;
            }
            #grad1 {
                height: 200px;
                background: -webkit-linear-gradient(#3b3b3b, green); 
                background: -o-linear-gradient(#3b3b3b, green);
                background: -moz-linear-gradient(#3b3b3b, green);
                background: -moz-gradient(#3b3b3b, green); 
                margin-top: -101px;
            }
        </style>

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
						<li><a href="regjistrohu.php">Regjistrohu</a></li>

                    </ul>
                </nav>

                <ul class="social">
                    <li><a class="fb" href="login2.php"></a></li>
                    
                </ul>
            </div>
        </header>
            <section class="features">
                <h2 class="lista">Lista e eventeve qe ndodhen ne Prishtine</h2>

                <div class="wrapper">
				
				
                    <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[0]"; ?></h3>
                            <p><?php echo "$storeArray[1]"; ?></p>
                            <p class="vendi">Vendi:<?php echo "$storeArray[2]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[3]"; ?></p>

                        </div>
                    </div>
				
                     <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[4]"; ?></h3>
                            <p><?php echo "$storeArray[5]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[6]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[7]"; ?></p>

                        </div>
                    </div>
                    <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[8]"; ?></h3>
                            <p><?php echo "$storeArray[9]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[10]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[11]"; ?></p>

                        </div>
                    </div>
                    <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[12]"; ?></h3>
                            <p><?php echo "$storeArray[12]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[14]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[15]"; ?></p>

                        </div>
                    </div>
                    <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[16]"; ?></h3>
                            <p><?php echo "$storeArray[17]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[18]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[19]"; ?></p>

                        </div>
                    </div>
                    <div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[20]"; ?></h3>
                            <p><?php echo "$storeArray[21]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[22]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[23]"; ?></p>

                        </div>
                    </div>
					<div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[24]"; ?></h3>
                            <p><?php echo "$storeArray[25]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[26]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[27]"; ?></p>

                        </div>
                    </div>
					<div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[28]"; ?></h3>
                            <p><?php echo "$storeArray[29]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[30]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[31]"; ?></p>

                        </div>
                    </div>
					<div class="feature">
                        <div class="ficon">
                            <img src="img/icona3.png" alt="">
                        </div>
						
                        <div class="details_exp">
                            <h3><?php echo "$storeArray[32]"; ?></h3>
                            <p><?php echo "$storeArray[33]"; ?></p>
                            <p class="vendi">Vendi: <?php echo "$storeArray[34]"; ?></p>
                            <p class="data"> Data: <?php echo "$storeArray[35]"; ?></p>

                        </div>
                    </div>
                </div>
            </section>
            <section class="info">

                <div id="perspective" style="left: -199px; top: -53px">
                    <div id="carousel">
                        <figure><img src="img/gjakova.jpg" width="540" height="190"></figure>
                        <figure><img src="img/prishtina1.jpg" width="540" height="190"></figure>
                        <figure><img src="img/prishtina.jpg" width="540" height="190"></figure>
                        <figure><img src="img/gjakova.jpg" width="540" height="190"></figure>
                        <figure><img src="img/prishtina1.jpg" width="540" height="190"></figure>
                        <figure><img src="img/prishtina.jpg" width="540" height="190"></figure>
                    </div>
                </div>
            </section>
            <footer>
                <div id="grad1">Copyright © KosEvents - Te gjitha te drejtat e rezervuar</div>
            </footer>
    </body>
</html>