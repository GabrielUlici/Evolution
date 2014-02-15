<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=1 HEIGHT=335 ALT="">
			</TD>
		<TD COLSPAN=5 align="center" valign="top" class="smallheader">
		
		
		<h2>Bine ati venit</h2>
		<br />
			<h2>Cursuri disponibile</h2>
			<br />
		<table class='mtable' width="200" cellpadding="4" cellspacing="2" >
		
		<?
		   $query = "SELECT * FROM cursuri ORDER by date1 LIMIT 0,9";
		   $result=mysql_query($query);
		   while($row=mysql_fetch_array($result))
		   { 
		     print"<tr >";
			 print "<td ><a href='cursuri.php'><img src='images/menup.gif' border='0'></a></td>";
		     print "<td ><a href='cursuri.php'>".$row['denumire']."</a></td>";
			 print"</tr>";
		   }
		?>
		
		</table>
  <br />
  </TD>
	</TR>
	<?
	
	
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
if(isset($_SERVER['HTTP_REFERER'])){

$referinta = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php
};
if(isset($_SERVER['HTTP_REFERER'])){
$inserare = 'INSERT INTO `log` (nr_crt,host, ip_adresa, browser, data, pagina_referinta) VALUES (NULL, "'.$host.'", "'.$ip.'", "'.$browser.'", CURDATE(), "'.$referinta.'")';
}
else{
$inserare = 'INSERT INTO `log` (nr_crt,host,ip_adresa,browser, data, pagina_referinta) VALUES (NULL, "'.$host.'", "'.$ip.'", "'.$browser.'", CURDATE(), "direct")';
}
mysql_query($inserare);


?>
