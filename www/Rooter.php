<?php

use App\Controller\ConnexionController;
use App\Controller\CreatePollController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'connexion':
            $controller = new ConnexionController();
            $controller->render();

            break;
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->render();
            break;

        case 'createdPoll':
            $controller = new CreatedPollController();
            $controller->render();                
            break;
    }
} else {
    $controller = new ConnexionController();
}
