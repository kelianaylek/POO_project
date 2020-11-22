<?php

use App\Controller\ConnexionController;
use App\Controller\PollController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'connexion':
            $controller = new ConnexionController();
            $controller->render();

            break;
        case 'poll':
            $controller = new PollController();
            $controller->render();
    }
} else {
    $controller = new ConnexionController();
}
// $controller->render();
