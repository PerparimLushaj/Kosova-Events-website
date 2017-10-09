
<?php
			class Anetari
                {
                    protected $emri;
                    public $mbiemri;
                    private $mosha = array();
                    public $gjinia;
                    public $email;
                    public $useri;
                    
                    public function __set($msh,$vl)         //pa kete nuk mund tju qasemi parametrave privat
                    {
                        $this->mosha[$msh] = $vl;
                    }
                    public function __get($msh)
                    {
                        return $this->mosha[$msh];
                    }
                }
                
                class TeDhenat extends Anetari
                {
                    public $fakulteti;
                    public $drejtimi;
                    public $viti;
					public $statuti;
                    
                    public function __construct()
                    {
                        $this->fakulteti = "Fakulteti i Inxhinierise Elektrike dhe Kompjuterike";
                        $this->drejtimi= "Kompjuterike";
                        $this->viti= "Dyte";
						$this->statuti="Student";
                    }
                }
                
                $Anetari1 = new Anetari;
                $Anetari1->emri = "Muharrem";
                $Anetari1->mbiemri = "Rexhepi";
                $Anetari1->gjinia = "Mashkull";
                $Anetari1->email = "mbukolla@live.com";
                $Anetari1->mosha = 21; //-    ???????????????? Nese deshirojme te shfaqim moshen e anetarit
                
                $Anetari2 = new Anetari;
                $Anetari2->emri = "Përparim";
                $Anetari2->mbiemri = "Lushaj";
                $Anetari2->mosha = 22;
                $Anetari2->gjinia = "Mashkull";
                $Anetari2->email = "perparimlushaj@gmail.com";
                
                $Anetari3 = new Anetari;
                $Anetari3->emri = "Shaban";
                $Anetari3->mbiemri = "Shabani";
                $Anetari3->mosha = 22;
                $Anetari3->gjinia = "Mashkull";
                $Anetari3->email = "shabann.shabani@gmail.com";
                
                $Anetari4 = new Anetari;
                $Anetari4->emri = "Veton";
                $Anetari4->mbiemri = "Sejdaj";
                $Anetari4->mosha = 21;
                $Anetari4->gjinia = "Mashkull";
                $Anetari4->email = "vetonsejdaj@gmail.com";
                
                $Anetari5 = new Anetari;
                $Anetari5->emri = "Arianit";
                $Anetari5->mbiemri = "Ajvazi";
                $Anetari5->mosha = 21;
                $Anetari5->gjinia = "Mashkull";
                $Anetari5->email = "arjanitajvazi@gmail.com";
                
                $teDhenat = new TeDhenat;
				?>
				<center><p><?php
				
				session_start();
$counter_name = "counter.txt";
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
echo "Ju jeni vizitori numer $counterVal ne kete website";
?>   </p>
<?php
if(isset ($_POST['submitted'])){
	$newbgColor=$_POST['bgColor'];
	
	setcookie("bgColor",$newbgColor,time()+3600);
	
}
if(!isset($_COOKIE['bgColor']))
{
	$bgColor="Black";
	
	
}
else
{
	$bgColor = $_COOKIE['bgColor'];

}
?>        

<html>
<body bgcolor="<?php echo $bgColor ?>"> 
<head>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safarif
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","votimi.php?vote="+int,true);
  xmlhttp.send();
}
</script>
 </head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/css3.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css11.css">
<script src="scripts/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.0.tabs.min.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function(){$("#tabcontainer").tabs({event:"click"})})</script>
<script src="scripts/jquery-ui-1.10.0.tabs.min.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function(){$("#tabcontainer").tabs({event:"click"})})</script>
<link rel="stylesheet" type="text/css" href="about-us.css">
<link rel="stylesheet" type="text/css" href="framework.css">

<div class="wrapper row2">
  <div id="container" class="clear">
   
    <div id="about-us" class="clear">
      <!-- ####################################################################################################### -->
      <section id="tabcontainer" class="clear">
        <ul id="tabnav">
          
          <li><a href="#tabs-2">Administratoret e Faqes</a></li>
        
        </ul>
        <!-- Tab Content -->
       
        <!-- ## TAB 2 ## -->
        <header>
            <div class="wrapper">
                <a href="#" class="menu_icon" id="menu_icon"></a>
                <nav id="nav_menu">
                    <ul>
                        <li><a href="index_anetaret.php">Ballina</a></li>
                        <li><a href="historiku1.php">Historiku</a></li>
                        <li><a href="kontakti1.php">Kontakt</a></li>
						<li><a href="porosit.php">Porosit</a></li>'
					     <li><a href="About_us.php">About Us</a></li>
                    </ul>
                </nav>

                <ul class="social">
                    <li><span style="color:white">Miresevini - </span> <span style="color:salmon"> </span> <a class="fb" href="logout.php"></a></li>
                    
                </ul>
            </div>
        </header>
       
        <!-- / Tab Content -->
      </section>
      <!-- ####################################################################################################### -->
      <section id="team">
      
        <ul class="clear">
          <li class="one_third first">
            <figure><img src="imagess/demo/team-member.gif" alt="">
              <figcaption>
                <div class="fl_left">
                  <p class="team_name">Muharrem Rexhepi</p>
                  <p class="team_title">Statuti:<?php echo $teDhenat->statuti;?> <br</p>
                  <p class="team_description">
									  Emri: <?php echo $Anetari1->emri;?> <br/>
                                      Mbiemri: <?php echo $Anetari1->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari1->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari1->gjinia;?> <br/>
                                      Email: <?php echo $Anetari1->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/></p>
                </div>
               
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="imagess/demo/team-member.gif" alt="">
              <figcaption>
                <div class="fl_left">
                  <p class="team_name">Përparim Lushaj</p>
                  <p class="team_title">Statuti:<?php echo $teDhenat->statuti;?> <br/></p>
                  <p class="team_description">
				  
									  Emri: <?php 	echo $Anetari2->emri;?> <br/>
								      Mbiemri: <?php echo $Anetari2->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari2->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari2->gjinia;?> <br/>
                                      Email: <?php echo $Anetari2->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/></p>
                </div>
                
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="imagess/demo/team-member.gif" alt="">
              <figcaption>
                <div class="fl_left">
                  <p class="team_name">Shaban Shabani</p>
                  <p class="team_title">Statuti:<?php echo $teDhenat->statuti;?> <br</p>
                  <p class="team_description">
									Emri: <?php 	echo $Anetari3->emri;?> <br/>	
                                      Mbiemri: <?php echo $Anetari3->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari3->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari3->gjinia;?> <br/>
                                      Email: <?php echo $Anetari3->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/></p>
                </div>
              
              </figcaption>
            </figure>
          </li>
		  <li class="one_third first">
            <figure><img src="imagess/demo/team-member.gif" alt="">
              <figcaption>
                <div class="fl_left">
                  <p class="team_name">Veton Sejdaj</p>
                  <p class="team_title">Statuti:<?php echo $teDhenat->statuti;?> <br</p>
                  <p class="team_description">
				  
									Emri: <?php echo $Anetari4->emri;?> <br/>
                                      Mbiemri: <?php echo $Anetari4->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari4->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari4->gjinia;?> <br/>
                                      Email: <?php echo $Anetari4->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/></p>
                </div>
               
              </figcaption>
            </figure>
          </li>
		  <li class="one_third first">
            <figure><img src="imagess/demo/team-member.gif" alt="">
              <figcaption>
                <div class="fl_left">
                  <p class="team_name">Arianit Ajvazi</p>
                  <p class="team_title">Statuti:<?php echo $teDhenat->statuti;?> <br</p>
                  <p class="team_description">
										Emri: <?php echo $Anetari5->emri;?> <br/>
                                      Mbiemri: <?php echo $Anetari5->mbiemri;?> <br/>
                                      Mosha: <?php echo $Anetari5->mosha;?> <br/>
                                      Gjinia: <?php echo $Anetari5->gjinia;?> <br/>
                                      Email: <?php echo $Anetari5->email;?> <br/>
                                      Fakulteti: <?php echo $teDhenat->fakulteti;?> <br/>
                                      Drejtimi: <?php echo $teDhenat->drejtimi;?> <br/>
                                      Viti: <?php echo $teDhenat->viti;?> <br/></p>
                </div>
               
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>

      <section id="client_logos">
        
        
      </section>
	  <br>
	  <div class="one_third first">
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST"> 
<p><b>Ndrysho ngjyren e prapavijes :</b></p>
<select name=bgColor>
<option value ="Red">E kuqe</option>
<option value ="White" selected>E bardhe</option>
<option value ="Blue">E kalter</option>
<option value ="Yellow">E verdhe</option>
<option value ="Black">E zeze</option>
<option value ="Brown">Kafe</option>
<option value ="Green">E Gjelber</option>
</select>
<input type ="hidden" name="submitted" value="true"></br>
<input type="submit" value="Ngjyra paraprake">
</form>
<div id="poll">
<br><br><br>
                            <h3>A ju ka pelqyer Web Faqja?</h3>
                            <form>
                                Po:
                            <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                            <br>Jo:
                            <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                            </form>
                            </div>
</div>

</div>

</body>
</html>