<?php

include(dirname(__FILE__).'/../../inc/header.php');

    //On charge le modèle membre_prof
    require_once dirname(__FILE__).'/../../modeles/membre_prof.class.php';
    
    $requete = Doctrine_Query::create()
            ->from('membre_prof')
            ->execute();
    

    

    //On choisit le bon template   
    $template = $tpl->loadTemplate('prof.html');
    
    //On envoie les variables au template user
    echo $template->render(array(
        'variable' => $requete
    ));
    
    