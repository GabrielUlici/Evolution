<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css">
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 align="center" valign="top" class="smallheader">
		
		
		<h2>Informatii Cont </h2>
		  <hr />

	  <? 
	
	    $sql_utilizatori="select * from utilizatori where iuser='".$_POST['user']."' and pass='".$_POST['parola']."'";
		$sql_prof="select * from prof where iuser='".$_POST['user']."' and pass='".$_POST['parola']."'";
		$result_utilizatori=@mysql_query($sql_utilizatori);
		$result_prof=@mysql_query($sql_prof);
		$nr_utilizatori=@mysql_num_rows($result_utilizatori);
		$nr_prof=@mysql_num_rows($result_prof);
		while($row_utilizatori=@mysql_fetch_array($result_utilizatori))
		{
		   $_SESSION['id']=$row_utilizatori['id'];
		   $_SESSION['iuser']=$row_utilizatori['iuser'];
		   $_SESSION['nume']=$row_utilizatori['nume'];
		   $_SESSION['tip_utilizatori']='utilizatori';
		}
		while($row_prof=@mysql_fetch_array($result_prof))
		{
		   $_SESSION['id']=$row_prof['id'];
		   $_SESSION['iuser']=$row_prof['iuser'];
		   $_SESSION['nume']=$row_prof['nume'];
		   $_SESSION['tip_utilizatori']='prof';
		}

		if(($nr_utilizatori!='1')&&($nr_prof!='1')&&(empty($_SESSION['id'])))
		{
		?>
		<table width="229" border="0" align="center">
  <tr>
    <td width="30"><img src="images/alert.png" width="16" height="16" /></td>
    <td width="189" class="redbold">Utilizator sau parola gresita</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

		<?
		
		}
		elseif($_SESSION['tip_utilizatori']=='utilizatori')
		{
		?>
		<h5><? print "Bine ai venit ".$_SESSION['iuser'];?></h5>
		<table width="519" border="0" align="left">
        <tr>
          <td width="23" bgcolor="#FFFFFF"><img src="images/star.png" alt="" width="16" height="16"></td>
          <td width="486" background="cont.php"><a href="cont.php?pag=modifica" class="toplevel">Modificare date personale</a></td>
        </tr>
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=afisare_cursuri" class="toplevel">Cursuri</a></td>
        </tr>     
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="test.php" class="toplevel">Teste</a></td>
        </tr>
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=citire" class="toplevel">Vizualizare note</a></td>
        </tr>
         <?
        
       	$q = "SELECT * FROM note ORDER BY id ";
		$r = mysql_query($q);
		$q1 = "SELECT * FROM test ORDER BY idtest ";
		$r1 = mysql_query($q1);
		if ( $r['test'] == $r1['nume'])
		{
		?>
         <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="diploma.php" class="toplevel">Diploma</a></td>
        </tr>
        <?
        }
        ?>

            </table>
		<?
		}
		elseif($_SESSION['tip_utilizatori']=='prof')
		{
	  ?>
	  <h5><? print "Bine ai venit ".$_SESSION['iuser'];?></h5>
		<table width="519" border="0" align="left">
        <tr>
          <td width="23" bgcolor="#FFFFFF"><img src="images/star.png" alt="" width="16" height="16"></td>
          <td width="486" background="cont.php"><a href="cont.php?pag=modifica_prof" class="toplevel">Modificare date personale</a></td>
        </tr>
     
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=afisare_cursuri" class="toplevel">Afisare cursuri</a></td>
        </tr>
           <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=adauga_cursuri" class="toplevel">Adauga cursuri</a></td>
        </tr>
         <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="test.php" class="toplevel">Teste</a></td>
        </tr>
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=cauta" class="toplevel">Cautare student</a></td>
          
        </tr>
       <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="cont.php?pag=note" class="toplevel">Note studenti</a></td>
          
        </tr>
        <tr>
          <td><img src="images/star.png" alt="" width="16" height="16"></td>
          <td><a href="sitelog_form.php" class="toplevel">Vizite site</a></td>
          
        </tr>
      </table>
	  <?
	  }
	  ?>
	  
  </TD>
	</TR>