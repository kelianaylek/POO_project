<?php
namespace App\Model;

use Core\Database;

class MainModel extends Database{

    
    public function getAllUserPolls(){
        $reqAllPolls = $this->query("SELECT * FROM polls ORDER BY poll_id DESC ");
        return ($reqAllPolls);
        }

    public function getUserName($userId){
        $reqUserName = $this->query("SELECT * FROM users WHERE user_id = '$userId'");
        return ($reqUserName);
        }
}
