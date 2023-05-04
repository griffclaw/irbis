<?php
$link = mysqli_connect('localhost', 'root', '', 'irbis');
if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit; }
$link->set_charset("utf8");

?>