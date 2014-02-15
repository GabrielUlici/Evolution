<? session_start();
include_once("header.php");
include_once("menu.php");
?>

<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
  
  <?
$status = "OK";
$msg="";
$y_email=$_POST['y_email'];
$y_name=$_POST['y_name'];
$f_email=$_POST['f_email'];
$f_name=$_POST['f_name'];
$y_msg=$_POST['y_msg'];
if(substr_count($y_email,"@") > 1 or substr_count($f_email,"@") > 1){
$msg .="folositi doar o adresa de mail<BR>";
$status= "NOTOK";
}
if (!stristr($y_email,"@") OR !stristr($y_email,".")) { 
$msg .="adresa de mail nu este corecta<BR>";
$status= "NOTOK";}
if (strlen($y_name) <2 ) { 
$msg .="Introduceti numele<BR>";
$status= "NOTOK";}
if (!stristr($f_email,"@") OR !stristr($f_email,".")) { 
$msg .="Adresa prietenului este incorecta<BR>";
$status= "NOTOK";}
if (strlen($f_name) <2 ) { 
$msg .="introduceti numele prietenului<BR>";
$status= "NOTOK";}
if (strlen($y_msg) <2 ) { 
$msg .="Introdu mesajul<BR>";
$status= "NOTOK";}
if($status=="OK"){ 
$ref=@$HTTP_REFERER;
$header_message = "Buna $f_name  prietenul tau, $y_name te roaga sa vizitezi aceasta pagina http://www.evolution.ro      ";
$body_message =$header_message."n".$y_msg."n";
$body_message .="";
$headers="";
//$headers = "Content-Type: text/html; charset=iso-8859-1n".$headers;

$headers4=$y_email;
$headers.="Reply-to: $headers4n";
$headers .= "From: $headers4n";
$headers .= "Errors-to: $headers4n";
$subject="Request to visit URL";
mail($f_email,$subject,$body_message,$headers);
echo "<center><font face='Verdana' size='2' color=green>Multumim, mesajul a fost trimis la $f_name</font></center>";
}else{
echo "<center><font face='Verdana' size='2' color=red>$msg</font></center>";
}
?>
</TD>
	</TR>
	<?

include_once("footer.php");

?>
