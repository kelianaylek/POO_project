<?php
namespace App\Model;

use Core\Database;

class CreatedPollModel extends Database{

    public function getPoll($pollId) {
        $LastPoll = $this->query("SELECT * FROM polls WHERE poll_id = '$pollId'");
       return ($LastPoll);
    }
}
