<?php 
namespace App\Controller;
use App\Model\CreatedPollModel;

class CreatedPollController{

    public function __construct()
    {
        $this->model = new CreatedPollModel();
    }

    public function createdPoll(){

        $pollId = $_GET["poll_id"];

        // var_dump($pollId);

        $getPoll = $this->model->getPoll($pollId);
        
        // var_dump($getPoll);

        require ROOT."/App/View/CreatedPollView.php";

    }

    


}

?>