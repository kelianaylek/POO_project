<?php
namespace App\Model;

use Core\Database;

class ProfilModel extends Database{

    public function getUserPassword($userPassword, $userId){
        $reqUserPassword = $this->query("SELECT * FROM users WHERE user_password = '$userPassword' AND user_id = '$userId'");
        return ($reqUserPassword);
        }

}
