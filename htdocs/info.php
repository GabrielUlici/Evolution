<? session_start();
ob_start();
include_once("functions/config.php");
include_once("functions/functions.php"); 
include_once("header.php");
include_once("menu.php");
if($_GET['pag']=='modifica')
{
   if($_SESSION['tip_utilizatori']=='utilizatori')//admin
   {  
     include_once("modificare_utilizatori_main.php");
     
   }
   if($_SESSION['tip_utilizatori']=='prof')//utilizatori
   {
     include_once("modificare_prof_main.php");
   }
}
elseif($_GET['pag']=='modificare_date_prof')
{
    include_once("modificare_date_prof.php");
}
elseif($_GET['pag']=='adauga_cursuri')
{
    include_once("adauga_cursuri.php");
} 
elseif($_GET['pag']=='afisare_cursuri')
{
    include_once("cursuri_disp.php");
}
elseif(isset($_GET['page']))
{
    include_once("cursuri_disp.php");
}
elseif($_GET['pag']=='citire')
{
  include_once("vizualizare_note.php");
}
else
{
    include_once("cont_main.php");
}
include_once("footer.php");
?>