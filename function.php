<?php
function sendMessage($chatID, $messaggio, $token) {
       echo "sending message to " . $chatID . "\n";


       $url = "https://api.telegram.org/" . $token . "/sendMessage?chat_id=" . $chatID;
       $url = $url . "&text=" . urlencode($messaggio);
       $ch = curl_init();
       $optArray = array(
               CURLOPT_URL => $url,
               CURLOPT_RETURNTRANSFER => true
       );
       curl_setopt_array($ch, $optArray);
       $result = curl_exec($ch);
       curl_close($ch);
};
$token = "5459597189:AAFuvYJyQ1WuvVivFchA4m9g44Gr-gapDUo";
$chati = "5343730019";

sendMessage($chati,$message,$token);
sendMessage($chat,$message,$token);
?>