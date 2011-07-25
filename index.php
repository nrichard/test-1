<?php

include(dirname(__FILE__).'/inc/header.php');

    //On choisit le bon template   
    $template = $tpl->loadTemplate('layout.html');
    
    //On envoie les variables au template user
    echo $template->render(array(
        'message_bienvenue' => 'Bienvenue sur le site de Zeschool'
    ));