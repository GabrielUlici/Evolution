
<TR>
		<TD COLSPAN=8>
			<IMG SRC="images/207_09.gif" WIDTH=760 HEIGHT=4 ALT=""></TD>
	</TR>
	<TR>
		<TD ROWSPAN=2 bgcolor="#333333" valign="top"><table width="100%" border="0">
          <tr>
            <td >&nbsp;&nbsp;<a href="" class="printff"> </a> </td>
          </tr>
          
          <? session_start();
		    if(isset($_SESSION['iuser']))
			{
			  ?>
			  <tr>
            <td>&nbsp;&nbsp;<a href="cont.php" class="printff">Informati</a></td>
            </tr> 
			  <tr>
            <td>&nbsp;&nbsp;<a href="cursuri_disp.php" class="printff">Cursuri </a></td>
          </tr>
			  <tr>
            <td>&nbsp;&nbsp;<a href="test.php" class="printff">Teste</a> </td>
          </tr>
             <tr>
            <td>&nbsp;&nbsp;<a href="forum.php" class="printft">Chat</a> </td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;</td>
            </tr>
			<tr>
            <td>&nbsp;&nbsp;<a href="index.php?pag=iesire" class="printff">Iesire</a></td>
            </tr>
			 	  <?
			}
			else
			{
			?> 
			<tr>
            <td></td>
            </tr>
            <tr>
            <td>&nbsp;&nbsp;<a href="inscriere.php" class="printff">Inscriere</a></td>
          </tr>
			<tr>
            <td>&nbsp;&nbsp;<a href="recuperare.php" class="printff">Am uitat parola</a></td>
            </tr>
			<?
			
			}
		  ?>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td>&nbsp;&nbsp;<span class="printff">Utilizator</span>:</td>
          </tr>
          <tr>
            <td align="center">
			<form name="form1" method="post" action="cont.php">
            
                <input type="text" name="user">
              
                        </td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;<span class="printff">Parola:</span></td>
          </tr>
          <tr>
            <td align="center"><input type="password" name="parola"></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></form></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;<span class="printff">Cautare rapida:</span></td>
          </tr>
          <tr>
		 	  <form name="form1" method="get" action="cursuri_disp.php">
            <td align="center" ><input type="text" name="search" ></td>
          </tr>
          <tr>
            <td >&nbsp;&nbsp;<input type="submit" name="Submit2" value="Submit"></form>
            
</td>
</tr>
          
        </table>			</TD>
          
		<TD>
			<A HREF="#">
				<IMG SRC="images/207_11.gif" WIDTH=1 HEIGHT=34 BORDER=0 ALT=""></A></TD>
		<TD COLSPAN=6 background="images/207_12.gif">
		
			</TD>
	</TR>
		
	