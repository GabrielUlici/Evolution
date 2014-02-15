
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			
		<TD COLSPAN=5 align="center" valign="top" class="smallheader">		
		
		<h2>Test </h2>

<?php session_start();
include("functions/config.php");

$display = mysql_query("SELECT * FROM intrebaritest ORDER BY id");
	
if (!$submit) {


	echo "<form method=post action=$PHP_SELF>";
	echo "<table border=0>";

	while ($row = mysql_fetch_array($display)) {

	$id = $row["id"];
	$question = $row["intrebari"];
	$opt1 = $row["raspuns1"];
	$opt2 = $row["raspuns2"];
	$opt3 = $row["raspuns3"];
	$opt4 = $row["raspuns4"];
	$answer = $row["rascor"];

	echo "<tr><td colspan=3><br><b>$question</b></td></tr>";
	echo "<tr><td><input type=radio name=q$id value=\"$opt1\">$opt1 </td></tr>";
	echo "<tr><td><input type=radio name=q$id value=\"$opt2\">$opt2 </td></tr>";
	echo "<tr><td><input type=radio name=q$id value=\"$opt3\">$opt3 </td></tr>";
	echo "<tr><td><input type=radio name=q$id value=\"$opt4\">$opt4 </td></tr>";
	}

	echo "</table>";
	echo "<input type='submit' value='Sa vedem ce ai facut' name='submit'>";
	echo "</form>";

}

elseif ($submit) 

{

	$score = 0;
	$total = mysql_num_rows($display);
		while ($result = mysql_fetch_array($display)) 
		
		
		{
			$s=$_POST['q$id'];
			$answer = $result["rascor"];
			echo $s;
			if ($ == $answer)
		
		{
		
		$score++; 
		}
	
	}
	
	echo "<p align=center><b>Scorul tau este $score din $total</b></p>";
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

echo "<p>Uite aici sunt raspunsurile:";

echo "<table border=0>";
$display = mysql_query("SELECT * FROM intrebaritest ORDER BY id");
while ($row = mysql_fetch_array($display)) {

$question = $row["intrebari"];
$answer = $row["rascor"];
$q = $row["q"];

echo "<tr><td><br>$question</td></tr>";

if ($q == $answer) 
		{
		echo "<tr><td>&raquo;Raspunsul tau : ${$q}, care este corect.</td></tr>";
		}
elseif ($$q == "") {
echo "<tr><td>&raquo;Nu ai selectat nici un raspuns. Raspunsul este :  $answer.</td></tr>";
}
else {
echo "<tr><td>&raquo;Raspunsul tau: ${$q}. Raspunsul este : $answer.</td></tr>";
}

}
echo "</table></p>";



}

?>
</TD>
</TR>
