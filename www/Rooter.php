<?php

use App\Controller\ConnexionController;
use App\Controller\SendMailController;
use App\Controller\CreatePollController;
use App\Controller\CreatedPollController;
use App\Controller\SignUpController;
use App\Controller\MainController;




if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'connexion':
            $controller = new ConnexionController();
            $controller->connexion();
            break;
        
        case 'deconnexion':
            $controller = new ConnexionController();
            $controller->deconnexion();
            break;

        case 'signUp':
            $controller = new SignUpController();
            $controller->createAccount();
            break;

        case 'main':
            $controller = new MainController();
            $controller->main();
            break;

        // La page pour créer un poll
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->render();
            break;

        // la page une fois qu'on a crée le poll
        case 'createdPoll':
            $controller = new CreatedPollController();
            $controller->render();                
            break;
    }
} else {
    $controller = new ConnexionController();
}
