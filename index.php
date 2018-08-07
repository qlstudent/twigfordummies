<?php 
require_once 'vendor/autoload.php';
$sravan = new \Sravan\User();
$sravan->say_bye();


$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));
