<?php 
namespace App\Controller;
use App\Model\AllMyPollsModel;
class AllMyPollsController{
    public function __construct()
    {
        $this->model = new AllMyPollsModel();
    }



    public function displayAllMyPolls(){

        // Get all user polls 
        $allMyPolls = $this->model->myPolls($_SESSION['id']);

        // Display user's poll 
        require ROOT."/App/View/AllMyPollsView.php";
    
    }
    
}


?>