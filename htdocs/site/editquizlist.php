<?
include_once("functions/config.php");
include_once("functions/functions.php"); 
include_once("header.php");
include_once("menu.php");
?>

<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css">
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
		
		
		<h2>Editare test </h2>
		  
<br><br>
  <table width="300" border="0" cellspacing="0" cellpadding="0">

        <?php
include_once("functions/config.php");
include_once("functions/functions.php");

$result = mysql_query("SELECT id, intrebri FROM intrebaritest ORDER BY id");

echo "<table>";

while ($row = mysql_fetch_array($result)) 
{
	
	$id = $row["id"]; 
	$intre = $row["intrebari"]; 
	if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#efefef"; 
	$alternate = "1"; 
	} 
	echo "<tr bgcolor=$color><td>$id:</td><td>$intre</td><td>[ <a href='editquiz.php?id=$id'>edit</a> ]</td><td>[ <a href='deletequiz.php?id=$id' onClick=\"return confirm('Are you sure?')\">delete</a> ]</td></tr>"; 
} 
echo "</table>";
?>
        <br>
        <a href="deletequiz.php">Sterge intrebare</a>
        <br>
        <br>
        <a href="editquiz.php">Adaugare intrebare</a>
        <br>
	  	<br>
		<a href="quizinfo.php">Lista de intrebari</a>
  </table>
  <center>
</TD>
	</TR>
	
	<?
	include_once("footer.php");
?>