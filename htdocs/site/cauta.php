<? session_start();
 
include_once("header.php");
include_once("menu.php");
?>
<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
		<h2>Afisare useri</h2 > 
		<hr />
		<br />
		<? session_start();
		$find=$_REQUEST['find'];
		?>
		<table width="414" border="0" cellpadding="5" cellspacing="0" class="h2">
          <tr>
            <td width="10"><strong>Nr.</strong></td>
            <td width="77"><strong>Nume</strong></td>
            <td width="64"><strong>Prenume</strong></td>
            <td width="77"><strong>User</strong></td>
            <td width="77"><strong>Email</strong></td>
             </tr>
<?
 session_start();
 include_once('functions/config.php');
 include_once('functions/functions.php');

 
		  $sql="select * from utilizatori where nume like '%".$_GET['find']."%' or prenume like '%".$_GET['find']."%' or iuser like '%".$_GET['find']."%'order by date1";
		  $result=mysql_query($sql);
		  $i=0;
		  while($row=mysql_fetch_array($result))
		  {
		  
		  {$i++;
		  if($i%2==0)
          {$bgcolor="#FFFFFF";}
          else
          {$bgcolor='#C5CBC7';}
          print"<tr>";
            print"<td bgcolor=".$bgcolor.">".$i."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['nume']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['prenume']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['iuser']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['email']."</td>";
            print"</tr>";
            
		  }
		  }
		  
          ?>
   
     </table>  </TD>
	</TR>
<?
include_once("footer.php");
?>