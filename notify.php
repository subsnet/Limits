<?php
$user = $_GET['user'];
$times = $_GET['times'];

$chatId = '-4563211245'; //Группа или чат в который нужно отправлять данные
$telegramBotToken = ''; //Ваш токен от бота
$text = urlencode("Пользователь с логином <b>$user</b> \n Запустил браузер  <b>$times</b> раз в течении 24 часов.");

//Простой запрос к телеграм api
file_get_contents("https://api.telegram.org/bot$telegramBotToken/sendMessage?text=$text&chat_id=$chatId&parse_mode=HTML");

echo json_encode([
    'ok' => true
]);