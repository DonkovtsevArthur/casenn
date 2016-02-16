<?php
define('SKIN','default');

//подключение к БД
$db = mysqli_connect('localhost','root','723056');
$r = mysqli_select_db($db ,'casenn');

?>