<?php

use App\Controller\ConnexionController;
use App\Controller\SendMailController;
use App\Controller\CreatePollController;
use App\Controller\CreatedPollController;
use App\Controller\SignUpController;
use App\Controller\MainController;
use App\Controller\ProfilController;
use App\Controller\FriendsController;
use App\Controller\AllMyPollsController;

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

        case 'profil':
            $controller = new ProfilController();
            $controller->modifyAccount();
            break;

        case 'main':
            $controller = new MainController();
            $controller->main();
            break;

        case 'friends':
            $controller = new FriendsController();
            $controller->friends();
            break;

        // La page pour créer un poll
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->poll();
            break;

        // la page une fois qu'on a crée le poll
        case 'createdPoll':
            $controller = new CreatedPollController();
            $controller->createdPoll();   
            $controller->saveMessage();
            // $controller->getAllMessages();                
            break;

        case 'allMyPolls':
            $controller = new AllMyPollsController();
            $controller->displayAllMyPolls();                
            break;

    }
} else {
    $controller = new SignUpController();
}
