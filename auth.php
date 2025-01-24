<?php
header('Content-Type: application/json');

if ($code = $_GET['code']) {

    //Таблицы пользователей
    $userTable = [
        'dir12' => ['login' => 'userDev'],
        't3st5' => ['login' => 'userTest']
    ];


    //Если код пользователя есть в таблицы, то
    if ($user = $userTable[$code]) {
        $user['code'] = $code;
        $user['success'] = true;
        echo json_encode($user);
        exit();
    }

    //Данные в случае неудачи
    $array = ['success' => false, 'login' => ''];
    echo json_encode($array);
}
