<?php
session_start();
// конфиг сайта
include './class_update.php';
include './config.php';
include './valireibls.php';
include './all.php';
// роутер
include 'modules/'.$_GET['modules'].'/'.$_GET['page'].'.php';
include 'skin/default/index.tpl';

?>