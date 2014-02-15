<? session_start();
include_once("functions/config.php");
include_once("functions/functions.php");


$findid = mysql_query("SELECT id FROM intrebaritest ORDER BY id DESC");
$myrow = mysql_fetch_array($findid);
$id = $myrow["id"];

$qsql = "UPDATE intrebaritest ";
$qresult = mysql_query($qsql);

?>