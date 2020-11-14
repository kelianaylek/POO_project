<?php

use App\Controller\ConnexionController;
use App\Model\ConnexionModel;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'orders':
            $controller = new ConnexionController();
            break;

        default:
            # code...
            break;
    }
} else {
    $controller = new ConnexionController();
}
$controller->render();
