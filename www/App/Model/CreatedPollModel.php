<?php
namespace App\Model;

use Core\Database;

class CreatedPollModel extends Database{

    public function getAllPolls(){
        $AllPolls = $this->pdo->query("SELECT * FROM polls");
    }

}
