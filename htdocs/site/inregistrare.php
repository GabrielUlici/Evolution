<? session_start();
include_once("functions/config.php");
include_once("functions/functions.php"); 
include_once("header.php");
include_once("menu.php");

$sql_c="
insert into cursuri (idcurs,iuser,denumire,descriere,ore_alocate,data_test,date1)values('".$_SESSION['idcurs']."','".$_SESSION['nume']."','".$_REQUEST['denumire']."','".$_REQUEST['descriere']."','".$_REQUEST['ore_alocate']."','".$_REQUEST['data_test']."',now())";
$result=mysql_query($sql_c)or die('Insert error');
header('Location: cont.php');
include_once("aa.php");
include_once("footer.php");

?>
