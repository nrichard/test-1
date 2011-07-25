<?php

session_start();

//On charge Doctrine
require_once dirname(__FILE__).'/../lib/Doctrine/Doctrine.php';
spl_autoload_register(array('Doctrine_Core', 'autoload'));

    //On se connecte à la BDD
    $dsn = 'mysql://root@localhost/test';
    $connexion = Doctrine_Manager::connection($dsn);
    //On utilise exclusivement de l'UTF-8
    $connexion->execute('SET CHARACTER SET utf8');



//On charge Twig et on le configure
require_once(dirname(__FILE__).'/../lib/twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/../templates');
    $tpl = new Twig_Environment($loader, array(
    //'cache' => '/compilation_cache',
      'debug' => 'true',
      'cache' => 'false',
    ));
    
    
?>

