<?php

require_once(__DIR__ . '/../vendor/autoload.php');

#use Jadeblok\JSmarty;

$s = new Jadeblok\JSmarty();
$s->assign('navSelect', 'home');
$s->display('index.tpl');

?>