<?php
namespace App\Model;

use Core\Database;

class CreatePollModel extends Database{

    function createPoll($pollCreator){
      $poll = $this->pdo->prepare("INSERT INTO polls (poll_title, poll_answer1, poll_answer2, poll_limit, accepted_id, poll_creator) 
      VALUES (?,?,?,?,?,?)");
      $poll->execute(array($_POST['poll_title'],$_POST['poll_answer1'],$_POST['poll_answer2'],$_POST['poll_limit'],$_SESSION['id'],$pollCreator));
     
      $pollid = $this->query("SELECT poll_id FROM polls ORDER BY poll_id DESC LIMIT 1 ");
      $pollidarray = $pollid[0]->poll_id;
    }
}
