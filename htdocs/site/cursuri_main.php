<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
		<TD COLSPAN=5 align="center" valign="top" class="smallheader">
		

		<h2>Afisare Cursuri </h2>
		<hr />
	
			<?
		  if($_POST['submit'])
		  
		  {
		     ?>
		     <h4>Documentatie</h4><br>
		     
		     
		     
<iframe height="300" width="540" scrolling=auto src="doc.php" name="documentatie" style="font: Verdana"></iframe>
<br><br>

			 <?
		  }
		
		?>	
		<?
$num = $_GET['num'];
if(empty($num))
{
$num = 1;
};
$limit = 1;
$start = ($num-1)*$limit;
$start = round($start,0);//rounds the result
print $_REQUEST['search'];
if(isset($_REQUEST['search'] ))
{
  $query="select * from cursuri where denumire like '%".$_GET['search']."%' or descriere like '%".$_GET['search']."%' or iuser like '%".$_GET['search']."%' order by date1 LIMIT $start, $limit";
  $totalpages = mysql_num_rows(mysql_query("SELECT * from cursuri where denumire like '%".$_GET['search']."%' or descriere like '%".$_GET['search']."%' or iuser like '%".$_GET['search']."%'"));
}
else
{
$query = "SELECT * FROM cursuri ORDER by date1 LIMIT $start, $limit";
$totalpages = mysql_num_rows(mysql_query("SELECT * from cursuri"));
}
$result = mysql_query($query);

$totalpages = $totalpages / $limit;
$totalpages = round($totalpages,0);
$c = 0;
echo "<br>";
   if($_GET['num']!=1)
   {
     $x=$_GET['num'];
	 $prev=$x-1;
    print"<a href=".$_SERVER['PHP_SELF']."?num=".$prev."&search=".$_REQUEST['search'].">PREV</a>";
   }
   else
   {
     print"PREV";
   }
   print"&nbsp;";
    for($i = 1; $i <= $totalpages; $i++){ 
        if($i == $_GET['num']){ 
           print"<font color='red'>".$i."</font>&nbsp;"; 
        }
		else{ 
            print"<a href=".$_SERVER['PHP_SELF']."?num=".$i."&search=".$_REQUEST['search'].">$i</a> "; 
        } 
    } print"&nbsp;";
	  if($totalpages>$_GET['num'])
	  {
	   $x=$_GET['num'];
	 $next=$x+1;
    print"<a href=".$_SERVER['PHP_SELF']."?num=".$next."&search=".$_REQUEST['search'].">NEXT</a>";
	  }
	  else
	  {
	  print"NEXT";
	  }
	
		print"<br><br>";
		print'<table   border="1" align="center" cellpadding="3" cellspacing="2" bordercolor="#000066" class="introparagraph">';
		while($row=mysql_fetch_array($result))
		{ 
		  ?>
		  
  <tr>
                   <td class="newstitle"><b>denumire</b></td>
                   <td class="newstitle"><? print $row['denumire'];?></td>
                </tr>
                <tr>
                   <td class="newstitle"><b>ore alocate</b></td>
                   <td class="newstitle"><? print $row['ore_alocate'];?></td>
                </tr>
                <tr>
                   <td class="newstitle"><b>data test</b></td>
                   <td class="newstitle"><? print $row['data_test'];?></td>
                </tr>
				<tr>
                   <td><b>data adaugarii</b></td>
                   <td class="newstitle"><? print $row['date1'];?></td>
                </tr>     
                <tr>
                   <td><b>descriere</b></td>
                   <td class="newstitle"><? print $row['descriere'];?></td>
                </tr>            
		  
		  <?
		}
		
		?>
		
		  </table>
		<br />
		<?
		 if(($_SESSION['tip_utilizatori']=='utilizatori')&&($_SESSION['id']))
		 {
		     ?>
		   <form action="cursuri.php"   method="post" name="documentatie"><input name="submit" type="hidden" value="dd" /><input type="submit" name="Submit" value="Documentatie"></form>

		     <?
		 }
		
		?>
		<br />
  </TD>
	</TR>