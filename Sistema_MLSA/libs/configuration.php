<?php

require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'public/');

$config->set('dbhost', '163.178.107.10');
$config->set('dbname', 'BD_SistemaMLSA');
$config->set('dbuser', 'laboratorios');
$config->set('dbpass', 'KmZpo.2796');
?>

