<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','1234','phpdatabase');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"phpdatabase");
$sql="SELECT * FROM porosit WHERE idPorosis = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Emri i Eventit</th>
<th>Numri i Biletave</th>
<th>Vendi i Eventit</th>
<th>Emri </th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['NrIdentifikues'] . "</td>";
    echo "<td>" . $row['NrBiletave'] . "</td>";
    echo "<td>" . $row['Qyteti'] . "</td>";
    echo "<td>" . $row['Emri'] . "</td>";
    //echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>