		  <? session_start();
		  $arrErrors = array();
		  //print $_SESSION['id'];
  $sql_pers="select * from prof where id='".$_SESSION['id']."'";
  $result_pers=mysql_query($sql_pers);
  while($row=mysql_fetch_array($result_pers))
    {
	    $db_id=$row['id'];
        $db_iuser=$row['user'];
        $db_pass=$row['pass'];
        $db_nume=$row['nume'];
        $db_prenume=$row['prenume'];
        $db_email=$row['email'];
        $db_zi=$row['dn_zi'];
		$db_luna=$row['dn_luna'];
		$db_an=$row['dn_an'];
        $db_sex=$row['sex'];
        $db_adresa=$row['adresa'];
        $db_tara=$row['tara'];
        $db_judet=$row['judet'];
        $db_localitate=$row['localitate'];
        $db_cod_postal=$row['cod_postal'];
        $db_tel1=$row['tel1'];
       
       }

    if (!empty($_POST)) {

    if ($_POST['user']=='')
        $arrErrors['user']='x';
    if ($_POST['pass']=='')
        $arrErrors['pass']='x';
    if ($_POST['pass2']=='')
        $arrErrors['pass2']='x';
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
	if ($_POST['localitate']=='x')
        $arrErrors['localitate']='X';
	   
    if (count($arrErrors) == 0) {

  $psqlx="update prof set iuser='".$_POST['user']."',pass='".$_POST['pass']."',nume='".$_POST['nume']."',prenume='".$_POST['prenume']."',email='".$_POST['email']."',dn_zi='".$_POST['dn_zi']."',dn_luna='".$_POST['dn_luna']."',dn_an='".$_POST['dn_an']."',sex='".$_POST['sex']."',adresa='".$_POST['adresa']."',tara='".$_POST['tara']."',judet='".$_POST['judet']."',localitate='".$_POST['localitate']."',cod_postal='".$_POST['cod_postal']."',tel1='".$_POST['tel1']."'where id='".$db_id."'";
$result=mysql_query($psqlx) or die("Error INSERT   x");
	header('Location: reusire.php');
	ob_end_flush();
       // $sql="update iuser set code='".$code."',verify='0' where id='".$_SESSION['id']."'";
	  //$query = "UPDATE user SET password = PASSWORD('newpass')". "WHERE user = 'phpcake'";

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
        // Get each error and add it to the error string
        // as a list item.
        foreach ($arrErrors as $error) {
            $strError .= "<li>$error</li>";
        }
        $strError.= '</td></tr></tbody></table></td></tr></tbody></table>';

    }
}  
ob_end_flush();
$sql_pers="select * from prof where id='".$_SESSION['id']."'";
$result=mysql_query($sql_pers);
while($row=mysql_fetch_array($result))
{
  $iuser=$row['iuser'];
  $pass=$row['pass'];
  $nume=$row['nume'];
  $prenume=$row['prenume'];
  $email=$row['email'];
  
  $dn_zi=$row['dn_zi'];
  $dn_luna=$row['dn_luna'];
  $dn_an=$row['dn_an'];
  $sex=$row['sex'];
  $adresa=$row['adresa'];
  $tara=$row['tara'];
  $judet=$row['judet'];
  $localitate=$row['localitate'];
  $cod_postal=$row['cod_postal'];
  $tel1=$row['tel1'];
  
}
?>

<TR>
		<TD COLSPAN=2 background ="images/207_13.gif" WIDTH=53 HEIGHT=335 ALT=""><h2>&nbsp;</h2>
	    </TD>
		<TD COLSPAN=5 align="center" valign="top" class="smallheader"><h2>Modificare cont Utilizator</h2>
		  <hr />

		 
* - informatii obligatorii
<form method="post" action="cont.php?pag=modifica" >
  <table cellspacing="5" cellpadding="0" border="0" >
    <tbody>
      <tr>
        <td width="155"><span class="style1">*</span>Utilizator:</td>
        <td width="472"><input size="15" name="user"<? 
		if (!empty($_REQUEST['user'])) 
		{
		   print 'value="'.$_REQUEST['user'].'"';
		}
		elseif(!empty($user))
		{
		  print 'value="'.$iuser.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['user'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Parola:</td>
        <td><input type="password" size="15" value="" name="pass" />&nbsp;
		<?php 
		if (!empty($arrErrors['pass'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Confirmare parola:</td>
        <td><input type="password" size="15" value="" name="pass2" />&nbsp;<?php if (!empty($arrErrors['pass2'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Nume:</td>
        <td><input name="nume"<? 
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
        <td><span class="style1">*</span>Prenume:</td>
        <td><input name="prenume"<? 
		if (!empty($_REQUEST['prenume'])) 
		{
		print 'value="'.$_REQUEST['prenume'].'"';
		}
		elseif(!empty($prenume))
		{
		  print 'value="'.$prenume.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['prenume'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Email:</td>
        <td><input size="30" name="email" <? 
		if (!empty($_REQUEST['email'])) 
		{
		 print 'value="'.$_REQUEST['email'].'"';
		}
		 elseif(!empty($email))
		{
		  print 'value="'.$email.'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['email'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Data nasterii:</td>
        <td><?
		$sql_dnl="select * from dn_luna";
		if(isset($dn_luna))
		{
		  $post_dnl=$dn_luna;
		}
		else
		{
		  $post_dnl=$_REQUEST['dn_luna'];
		}
        $select_name_dnl="dn_luna";
        $initial_value_dnl=" Luna ";
        $selected_value_dnl="";
		$val1_dnl="id";
		$val2_dnl="val";
        select_($sql_dnl,$select_name_dnl,$selected_value_dnl,$initial_value_dnl,$val1_dnl,$val2_dnl,$post_dnl);
		?>
		&nbsp;<?php if (!empty($arrErrors['dn_luna'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?>&nbsp;
          <?
		$sql_dnz="select * from dn_zi";
		if(isset($dn_zi))
		{
		  $post_dnz=$dn_zi;
		}
		else
		{
		  $post_dnz=$_REQUEST['dn_zi'];
		}
        $select_name_dnz="dn_zi";
        $initial_value_dnz=" Ziua ";
        $selected_value_dnz="";
		$val1_dnz="id";
		$val2_dnz="val";
        select_($sql_dnz,$select_name_dnz,$selected_value_dnz,$initial_value_dnz,$val1_dnz,$val2_dnz,$post_dnz);
		?>
		&nbsp;<?php if (!empty($arrErrors['dn_zi'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?>&nbsp;
          <?
		$sql_dna="select * from dn_an";
		if(isset($dn_an))
		{
		  $post_dna=$dn_an;
		}
		else
		{
		  $post_dna=$_REQUEST['dn_an'];
		}
        $select_name_dna="dn_an";
        $initial_value_dna=" Anul ";
        $selected_value_dna="";
		$val1_dna="id";
		$val2_dna="val";
        select_($sql_dna,$select_name_dna,$selected_value_dna,$initial_value_dna,$val1_dna,$val2_dna,$post_dna);
		?> &nbsp;<?php if (!empty($arrErrors['dn_an'])) echo '<img src="images/icon-error_sm.gif" alt="">'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Sex:</td>
        <td>
		<?
		if(isset($sex))
		  {
		     switch ($sex)
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
		  elseif($_REQUEST['sex'])
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
            </INPUT>
            <input type="radio" value="f" name="sex" />
          Femeie
          </INPUT>      
		  <?
		  }
		  ?>		    </td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Adresa: </td>
        <td><input size="50" name="adresa" <? 
		if (!empty($adresa)) 
		{
		   print 'value="'.$adresa.'"';
		}
		elseif (!empty($_REQUEST['adresa'])) 
		{
		   print 'value="'.$_REQUEST['adresa'].'"';
		}
		 ?> />&nbsp;<?php if (!empty($arrErrors['adresa'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td><span class="style1">*</span>Tara:</td>
        <td>
		<?
		$sql="select * from tara";
		if(isset($tara))
		{
		  $post=$tara;
		}
		else
		{
		  $post=$_REQUEST['tara'];
		}
		//$post=$_REQUEST['tara'];
        $select_name="tara";
        $initial_value="";
        $selected_value="RO";
		$val1="iso";
		$val2="printable_name";
        select_($sql,$select_name,$selected_value,$initial_value,$val1,$val2,$post);
		?>		</td>
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
		?> /> &nbsp;<?php if (!empty($arrErrors['judet'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?>  
      <tr>
        <td><span class="style1">*</span>Localitate:</td>
        <td><input size="15" name="localitate" <?
		if (!empty($localitate)) 
		{
		  print 'value="'.$localitate.'"';
		} 
		elseif (!empty($_REQUEST['localitate'])) 
		{
		  print 'value="'.$_REQUEST['localitate'].'"';
		}
		?> /> &nbsp;<?php if (!empty($arrErrors['localitate'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?>   </td>
      </tr>
      <tr>
        <td>&nbsp;Cod postal:</td>
        <td><input size="6" name="cod_postal"  <?
		if (!empty($cod_postal)) 
		{
		  print 'value="'.$cod_postal.'"';
		} 
		elseif (!empty($_REQUEST['cod_postal'])) 
		{
		  print 'value="'.$_REQUEST['cod_postal'].'"';
		}
		?> />&nbsp;<?php if (!empty($arrErrors['cod_postal'])) echo '<img src="images/icon-error_sm.gif" alt=""><br /><span class="errortext"></span>'; ?></td>
      </tr>
      <tr>
        <td>&nbsp;Telefon : </td>
        <td><input size="15" name="tel1"  <?
		if (!empty($tel1)) 
		{
		  print 'value="'.$tel1.'"';
		} 
		elseif (!empty($_REQUEST['tel1'])) 
		{
		  print 'value="'.$_REQUEST['tel1'].'"';
		}
		  ?>  /></td>
      </tr>
      <tr>
        <td colspan="2"><br />           </td>
      </tr>
      <tr>
        <td align="middle"><input type="submit" value="Trimite" name="submit" /></td>
        <td align="middle"><input type="reset" value="Reset" name="reset" /></td>
      </tr>
	  <tr>
        <td colspan="2"><br />           <input type="hidden" name="inscriere" value="persoane"/></td>
      </tr>
    </tbody>
  </table>
</form>		</TD>
	</TR>