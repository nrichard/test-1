<?php

session_start();

require_once(dirname(__FILE__).'/../lib/twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/../templates');
    $tpl = new Twig_Environment($loader, array(
//      'cache' => '/compilation_cache',
      'debug' => 'true',
      'cache' => 'false',
    ));
    
    
?>

