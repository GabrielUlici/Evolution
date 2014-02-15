<?php session_start(); 
$target = "cursuri/"; 
$target = $target . basename( $_FILES['upload']['name']) ; 
$ok=1; 
if(move_uploaded_file($_FILES['upload']['tmp_name'], $target)) 
{
echo "Fisierul ". basename( $_FILES['uploadfile']['name']). " a fost uploadat";
} 
else {
echo "Sorry, there was a problem uploading your file.";
}
?>