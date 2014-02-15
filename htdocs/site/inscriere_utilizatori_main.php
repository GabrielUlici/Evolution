	 <? session_start();
      $arrErrors = array();
      if (!empty($_POST)) {
	  $sql_user="select * from utilizatori where iuser='".$_POST['user']."'";
      $result_user=@mysql_query($sql_user);
      while($row_user=@mysql_fetch_array($result_user))
      {
          $user_db=$row_user['iuser'];
      }
	 $sql_user2="select * from prof where iuser='".$_POST['user']."'";
      $result_user2=@mysql_query($sql_user2);
      while($row_user2=@mysql_fetch_array($result_user2))
      {
          $user_db2=$row_user2['iuser'];
      }
	if ($_POST['user']==$user_db)
        $arrErrors['user']='Acest utilizator exista in baza de date';
	if ($_POST['user']==$user_db2)
        $arrErrors['user']='Acest utilizator exista in baza de date';
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
	if ($_POST['dn_luna']=='')
        $arrErrors['dn_luna']='X';
	if ($_POST['dn_zi']=='')
        $arrErrors['dn_zi']='X';
	if ($_POST['dn_an']=='')
        $arrErrors['dn_an']='X';
	if ($_POST['adresa']=='')
        $arrErrors['adresa']='X';
    if ($_POST['judet']=='')
    	$arrErrors['judet']='X';
	if ($_POST['localitate']=='')
        $arrErrors['localitate']='X';
    if (count($arrErrors) == 0) {
  $iuser=$_POST['user'];
  $pass=$_POST['pass'];
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $email=$_POST['email'];
  $dn_luna=$_POST['dn_luna'];
  $dn_zi=$_POST['dn_zi'];
  $dn_an=$_POST['dn_an'];
  $sex=$_POST['sex'];
  $adresa=$_POST['adresa'];
  $tara=$_POST['tara'];
  $judet=$_POST['judet'];
  $localitate=$_POST['localitate'];
  $cod_postal=$_POST['cod_postal'];
  $tel1=$_POST['tel1'];
  $sql="insert into utilizatori(iuser,pass,nume,prenume,email,dn_an,dn_luna,dn_zi,sex,adresa,tara,judet,localitate,cod_postal,tel1,date1)values('".$iuser."','".$pass."','".$nume."','".$prenume."','".$email."','".$dn_an."','".$dn_luna."','".$dn_zi."','".$sex."','".$adresa."','".$tara."','".$judet."','".$localitate."','".$cod_postal."','".$tel1."',now())";
$result=mysql_query($sql) or die("Error INSERT   x");
	header('Location: reusire.php');
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

?>

<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT="">
	    </TD>
		<TD COLSPAN=5 align="center" valign="top" class="smallheader" align="center"><h2>Creare cont </h2>
		  <hr />

* - informatii obligatorii
<form action="inscriere_utilizatori.php" method="post">
  <table cellspacing="5" cellpadding="0" border="0" >
    <tbody>
      <tr>
        <td width="155"><span class="style1">*</span>Utilizator:</td>
        <td width="472"><input size="15" name="user"<? if (!empty($_REQUEST['user'])) {print 'value="'.$_REQUEST['user'].'"';}?> />
         &nbsp; <?php if (!empty($arrErrors['user'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['user']."</span>"; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Parola:</td>
        <td><input type="password" size="15" value="" name="pass" />
          &nbsp;
          <?php if (!empty($arrErrors['pass'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['pass']."</span>"; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Confirmare parola:</td>
        <td><input type="password" size="15" value="" name="pass2" />
          &nbsp;
          <?php if (!empty($arrErrors['pass2'])) echo '<img src="images/icon-error_sm.gif" alt=""><span class="err">'.' '.$arrErrors['pass2']."</span>"; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Nume:</td>
        <td><input name="nume"<? if (!empty($_REQUEST['nume'])) {print 'value="'.$_REQUEST['nume'].'"';}?> />
          &nbsp;
          <?php if (!empty($arrErrors['nume'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Prenume:</td>
        <td><input name="prenume"<? if (!empty($_REQUEST['prenume'])) {print 'value="'.$_REQUEST['prenume'].'"';}?> />
          &nbsp;
          <?php if (!empty($arrErrors['prenume'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Email:</td>
        <td><input size="30" name="email" <? if (!empty($_REQUEST['email'])) {print 'value="'.$_REQUEST['email'].'"';}?> />
          &nbsp;
          <?php if (!empty($arrErrors['email'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Data nasterii:</td>
        <td><?
		$sql_dnl="select * from dn_luna";
		$post_dnl=$_REQUEST['dn_luna'];
        $select_name_dnl="dn_luna";
        $initial_value_dnl=" Luna ";
        $selected_value_dnl="";
		$val1_dnl="id";
		$val2_dnl="val";
        select_($sql_dnl,$select_name_dnl,$selected_value_dnl,$initial_value_dnl,$val1_dnl,$val2_dnl,$post_dnl);
		?>
          &nbsp;
          <?php if (!empty($arrErrors['dn_luna'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?>
          &nbsp;
          <?
		$sql_dnz="select * from dn_zi";
		$post_dnz=$_REQUEST['dn_zi'];
        $select_name_dnz="dn_zi";
        $initial_value_dnz=" Ziua ";
        $selected_value_dnz="";
		$val1_dnz="id";
		$val2_dnz="val";
        select_($sql_dnz,$select_name_dnz,$selected_value_dnz,$initial_value_dnz,$val1_dnz,$val2_dnz,$post_dnz);
		?>
          &nbsp;
          <?php if (!empty($arrErrors['dn_zi'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?>
          &nbsp;
          <?
		$sql_dna="select * from dn_an";
		$post_dna=$_REQUEST['dn_an'];
        $select_name_dna="dn_an";
        $initial_value_dna=" Anul ";
        $selected_value_dna="";
		$val1_dna="id";
		$val2_dna="val";
        select_($sql_dna,$select_name_dna,$selected_value_dna,$initial_value_dna,$val1_dna,$val2_dna,$post_dna);
		?>
          &nbsp;
          <?php if (!empty($arrErrors['dn_an'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Sex:</td>
        <td><?
		  if($_REQUEST['sex'])
		  {
		  
		     switch ($_REQUEST['sex'])
			 {
		       case 'f':
                     echo '<input type="radio"  value="b" name="sex" />
                     Barbat
                     </INPUT>
                     <input type="radio" value="f" checked="checked" name="sex" />
                     Femeie
                     </INPUT> ';
                     break;
               case 'b':
                    echo '<input type="radio" checked="checked" value="b" name="sex" />
                    Barbat
                    </INPUT>
                    <input type="radio" value="f" name="sex" />
                    Femeie
                    </INPUT> ';
                    break;
			   default:

              }
            }
		  else
		  {
		?>
            <input type="radio" checked="checked" value="b" name="sex" />
          Barbat
          <input type="radio" value="f" name="sex" />
          Femeie
          <?
		  }
		  ?>        </td>
      </tr>
      
      <tr>
        <td><span class="style1">*</span>Adresa: </td>
        <td><input size="50" name="adresa" <? if (!empty($_REQUEST['adresa'])) {print 'value="'.$_REQUEST['adresa'].'"';}?> />
          &nbsp;
          <?php if (!empty($arrErrors['adresa'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Tara:</td>
        <td>&nbsp;<?
		$sql="select * from tara";
		$post=$_REQUEST['tara'];
        $select_name="tara";
        $initial_value="--Alege--";
        $selected_value="RO";
		$val1="iso";
		$val2="printable_name";
        select_($sql,$select_name,$selected_value,$initial_value,$val1,$val2,$post);
		?>        </td>
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
        <td><span class="style1">*</span>Localitate:</td>
        <td><input size="15" name="localitate" <? if (!empty($_REQUEST['localitate'])) {print 'value="'.$_REQUEST['localitate'].'"';}?> />
          &nbsp;
  <?php if (!empty($arrErrors['localitate'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td>&nbsp;Cod postal:</td>
        <td><input size="6" name="cod_postal"  <? if (!empty($_REQUEST['cod_postal'])) {print 'value="'.$_REQUEST['cod_postal'].'"';}?> />
          &nbsp;
          <?php if (!empty($arrErrors['cod_postal'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td>&nbsp;Telefon (fix): </td>
        <td><input size="15" name="tel1"  <? if (!empty($_REQUEST['tel1'])) {print 'value="'.$_REQUEST['tel1'].'"';}?>  /></td>
      </tr>
     
      <tr>
        <td colspan="2"><br />        </td>
      </tr>
      <tr>
        <td align="middle"><input type="submit" value="Trimite" name="submit" /></td>
        <td align="middle"><input type="reset" value="Reset" name="reset" /></td>
      </tr>
      <tr>
        <td colspan="2"><br />
            <input type="hidden" name="inscriere" value="utilizatori"/></td>
      </tr>
    </tbody>
  </table>
</form>		</TD>
	</TR>