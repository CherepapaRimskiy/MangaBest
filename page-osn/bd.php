<?php
define('DB_HOST', 'localhost');
define('DBB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'manga');

$mysql= @new mysqli(DB_HOST, DBB_USER, DB_PASSWORD, DB_NAME );
if ($mysql->connect_errno) exit('Ошибка подключения к БД');
$mysql->set_charset('utf8');
$mysql->close();
?>