
<?php session_start(); 

include_once("functions/config.php");
include_once("header.php");
include_once("menu.php");


?>
<link href="css/main_stylesnew.css" rel="stylesheet" type="text/css" />
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
			</TD>
  <TD COLSPAN=5 valign="top" >


        <h2><center>Test Flash</h2 > 


<form action="test3.php" method="post">

<p>1.) In Flash elementele grafice pot fi realizate prin: <br>
<input type="radio" name="q1" value="vector"> vector<br>
<input type="radio" name="q1" value="imagine"> imagine<br>
<input type="radio" name="q1" value="vector si imagine"> vector si imagine<br>
<input type="radio" name="q1" value="nici o varianta de mai sus"> nici o varianta de mai sus</p>

<p>2.) Ce este scena: <br>
<input type="radio" name="q2" value="un efect"> un efect<br>
<input type="radio" name="q2" value="continutul compus al filmului"> continutul compus al filmului<br>
<input type="radio" name="q2" value="un simbol"> un simbol<br>
<input type="radio" name="q2" value="o instructiune"> o instructiune</p>



<p>3.) Timeline Effects Settings:<br>
<input type="radio" name="q3" value="multitudinea obiectului"> multitudinea obiectului<br>
<input type="radio" name="q3" value="importa o forma intr-un timp"> importa o forma intr-un timp<br>
<input type="radio" name="q3" value="manipularea obiectului intr-un anumit fel"> manipularea obiectului intr-un anumit fel<br>
<input type="radio" name="q3" value="nici una de mai sus"> nici una de mai sus</p>



<p>4.) Shape tween:<br>
<input type="radio" name="q4" value="importa o forma intr-un anumit moment de timp"> importa o forma intr-un anumit moment de timp<br>
<input type="radio" name="q4" value="modifica proprietatile : pozitie, dimensiune, etc."> modifica proprietatile : pozitie, dimensiune, etc.<br>
<input type="radio" name="q4" value="expandeaza si/sau contracta obiectele in timp"> expandeaza si/sau contracta obiectele in timp<br>
<input type="radio" name="q4" value="modifica propietatile unei instante a unui simbol"> modifica propietatile unei instante a unui simbol</p>



<p>5.) ActionScript este:<br>
<input type="radio" name="q5" value="un limbaj folosit pt dezvoltarea efectelor"> un limbaj folosit pt dezvoltarea efectelor<br>
<input type="radio" name="q5" value="un limbaj folosit pentru animatii 3D"> un limbaj folosit pentru animatii 3D<br>
<input type="radio" name="q5" value="un limbaj folosit pentru dezvoltarea functiionalitati in cadrul animatilor"> un limbaj folosit pentru dezvoltarea functiionalitati in cadrul animatilor<br>
<input type="radio" name="q5" value="nici una de mai sus"> nici una de mai sus</p>

<p><input type="submit" name="submit9" value="trimite rezultat"></p>

</form>
<br>
</TD>
	</TR>
<?php

include('footer.php');
?>
