<?php 
namespace App\Controller;
use App\Model\CreatePollModel;

class CreatePollController{

    public function __construct()
    {
        $this->model = new CreatePollModel();
    }

    public function poll(){
        if(isset($_POST["sendPollToDb"])){
            if(!empty($_POST["poll_title"])){
                if(!empty($_POST["poll_answer1"])){
                    if(!empty($_POST["poll_answer2"])){

                        // date choisie par user pour fin du sondage
                        $limitDate = $_POST['poll_limit_years'] ."-". $_POST['poll_limit_months'] ."-". $_POST['poll_limit_days'] ." ". $_POST['poll_limit_hours'] .":". $_POST['poll_limit_min'] .":". $_POST['poll_limit_sec'];

                        // Date actuelle
                        date_default_timezone_set("Europe/Paris");
                        $currentDateTime = date('Y-m-d H:i:s');

                        $selectedDate = date_create($limitDate);
                        $currentDate = date_create($currentDateTime);

                        // On peut choisir seulement une date future
                        if($selectedDate > $currentDate){
                            $exeCreatePoll = $this->model->createPoll($_SESSION['user_name'], $limitDate);

                            $exePollId = $this->model->findPollId();
                
                            $pollId = $exePollId[0]->poll_id;
                
                            header("Location: index.php?page=createdPoll&poll_id=$pollId");


                        }else{
                            echo("Merci de choisir une date future");
                        }
                    }else{
                        echo("Merci de remplir votre second choix");
                    }
                }else{
                    echo("Merci de remplir votre premier choix");
                }
            }else{
                echo("Merci de donner un titre à votre sondage");
            }

            
        }
        

        require ROOT."/App/View/CreatePollView.php";
    }




}

?>