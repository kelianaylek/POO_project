<?php

use App\Controller\ConnexionController;
use App\Model\ConnexionModel;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'connexion':
            $controller = new ConnexionController();
            break;
        case 'kaka':
            $controller = new ConnexionController();
            echo "kaka";

        default:
            # code...
            break;
    }
} else {
    $controller = new ConnexionController();
}
$controller->render();
