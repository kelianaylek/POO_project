<?php
namespace App\Model;

use Core\Database;


// Utiliser htmlspecialchars pour sécurité, converti les caractères spéciaux

// $_SESSION pour savoir si user est connecté etc
// il faut avoir \session_start sur index.php
// \session_destroy pour suppr la session en cas de deco


class PollModel extends Database{

    function createPoll(){
        // On vérifie le contenu des données
        // $pollArray = [
        // $pollTitle->$_POST["poll_title"], 
        // $pollAnswer1-> $_POST["poll_answer1"], 
        // $pollAnswer2->$_POST["poll_answer2"], 
        // $pollLimit->$_POST["poll_answer1"]
        // ];

        // $pollArray->pollTitle = htmlspecialchars($pollTitle);
        // $pollArray->pollAnswer1 = htmlspecialchars($pollAnswer1);
        // $pollArray->pollAnswer2 = htmlspecialchars($pollAnswer2);
        // $pollArray->pollTitle = htmlspecialchars($pollLimit);

        
        $pollTitle = $_SESSION['poll_title'];
        $pollAnswer1 = $_SESSION['poll_answer1'];
        $pollAnswer2 = $_SESSION['poll_answer2'];
        $pollLimit = $_SESSION['poll_limit'];
        
        // On prépare la requête
        $poll = $this->pdo->prepare("INSERT INTO polls(poll_title, poll_answer1, poll_answer2, poll_limit) 
        VALUES ('$pollTitle','$pollAnswer1','$pollAnswer2','$pollLimit')");
        $poll->execute();
        // $poll->fetch();

        // prepare($statement, $data = array());


    }

}


// $poll = $this->pdo->prepare("INSERT INTO polls(poll_title, poll_answer1, poll_answer2, poll_limit) 
//         VALUES ('$_POST[poll_title]','$_POST[poll_answer1]','$_POST[poll_answer2]','$_POST[poll_limit];')");
//         $poll->execute();