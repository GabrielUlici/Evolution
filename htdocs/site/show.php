<?
session_start();
include_once('functions/config.php');
include_once('functions/fuctions.php');


$query = "SELECT * FROM shoutbox ORDER BY date desc";
$result = mysql_query($query);
?>

<table width="100%" cellpadding="0" cellspacing="0" border="0"  style="font: Times; font-size: 14px">

<?
while($c = mysql_fetch_array($result))
{

?>
<tr>
<td>
<u><? echo $c[name] ?></u>  spune:   <? echo $c[message] ?></div>
<br>
</td>
</tr>
<tr><td>on <? echo $c[date] ?>
<hr noshade="noshade" size="1" style="border-style: dashed" color="#000000" /></td></tr>
<? } ?>


