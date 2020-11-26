<?php
namespace App\Model;

use Core\Database;

class CreatedPollModel extends Database{

    public function getLastPoll() {
        $LastPoll = $this->query("SELECT * FROM polls ORDER BY poll_id DESC LIMIT 1 ");
       
        require ROOT."/App/View/CreatedPollView.php";
    }
}
