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

        //Insérer les données du sondage dans la bdd
        $this->model->createPoll();
    }

}



?>