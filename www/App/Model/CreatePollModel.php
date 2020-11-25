<?php
namespace App\Model;

use Core\Database;

class CreatePollModel extends Database{

    function createPoll(){
        if(isset($_POST["sendPollToDb"])){
      // On prépare la requête
      $poll = $this->pdo->prepare("INSERT INTO polls (poll_title, poll_answer1, poll_answer2, poll_limit) 
      VALUES (?,?,?,?)");
    //   Insertion des données dans la table polls de la bdd
      $poll->execute(array($_POST['poll_title'],$_POST['poll_answer1'],$_POST['poll_answer2'],$_POST['poll_limit']));
     
  
      // La requete pour mettre l'id dans l'url est a faire ici
      $pollid = $this->query("SELECT poll_id FROM polls ORDER BY poll_id DESC LIMIT 1 ");
      $pollidarray = $pollid[0]->poll_id;

      header("Location: index.php?page=createdPoll&poll_id=$pollidarray");
        }
  
    }
}
