<? session_start();
$arrErrors = array();
$sql_profi="select * from prof where id='".$_SESSION['id']."'";
  $result_profi=mysql_query($sql_profi);
  while($row=mysql_fetch_array($result_profi))
    {
	    $db_id=$row['id'];
        $db_iuser=$row['iuser'];
        $db_pass=$row['pass'];
        $db_nume=$row['nume'];
        $db_prenume=$row['prenume'];
        $db_email=$row['email'];
     	$db_adresa=$row['adreasa'];
        $db_tara=$row['tara'];
		$db_judet=$row['judet'];
        $db_localitate=$row['localitate'];
        $db_adresa=$row['cod_postal'];
        $db_tel1=$row['tel1'];

    }

//Only validate if the Submit button was clicked.
if (!empty($_POST)) {
      
    if ($_POST['user']=='')
        $arrErrors['user']='Introduceti user';
    if ($_POST['pass']=='')
        $arrErrors['pass']='Introduceti parola';
	if ($_POST['pass']!=$_POST['pass2'])
        $arrErrors['pass2']='Parola nu corespunde';
	if ($_POST['pass']!=$_POST['pass2'])
        $arrErrors['pass']='Parola nu corespunde';
    if ($_POST['pass2']=='')
        $arrErrors['pass2']='Introduceti verificare parola';
	if ($_POST['nume']=='')
        $arrErrors['nume']='X';
	if ($_POST['prenume']=='')
        $arrErrors['prenume']='X';
	if ($_POST['email']=='')
        $arrErrors['email']='X';
		
		
	if ($_POST['adresa']=='')
        $arrErrors['adresa']='X';
	if ($_POST['tara']=='')
        $arrErrors['tara']='X';
	if ($_POST['judet']=='')
        $arrErrors['judet']='X';
	if ($_POST['localitate']=='')
        $arrErrors['localitate']='X';
	if ($_POST['cod_postal']=='')
        $arrErrors['cod_postal']='X';
	if ($_POST['tel']=='')
        $arrErrors['tel']='X';
	
	   
    if (count($arrErrors) == 0) {
$psqlx="update utilizator set iuser='".$_POST['user']."',pass='".$_POST['pass']."',nume='".$_POST['nume']."',prenume='".$_POST['prenume']."',email='".$_POST['email']."',adresa='".$_POST['adresa']."',tara='".$_POST['tara']."',judet='".$_POST['judet']."',localitate='".$_POST['localitate']."',cod_postal='".$_POST['cod_postal']."',tel1='".$_POST['tel']."'  where id='".$db_id."'";
$result=mysql_query($psqlx) or die("Error INSERT   x");
	header('Location: cont.php');
	ob_end_flush();
       }
 else {
        // The error array had something in it. There was an error.
        // Start adding error text to an error string.
        $strError = '<table class="be-inst" border="0" cellpadding="4" cellspacing="0" width="100%">
                    <tbody><tr><td width="4"><img src="images/blank.gif" height="27" width="4"></td>
                    <td width="25"><img src="images/icon-error_lg.gif" border="0" height="27" width="25"></td>
                    <td width="4"><img src="images/blank.gif" height="27" width="4"></td>
                    <td><table class="be-inst" border="0" cellpadding="1" cellspacing="0"><tbody><tr>
                    <td colspan="2" valign="top"><div class="be-h1">Please fix the following errors:</div></td>
                    </tr><tr><td colspan="2"><img src="images/blank.gif" border="0" height="4" width="1"></td>
                    </tr><tr><td valign="top">';

        foreach ($arrErrors as $error) {
            $strError .= "<li>$error</li>";
        }
        $strError.= '</td></tr></tbody></table></td></tr></tbody></table>';

    }
}  
ob_end_flush();
$sql_profi="select * from prof where id='".$_SESSION['id']."'";
  $result_profi=mysql_query($sql_profi);
  while($row=mysql_fetch_array($result_profi))
    {
	    $id=$row['id'];
        $iuser=$row['iuser'];
        $pass=$row['pass'];
        $nume=$row['nume'];
        $prenume=$row['prenume'];
        $adresa=$row['adresa'];
        $email=$row['email'];
		$tara=$row['tara'];
		$judet=$row['judet'];
        $localitate=$row['localitate'];
        $cod_postal=$row['cod_postal'];
        $tel1=$row['tel1'];
        $sex=$row['sex'];
        
    }

?>
<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT=""></TD>
		<TD COLSPAN=5 align="center" valign="top" class="smallheader"><h2>Modificare cont - profesori</h2>
		  <hr />
		 

* - informatii obligatorii
<form method="post" action="cont.php?pag=modifica">
  <table border="0" cellpadding="0" cellspacing="5">
    <tr>
      <td>*Utilizator:</td>
      <td><input type="text" size="15" name="user" <? 
	  if (!empty($_REQUEST['user'])) 
		{
		   print 'value="'.$_REQUEST['user'].'"';
		}
		elseif(!empty($iuser))
		{
		  print 'value="'.$iuser.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['user'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['user']."</span>"; ?></td>
    </tr>
    <tr>
      <td>*Parola:</td>
       <td><input type="password" size="15" value="" name="pass" />&nbsp;<?php if (!empty($arrErrors['pass'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['pass']."</span>"; ?></td>
    </tr>
    <tr>
      <td>*Confirmare parola:</td>
       <td><input type="password" size="15" value="" name="pass2" />&nbsp;<?php if (!empty($arrErrors['pass2'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['pass2']."</span>"; ?></td>
    </tr>
    <tr>
      <td>*Nume </td>
      <td><input type="text" size="30" name="nume" <?   
	  if (!empty($_REQUEST['nume'])) 
		{
		   print 'value="'.$_REQUEST['nume'].'"';
		}
		elseif(!empty($nume))
		{
		  print 'value="'.$nume.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['nume'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
    <tr>
      <td>*Prenume:</td>
      <td><input type="text"  size="10" name="cui" <?   
	  if (!empty($_REQUEST['prenume'])) 
		{
		   print 'value="'.$_REQUEST['prenume'].'"';
		}
		elseif(!empty($prenume))
		{
		  print 'value="'.$prenume.'"';
		}
		?> />
        &nbsp;<?php if (!empty($arrErrors['prenume'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
    <tr>
      <td>*Email:</td>
      <td><input type="text" size="30" name="email" <?   
	  if (!empty($_REQUEST['email'])) 
		{
		   print 'value="'.$_REQUEST['email'].'"';
		}
		elseif(!empty($email))
		{
		  print 'value="'.$email.'"';
		}
		?>  />&nbsp;<?php if (!empty($arrErrors['email'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
    <tr>
      <td>*Adresa:</td>
      <td><input type="text" size="30" name="adresa" <?   
	  if (!empty($_REQUEST['adresa'])) 
		{
		   print 'value="'.$_REQUEST['adresa'].'"';
		}
		elseif(!empty($adresa))
		{
		  print 'value="'.$adresa.'"';
		}
		?>  />&nbsp;<?php if (!empty($arrErrors['adresa'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
    <tr>
      <td>*Tara:</td>
      <td><? 
	   $sql="select * from tara";
		if(isset($tara))
		{
		  $post_t=$tara;
		}
		else
		{
		  $post_t=$_REQUEST['tara'];
		}
        $select_name="tara";
        $initial_value="";
        $selected_value="RO";
		$val1="iso";
		$val2="printable_name";
        select_($sql,$select_name,$selected_value,$initial_value,$val1,$val2,$post_t);
		?>      </td>
    </tr>
    <tr>
        <td><span class="style1">*</span>Judet:</td>
        <td><input size="15" name="judet" <?
		if (!empty($judet)) 
		{
		  print 'value="'.$judet.'"';
		} 
		elseif (!empty($_REQUEST['judet'])) 
		{
		  print 'value="'.$_REQUEST['judet'].'"';
		}
		?> /> &nbsp;<?php if (!empty($arrErrors['judet'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?>   </td>
      </tr>
      <tr>
      <td>*Localitate: </td>
      <td><input type="text" size="20" name="localitate"<?   
	  if (!empty($_REQUEST['localitate'])) 
		{
		   print 'value="'.$_REQUEST['localitate'].'"';
		}
		elseif(!empty($localitate))
		{
		  print 'value="'.$localitate.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['localitate'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
    <tr>
      <td>*Cod Postal:</td>
      <td><input type="text" size="20" name="cod_postal"  <?   
	  if (!empty($_REQUEST['cod_postal'])) 
		{
		   print 'value="'.$_REQUEST['cod_postal'].'"';
		}
		elseif(!empty($cod_postal))
		{
		  print 'value="'.$cod_postal.'"';
		}
		?>  /></td>
    </tr>
    <tr>
      <td>*Telefon:</td>
     <td><input type="text" size="20" name="tel" <?   
	  if (!empty($_REQUEST['tel'])) 
		{
		   print 'value="'.$_REQUEST['tel'].'"';
		}
		elseif(!empty($tel1))
		{
		  print 'value="'.$tel1.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['tel'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
    </tr>
  
    <tr>
      <td align="center"><input type="submit" value="Trimite" name="submit" /></td>
      <td align="center"><input type="reset" value="Reset" name="reset" /></td>
    </tr>
	<tr>
        <td colspan="2"><br />
          <input type="hidden" name="inscriere" value="profesori"/></td>
      </tr>
  </table>
</form>  </TD>
	</TR>