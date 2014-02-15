<? session_start();

$ip = $_SERVER['REMOTE_ADDR'];

$ban = array('');
$count = count($ban);
for ($i=0; $i<$count; $i++) {
if($ip == $ban[$i]) { die("I'm sorry, you've been banned. $ip");



}
}


include_once("functions/config.php");
include_once("functions/functions.php"); 
if($_REQUEST['pag']=='iesire')
{
  iesire();
}
include_once("header.php");
include_once("menu.php");
include_once("index_main.php");
include_once("footer.php");
?>