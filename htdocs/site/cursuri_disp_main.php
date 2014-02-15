<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
		
		
		<h2>Afisare Cursuri</h2 > 
		<hr />
		<?
		$search=$_REQUEST['search'];
		?>
		<table width="414" border="0" cellpadding="5" cellspacing="0" class="h2">
          <tr>
            <td width="10"><strong>Nr.</strong></td>
            <td width="77"><strong>Denumire</strong></td>
            <td width="64"><strong>Ore alocate</strong></td>
            <td width="77"><strong>Data test</strong></td>
            <td width="110"><strong>Data introduceri</strong></td>
          </tr>
		  <?
		  $sql="select * from cursuri where denumire like '%".$_GET['search']."%' or descriere like '%".$_GET['search']."%' or iuser like '%".$_GET['search']."%'order by date1";
		  $result=mysql_query($sql);
		  $i=0;
		  while($row=mysql_fetch_array($result))
		  {$i++;
		  if($i%2==0)
          {$bgcolor="#FFFFFF";}
          else
          {$bgcolor='#C5CBC7';}
          print"<tr>";
            print"<td bgcolor=".$bgcolor."><a href=cursuri.php?num=".$i."&search=".$search.">".$i."</a></td>";
            print"<td bgcolor=".$bgcolor."><a href=cursuri.php?num=".$i."&search=".$search.">".$row['denumire']."</a></td>";
            print"<td bgcolor=".$bgcolor.">".$row['ore_alocate']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['data_test']."</td>";
            print"<td bgcolor=".$bgcolor.">".$row['date1']."</td>";
          print"</tr>";
		  }
          ?>
          
    </table> <br><br> </TD>
	</TR>