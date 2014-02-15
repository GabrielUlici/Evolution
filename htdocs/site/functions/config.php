<?
$user='root';
$host='localhost';
$pass='root';
$database='evolu';
$table = "shoutbox";
////////////////////////////////////////////////////

mysql_connect($host,$user,$pass) or die("Couldnt connect, try again. " . mysql_error());
mysql_select_db($database) or die("Cannot select database! Please Try again.
" . mysql_error());

?>