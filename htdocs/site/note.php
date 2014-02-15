<? session_start(); 

include_once("header.php");
include_once("menu.php");
?>

<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">


        <h2>Afisare Note</h2 > 
		
		<br />
		<table width="414" border="0" cellpadding="5" cellspacing="0" class="h2">
          <tr>
            <td width="10"><strong>Nr.</strong></td>
            <td width="77"><strong>User</strong></td>
            <td width="64"><strong>Test</strong></td>
            <td width="77"><strong>Nota</strong></td>
            
          </tr>
		  <?		  
		  include_once('functions/config.php');
		  include_once('functions/functions.php');
		  
		  $result=mysql_query("SELECT * FROM note order by id");
		  $i=0;
		  while($row=mysql_fetch_array($result))
		  {$i++;
		  if($i%2==0)
          {$bgcolor="#FFFFFF";}
          else
          {$bgcolor='#C5CBC7';}
          print"<tr>";
            print"<td bgcolor=".$bgcolor.">".$i."</a></td>";
            print"<td bgcolor=".$bgcolor.">".$row['iuser']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['test']."</a></td>";
            print"<td bgcolor=".$bgcolor.">".$row['nota']."</td>";
            print"</tr>";
		  }


		   ?>
    </table>  </TD>
	</TR>
	<?
	include_once("footer.php");
?>
	