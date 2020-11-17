<?php 
namespace App\Controller;
use App\Model\PollModel;

class PollController{

    public function __construct()
    {
        $this->model = new PollModel();
    }

    // Appeler la vue après la création du sondage
    // public function renderView(){
    //     require ROOT."/App/View/PollView.php";
    // }

    public function render(){

        $polls = $this->model->query("SELECT `poll_id`, `poll_title`, `poll_answer1`, `poll_answer2`, `poll_link`, `poll_top_percent`, `created_at`, `poll_limit` FROM `poo_db`.`polls`");

        require ROOT."\App\View\PollView.php";

        $this->model->createPoll();


    }

}



?>