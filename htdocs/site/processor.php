<meta http-equiv="refresh" content="3; url=contact.php">
<? session_start();
$to = "ulicigabriel@gmail.com";
$subject = "Formular contact online: {$_POST['ams']['Destinatia']} ";
$from = $_POST['ams']['E-mail'];


$valid=1;
$message ='';
foreach ($_POST['ams'] as $k=>$v){
if (trim($v)=='')$valid=0;
$k = str_replace('_',' ',$k);
$message .="$k : $v<br>";
}
$message .="<hr />IP: {$_SERVER['REMOTE_ADDR']}";

 

function sndmail($from,$to,$subject,$message){
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:".$from ."\r\n";
mail($to, $subject, $message, $headers);
}

if ($valid=='1') { 
sndmail($from,$to,$subject,$message);
print('Email trimis');
}
else Print('Email ne trimis') ;


?>