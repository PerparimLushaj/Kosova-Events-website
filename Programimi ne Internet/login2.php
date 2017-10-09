<?php
session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: login2.php");
}

    if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
        
        $sql = "SELECT IdMember, perdoruesi, fjalekalimi FROM anetaret where perdoruesi='$username'";
        $sqlA= "Select Id, AdminUsername, AdminPass from administrimi where AdminUsername='$username'";
		
	
        $query = mysqli_query($dbCon, $sql);
        $queryA = mysqli_query($dbCon, $sqlA);
		
         if ($queryA) 
		 {
		 {
		 {
            $row = mysqli_fetch_row($queryA); 
            $Id = $row[0];
            $AdminName = $row[1];
            $AdminPass = $row[2];
           
         }
		 if ($username == $AdminName && $password == $AdminPass) 
		 {
            $_SESSION['userName'] = $AdminUsername;
            $_SESSION['user'] = $Id;
            header('Location: index_Admin.php');
		}
		}
		}
		else
			{
			
            echo "Incorrect Password/or Username";
			}
		
		
		 
		 if ($query)
		 
		 {
		 {
		    $row = mysqli_fetch_row($query); 
            $userId = $row[0];
            $Username = $row[1];
            $UserPass = $row[2];
		 }
        if ($username == $Username && $password == $UserPass) 
		{
            $_SESSION['user'] = $userId;
            $_SESSION['userName'] = $Username;
            header('Location: index_anetaret.php');
			
        } 
		}
		
		else 
		{
            echo "Incorrect Password/or Username";
        }
		}
    
?>

<html lang="en-US">
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
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="styleAdmin.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$("#login").click(function(){
			
			var action = $("#lg-form").attr('action');
			var form_data = {
				username: $("#username").val(),
				password: $("#password").val(),
				is_ajax: 1
			};
			
			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					if(response == "success")
						$("#lg-form").slideUp('slow', function(){
							$("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
						});
					else
						$("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
				}	
			});
			return false;
		});
	});
	</script>
</head>
<body >
	<div class="lg-container">
		<h1>Admin Area</h1>
		<form id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="name" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
           <input id="button" type="submit" name="submit" value="Log-In"> 
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>