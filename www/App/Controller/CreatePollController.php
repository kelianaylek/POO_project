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
            $exeCreatePoll = $this->model->createPoll();
            header("Location: index.php?page=createdPoll&poll_id=$pollidarray");
        }
        require ROOT."/App/View/CreatePollView.php";
    }




}

?>