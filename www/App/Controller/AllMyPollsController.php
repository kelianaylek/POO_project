<?php 
namespace App\Controller;
use App\Model\AllMyPollsModel;
class AllMyPollsController{
    public function __construct()
    {
        $this->model = new AllMyPollsModel();
    }


    public function displayAllMyPolls(){

        $allMyPolls = $this->model->myPolls($_SESSION['id']);

        require ROOT."/App/View/AllMyPollsView.php";
    
    }
    
}


?>