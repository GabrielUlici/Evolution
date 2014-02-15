<? session_start();
include_once('functions/config.php');
include_once('functions/functions.php');	


$q = "SELECT * FROM cursuri ORDER BY idcurs ";
$r = mysql_query($q);
$add="http://localhost:8888/";
$t = mysql_query("SELECT * FROM cursuri order by idcurs");
$row = mysql_fetch_array($t);
?>



<table width="100%" cellpadding="0" cellspacing="0" border="0"  style="font: Times; font-size: 14px">

<?


if($c = mysql_fetch_array($r))
{

$s=$add.$c[link];

?>
<tr>
<td>
<? 

$iframe = file_get_contents($s);
echo   $iframe ;

 ?>  </div>
<br>
</td>
</tr>
<tr><td>
<hr noshade="noshade" size="1" style="border-style: dashed" color="#000000" /></td></tr>
	<? } ?>