<?php
namespace App\Model;

use Core\Database;

class ProfilModel extends Database{

    public function getUserInfos($userPassword, $userId){
        $reqUserInfos = $this->query("SELECT * FROM users WHERE user_password = '$userPassword' AND user_id = '$userId'");
        return ($reqUserInfos);
    }

    public function updateUserInfos($newUserName, $newUserPassword, $userPassword, $userId){
        $udpateUserInfos = $this->query("UPDATE users SET user_name = '$newUserName', user_password = '$newUserPassword' WHERE user_password = '$userPassword' AND user_id = '$userId'");
        return ($udpateUserInfos);
    }

    

}
