<?
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->$message;
$chat_id = $message->$chat->id;
$token = '2075414781:AAEhP9lGPjdSjkE9YloAbBhaf4pmgotQ0Ik';
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=hi");

