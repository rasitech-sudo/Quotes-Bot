<?php
$content = file_get_contents("php://input");
$token = '2019313134:AAFvL9bbYO6aqhSfdCnmvpSFE8XhP3G4xLk';
$apiLink = "https://api.telegram.org/bot$token/"; 
$update = json_decode($content, true);
if(!@$update["message"]) $val = $update['callback_query'];
else $val = $update;
$chat_id = $val['message']['chat']['id'];
$text = $val['message']['text'];
$update_id = $val['update_id'];
$sender = $val['message']['from'];

if ($text == "/start") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Random Quotes Generator");
    return false;
} else if ($text == "/donasi") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Untuk donasi developer, silahkan kunjungi: https://saweria.co/rasitech");
    return false;
} else if ($text == "/about") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Bot ini dibuat oleh @RasiTechChannel. Bot ini diintegrasikan dengan API Quotes Random.");
    return false;
} else if ($text == "/versi") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Bot ini versi 1.0.0");
    return false;
} else if ($text == "/generate") {
 $a = file_get_contents("https://arugaz.herokuapp.com/api/randomquotes");
 $b = json_decode($a);
 $c = $a->quotes
    file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=$c");
    return false;
}
