<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			
		<TD COLSPAN=5 align="center" valign="top" class="smallheader">		
		
		<h2><B>Admin area - editare test</B></h2>
<?php
session_start();
include_once("functions/config.php");
include_once("functions/functions.php");

if($submit)
{
$sql = "INSERT INTO intrebaritest (intrebari, raspuns1, raspuns2, raspuns3, raspuns4, rascor) VALUES ('$intrebari','$ras1','$ras2','$ras3',,'$ras4','$ras')";
$result = mysql_query($sql);
echo "<br><br>Intrebare adaugata.<br><br>";
include("qinsert.php");
}
else if($update)
{
$sql = "UPDATE intrebaritest SET intrebari='$intrebari',raspuns1='$ras1',raspuns2='$ras2',raspuns3='$ras3',raspuns4='$ras4',rascor='$ras' ";
$result = mysql_query($sql);
echo "<br><br>Testul a fost updatat.<br><br>\n";
}
else if($id)
{
$result = mysql_query("SELECT * FROM intrebaritest ");
$myrow = mysql_fetch_array($result);
?>
<form method="post" action="<?php echo $PHP_SELF?>">
<input type="hidden" name="id" value="<?php echo $myrow["id"]?>">
    <b>Intrebare:</b><br>
    <input type="Text" name="intrebari" value="<?php echo $myrow["intrebari"]?>" size="70">
    <br>
    <b>Raspuns 1:</b><br>
    <input type="Text" name="ras1" value="<?php echo $myrow["raspuns1"]?>" size="70">
    <br>
    <b>Raspuns 2:</b><br>
    <input type="Text" name="ras2" value="<?php echo $myrow["raspuns2"]?>" size="70">
    <br>
    <b>Raspuns 3:</b><br>
    <input type="Text" name="ras3" value="<?php echo $myrow["raspuns3"]?>" size="70">
    <br>
    <b>Raspuns 4:</b><br>
    <input type="Text" name="ras4" value="<?php echo $myrow["raspuns4"]?>" size="70">
    <br>
        <b>Raspuns corect</b>:<br>
    <input type="Text" name="ras" value="<?php echo $myrow["rascor"]?>" size="70">
    <br>
    <br>
<input type="Submit" name="update" value="Update information"></form>
<?

}
else
{
?>
<form method="post" action="<?php echo $PHP_SELF?>">
    <p><br>
      <b>Intrebare:</b><br>
      <input type="Text" name="intrebari" size="70">
      <br>
      <b>Raspuns 1:</b><br>
      <input type="Text" name="ras1" size="70">
      <br>
      <b>Raspuns 2:</b><br>
      <input type="Text" name="ras2" size="70">
      <br>
      <b>Raspuns 3:</b><br>
      <input type="Text" name="ras3" size="70">
      <br>
      <b>Raspuns 3:</b><br>
      <input type="Text" name="ras4" size="70">
      <br>
      <b>Raspuns coresct</b>:<br>
      <input type="Text" name="ras" size="70">
      <br>
      <br>
      <input type="Submit" name="submit" value="Enter information">
    </p>
    </form>
<?
}
?>
<br>
<a href="editquizlist.php">Inapoi</a>
</center>
</TD>
</TR>