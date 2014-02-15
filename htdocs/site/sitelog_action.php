<?php
session_start();

 include('functions/config.php'); 
 include('header.php'); 
 include('menu.php'); 

?>

<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 valign="top" >
    
<?php $n=1; ?>
<?     


//This is only displayed if they have submitted the form 
echo "<center><h2>Vizite site</h2><p></center>"; 
echo "<center><h4><h3> $data_1 - $data_2</h3><h4></center>";
//If they did not enter a search term we give them an error 
if ($data_1 == "" || $data_2 == "") 
{ 
echo "<center><p>nu ati introdus perioada de cautare</center>"; 

include('footer.php');
exit; 
} 

$cautare_rezultate = mysql_query("SELECT * FROM log WHERE data>='$data_1' AND data<='$data_2' ORDER BY data "); 
$nr_vizite= mysql_num_rows($cautare_rezultate);


echo "<center>";
if ($nr_vizite == 0) 
{ 
echo "in perioada respectiva pe site nu a existat activitate"; 
} 
else
{
	echo "in aceasta perioada site-ul a fost accesat de <b>$nr_vizite</b> ori <br><br>";
} 
echo "<center>";
Print "<table border=1 cellpadding=1>";
Print "<tr>"; 
Print "<td><b>nr crt.</b></td> "; 
Print "<td><b>ip</b></td> "; 
Print "<td><b>data</b></td> "; 
Print "<td><b>host</b></td>"; 
Print "<td><b>browser</b></td> "; 

Print "<tr> "; 
while($data = mysql_fetch_array( $cautare_rezultate )) 
{ echo "<center>";
echo "<tr>"; 
echo "<td>".$n . "</td> "; 
Print "<td>".$data['ip_adresa'] . "</td> "; 
Print "<td>".$data['data'] ."</td> "; 
Print "<td>".$data['host'] . " </td>";
Print "<td>".$data['browser'] . " </td>";
 
Print "</tr> "; 
 $n=$n+1;
}


Print "</table>";
echo "</center>";
?><br><br><br><br><br>

</TD>
	</TR>

<?php

include('footer.php');
?>