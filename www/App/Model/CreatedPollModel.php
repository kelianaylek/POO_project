<?php
namespace App\Model;

use Core\Database;

class CreatedPollModel extends Database{

    public function getAllPolls(){
    $AllPolls = $this->query("SELECT * FROM polls ORDER BY poll_id DESC ");

 
    // $AllPolls = $this->pdo->prepare("SELECT * FROM polls");
    // $AllPolls->execute();
    // $result = $AllPolls->fetchAll();

    require ROOT."/App/View/CreatedPollView.php";



    }
    public function getLastPoll() {
        $LastPoll = $this->query("SELECT * FROM polls ORDER BY poll_id DESC LIMIT 1 ");
       
        require ROOT."/App/View/CreatedPollView.php";
    }
}
