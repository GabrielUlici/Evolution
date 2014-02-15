<? session_start();
include_once("functions/config.php");
include_once("fuctions/functions.php");
include_once("header.php");
include_once("menu.php");


if ($_POST['submit']) {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('jS of F, Y at g:iA');
$ip = $_SERVER['REMOTE_ADDR'];

if (!$name || !$message) {
include_once("aa2.php");
}
else {
mysql_query("INSERT INTO shoutbox (id,name,email,message,date,ip) VALUES('','$name','$email','$message','$date','$ip')") or die('Error inserting into DB.');
include_once("a.php");
}
}
include_once("footer.php");

?>