
<?php session_start(); 

include_once("functions/config.php");
include_once("header.php");
include_once("menu.php");


?>
<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 valign="top" >


        <h2><center>Rezultat</h2 > 
        
<? session_start();
include_once("functions/config.php");
$nota=0;
if (isset ($_POST['submit9'])) {
    $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  
}


if ($q1 == "") {
  die ("Ai uitat sa complectezi ceva!!!!");
}
if ($q1 == "void free(void* p)") {
  $nota=$nota+2;
}
if ($q2 == "") {
  die ("Ai uitat sa complectezi ceva!!!!");
}
if ($q2 == "corecta") {
  $nota=$nota+2;
}
if ($q3 == "") {
  die ("Ai uitat sa complectezi ceva!!!!");
}
if ($q3 == "incorecta, p fiind un pointer care nu a fost initializat") {
  $nota=$nota+2;
}
if ($q4 == "") {
  die ("Ai uitat sa complectezi ceva!!!!");
}
if ($q4 == "x si y sunt egale") {
  $nota=$nota+2;
}
if ($q5 == "") {
  die ("Ai uitat sa complectezi ceva!!!!");
}
if ($q5 == "24") {
  $nota=$nota+2;
}

{
echo<<<EOT
<p>raspunsurile dumneavoastra au fost: 
<br>
1.) $q1<br>
2.) $q2<br>
3.) $q3<br>
4.) $q4<br>
5.) $q5
<br><br>
nota dumneavoastra este $nota
</p>

EOT;
}


?>
<?php
if ($nota <= 4) {
  echo "ati picat testul";
}

else {
  echo "ati promovat testul";


}
?>

<?php
 $ca = mysql_query("SELECT * FROM utilizatori WHERE user='demo'"); 

//And we display the results 


$result1 = mysql_fetch_array($ca);
$id = $result1['id'];

echo $id;

			  
	 $cautare = mysql_query("SELECT * FROM note"); 

//And we display the results 


$result = mysql_fetch_array($cautare);
$id = $result['id'];

echo $i;

mysql_query("INSERT INTO note (id,iuser,test,nota) VALUES('','demo','Test1','$nota')") or die('Error inserting into DB.');
?><br><br><br>
<a href="test.php" class="printf">Inapoi </a>

</TD>
	</TR>
<?php

include('footer.php');
?>
