<?php 
require_once 'vendor/autoload.php';
$sravan = new \Sravan\User();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$template = $twig->load('sravan.html');
echo $template->render(array('title' => $sravan->say_bye(), 'go' => 'See you tomorrow'));