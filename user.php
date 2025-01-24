<?php
$userIP = $_SERVER['REMOTE_ADDR'];
$time = time();

$json = ['time' => $time, 'ip' => $userIP];
echo json_encode($json);
