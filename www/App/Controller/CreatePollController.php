<?php 
namespace App\Controller;
use App\Model\CreatePollModel;

class CreatePollController{

    public function __construct()
    {
        $this->model = new CreatePollModel();
    }

    public function render(){
        require ROOT."/App/View/CreatePollView.php";

        $this->model->createPoll();
    }




}

?>