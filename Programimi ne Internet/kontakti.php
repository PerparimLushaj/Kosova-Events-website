<html lang="en">
    <head>
        <title>Kosova Events | Kontakti</title>
		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/css1.css">
        <link rel="stylesheet" type="text/css" href="css/css2.css">
        <link rel="stylesheet" type="text/css" href="css/css3.css">
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
            <section class="features" id="features-bg">
                <h2 class="lista transformuese">Na kontaktoni permes formes se me poshtme</h2><br>
              
			   
	<center><form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 <br>
<tr>
 
 <td valign="top">
  <br>
  <label for="first_name">Emri*</label>
 
 </td>
 
 <td valign="top">
 <br>
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
  <br>
  <label for="last_name">Mbiemri*</label>
 
 </td>
 
 <td valign="top">
  <br>
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
  <br>
  <label for="email">Email-i*</label>
 
 </td>
 
 <td valign="top">
  <br>
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
  <br>
  <label for="telephone">Numri Telefonit</label>
 
 </td>
 
 <td valign="top">
  <br>
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
  <br>
  <label for="comments">Komenti*</label>
 
 </td>
 
 <td valign="top">
  <br>
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="send_form_email.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
<br>
<br>

     <?php
			$filename="C:/xampp/htdocs/FINAL/shpjegimi.txt";
			$file=fopen($filename,"r");
			if($file==false)
			{
			echo("Teksti nuk eshte i disponushem");
			exit();
			}
			$filesize=filesize($filename);
			$filetext=fread($file,$filesize);
			
			fclose($file);
			
			
			echo ("<pre>$filetext</pre>");
			?>

    </body>
</html>