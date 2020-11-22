<?php
namespace App\Model;

use Core\Database;


// Utiliser htmlspecialchars pour sécurité, converti les caractères spéciaux

// $_SESSION pour savoir si user est connecté etc
// il faut avoir \session_start sur index.php
// \session_destroy pour suppr la session en cas de deco


class PollModel extends Database{

    function createPoll(){
        if(isset($_POST["test"])){
      // On prépare la requête
      $poll = $this->pdo->prepare("INSERT INTO polls (poll_title, poll_answer1, poll_answer2, poll_limit) 
      VALUES (?,?,?,?)");
      $poll->execute(array($_POST['poll_title'],$_POST['poll_answer1'],$_POST['poll_answer2'],$_POST['poll_limit']));

      // $poll->fetch();
      // prepare($statement, $data = array());
        }
    }
}


// $poll = $this->pdo->prepare("INSERT INTO polls(poll_title, poll_answer1, poll_answer2, poll_limit) 
//         VALUES ('$_POST[poll_title]','$_POST[poll_answer1]','$_POST[poll_answer2]','$_POST[poll_limit];')");
//         $poll->execute();