<?php
// Токен телеграм бота
$tg_bot_token = "5671003310:AAEP-x7Aemdpp3o_oWBtHArr84JQmYZEmDQ";
// ID Чата
$chat_id = "-832258563";

$text .= $_SERVER['REMOTE_ADDR'];

$param = [
  "chat_id" => $chat_id,
  "text" => $text
];

$url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendMessage?" . http_build_query($param);
var_dump($text);

file_get_contents($url);
?>
