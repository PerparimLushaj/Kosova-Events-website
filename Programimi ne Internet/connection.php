<?php
$host = "localhost";
$user = "root";
$password = "1234";
$database = "phpdatabase";

try {
    $dbCon=mysqli_connect($host, $user, $password, $database); 
    //echo 'Connected to database';
} catch (mysqli_sql_exception $e) {
    echo $e->errorMessage();
}
	?>