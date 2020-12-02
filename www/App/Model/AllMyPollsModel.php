<?php
namespace App\Model;

use Core\Database;

class AllMyPollsModel extends Database{

    public function myPolls($me){
        // Select all user's polls 
        $reqAllMyPolls = $this->query("SELECT * FROM polls WHERE accepted_id = '$me' ORDER BY poll_id DESC ");
        return ($reqAllMyPolls);
    }


}

