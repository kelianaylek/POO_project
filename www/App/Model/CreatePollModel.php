<?php
namespace App\Model;

use Core\Database;


// Utiliser htmlspecialchars pour sécurité, converti les caractères spéciaux

// $_SESSION pour savoir si user est connecté etc
// il faut avoir \session_start sur index.php
// \session_destroy pour suppr la session en cas de deco


class CreatePollModel extends Database{

    function createPoll(){
        if(isset($_POST["sendPollToDb"])){
      // On prépare la requête
      $poll = $this->pdo->prepare("INSERT INTO polls (poll_title, poll_answer1, poll_answer2, poll_limit) 
      VALUES (?,?,?,?)");
    //   Insertion des données dans la table polls de la bdd
      $poll->execute(array($_POST['poll_title'],$_POST['poll_answer1'],$_POST['poll_answer2'],$_POST['poll_limit']));


        // Redirection vers la page du poll créé avec les réponses en temps réél
        require ROOT."/App/View/CreatedPollView.php";
        }
    }
}
