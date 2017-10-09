<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "rezultati_votimit.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<?php
session_start();
include_once 'connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: login2.php");
}
$res=mysqli_query($dbCon,"SELECT * FROM anetaret WHERE IdMember=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

?>
<br><br><br>
<h2>Rezultati:</h2>
<table>
<tr>
<td>Po:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>Jo:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
<h2>Faleminderit qe moret pjese ne votimi:    <span style="color:salmon"><?php echo $userRow['perdoruesi']; ?> </h2></span>
</td>
</tr>
</table>
