<?php


include(dirname(__FILE__).'/../../inc/header.php');

    //On choisit le bon template   
    $template = $tpl->loadTemplate('user.html');
    
    //On envoie les variables au template user
    echo $template->render(array(
        'pageTitle' => 'Titre de la page ici',
        'root' => dirname(__FILE__),
        'footer' => 'Mettre les informations du footer ici',
        'pseudo' => false,
        'tableau' => array(
            '1' => 'Lundi',
            '2' => 'Mardi',
            '3' => 'Mercredi',
            '4' => 'Jeudi',
            '5' => 'Vendredi',
            '6' => 'Samedi',
            '7' => 'Dimanche',
            )
    ));
