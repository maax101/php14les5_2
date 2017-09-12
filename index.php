<?php
require_once 'settings.php';
if (!auth()) {
	header('Location: login.php');	
}

$user = $_SESSION['user'];
echo "HI, $user !";
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array('cache' => 'tmp/cache','auto_reload' => true,));
$template = $twig->loadTemplate('index.twig');
$params = ['res' => $res];
$template->display($params);
?>
