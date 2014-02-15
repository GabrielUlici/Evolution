<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<center>
<?php

include_once("functions/config.php");
include_once("functions/functions.php");

mysql_query("DELETE FROM intrebaritest WHERE id=$id");
echo "<P>&nbsp;</P>";

echo "<B>Admin area - Sterge o intrebari<br><br></B>";

echo "Intrebare sterarsa<br><br>";
echo "<a href='editquizlist.php'>Inapoi la lista de intrebari</a>";
?>
</center>
</HTML>