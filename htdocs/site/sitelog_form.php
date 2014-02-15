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




<h2><center>Vizitoatori</h2> 
<br><br><br>
<form name="vizite" method="post" action="sitelog_action.php"><br>
Perioada de inceput  (an-luna-zi): <input type="date" name="data_1" /><br>  
Perioada de sfarsit  (an-luna-zi): <input type="date" name="data_2" /> 

<input type="submit" name="search" value="Cauta" />
</form>

</TD>
	</TR>
<?php include('footer.php'); ?>