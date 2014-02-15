<? session_start();
include_once('functions/config.php');
include_once('functions/functions.php');

if ($_POST['submit'])
{

	$score = 0;
	$total = mysql_num_rows($display);
		while ($result = mysql_fetch_array($display)) 
		
		
		{
		
			$ras = $result["rascor"];
			$q = $result["s$id"];
			echo $score;
		if ($q == $ras) 
		{
		$score++; 
		}
	
	}
	
	echo "<p align=center><b>You scored $score out of $total</b></p>";
	echo "<p>";
	
	if   ($score == $total) {
	echo "Congratulations! You got every question right!";
	}
	elseif ($score/$total < 0.34) {
	echo "Oh dear. Not the best score, but don't worry, it's only a quiz.";
	}
	elseif ($score/$total > 0.67) {
	echo "Well done! You certainly know your stuff.";
	}
	else {
	echo "Not bad - but there were a few that caught you out!";
	}

echo "</p>";

echo "<p>Here are the answers:";

echo "<table border=0>";
$display = mysql_query("SELECT * FROM intrebaritest ORDER BY id");
while ($row = mysql_fetch_array($display)) {

$intrebari = $row["intrebari"];
$ras = $row["rascor"];
$q = $row["q"];

echo "<tr><td><br>$intrebari</td></tr>";

if ($$q == $ras) 
		{
		echo "<tr><td>&raquo;you answered ${$q}, which is correct</td></tr>";
		}
elseif ($$q == "") {
echo "<tr><td>&raquo;you didn't select an answer. The answer is $ras</td></tr>";
}
else {
echo "<tr><td>&raquo;you answered ${$q}. The answer is $ras</td></tr>";
}

}
echo "</table></p>";



}
?>