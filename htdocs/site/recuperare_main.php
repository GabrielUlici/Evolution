<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
  </TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
		
		
		<h2>Recuperare parola</h2>

			<br />
			<? session_start();
			
		   if(($_POST['submit']=="Trimite")&&($_POST['email']==''))
		   {
		     ?>
			 
			    		     <table width="376" border="0" align="center">
  <tr>
    <td width="30"><img src="images/alert.png" width="16" height="16" /></td>
    <td width="336" class="redbold">Introduceti adresa de e-mail! </td>
  </tr>

</table>
			 <?
		   }
		   elseif ($_POST['submit']=="Trimite")
		   {
		  $sql_utilizatori="select * from utilizatori where email='".$_POST['email']."'";
		  $sql_prof="select * from prof where resp_email='".$_POST['email']."' ";
		  $result_utilizatori=@mysql_query($sql_utilizatori);
		  $result_prof=@mysql_query($sql_prof);
		  $nr_utilizatori=@mysql_num_rows($result_utilizatori);
		  $nr_prof=@mysql_num_rows($result_prof);
		  if(($nr_utilizatori!='1')&&($nr_prof!='1'))
		  {
		  ?>
		     <table width="376" border="0" align="center">
  <tr>
    <td width="30"><img src="images/alert.png" width="16" height="16" /></td>
    <td width="336" class="redbold">Adresa de email nu a fost gasita in baza de date! </td>
  </tr>

</table>
		  <?
		  }
		    else
		  {
		  ?>
		     <table width="459" border="0" align="center">
  <tr>
    <td width="30"></td>
    <td width="419" class="smallheader" align="center">Noua parola a fost trimisa la adresa de email </td>
  </tr>

</table>
		  <?
		  }
		   }
		?>
	<form action="recuperare.php" method="POST">
            <table border="0" cellpadding="0" cellspacing="5">
              <tr>
                <td width="65">*e-mail:</td>
                <td width="182"><input type="text" size="20" name="email" <? if (!empty($_REQUEST['email'])) {print 'value="'.$_REQUEST['user'].'"';}?> />
                  &nbsp;
                </td>
              </tr>


              <tr>
                <td colspan="2"><br />                </td>
              </tr>
              <tr>
                <td align="center"><input type="submit" value="Trimite" name="submit" /></td>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
            </table></form></TD>
  
	</TR>