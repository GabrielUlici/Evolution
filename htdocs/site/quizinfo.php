<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<body><center>

        <?php session_start();
        

include_once("functions/config.php");
include_once("functions/functions.php");

$result = mysql_query("SELECT * FROM intrebaritest ORDER BY id");

echo "<table>";
echo "<tr><h2><td>id:</td><td>Id test</td><td>Intrebare</td><td>opt1</td><td>opt2</td><td>opt3</td><td>opt3</td><td>raspuns</td></h2></tr>";

while ($row = mysql_fetch_array($result)) 
{
	
	$id = $row["id"]; 
	$intrebari = $row["intrebari"]; 
	$q = $row["q"];
	$ras1 = $row["raspuns1"];
	$ras2 = $row["raspuns2"];
	$ras3 = $row["raspuns3"];
	$ras4 = $row["raspuns4"];
	$ras = $row["rascor"];
	if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#efefef"; 
	$alternate = "1"; 
	} 
	echo "<tr bgcolor=$color><td>$id:</td><td>$q</td><td>$intrebari</td><td>$ras1</td><td>$ras2</td><td>$ras3</td><td>$ras4</td><td>$ras</td></tr>"; 
} 
echo "</table>";
?>
       
</center>
</body>
</HTML>