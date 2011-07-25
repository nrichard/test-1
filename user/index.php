<?php


include(dirname(__FILE__).'/../inc/header.php');

    //On choisit le bon template   
    $template = $tpl->loadTemplate('user.html');
    
    //On envoie les variables au template user
    echo $template->render(array(
        'pageTitle' => 'Mohand',
        'root' => dirname(__FILE__),
        'footer' => 'Mettre les informations du footer ici',
        'pseudo' => false
    ));
