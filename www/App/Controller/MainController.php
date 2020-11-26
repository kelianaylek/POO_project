<?php 
namespace App\Controller;
use App\Model\MainModel;
class MainController{
    public function __construct()
    {
        $this->model = new MainModel();
    }

    public function main(){

        $exeAllPolls = $this->model->getAlluserPolls();

        $user = $this->model->getUserName($_SESSION["id"]);

        require ROOT."/App/View/MainView.php";

    }
}
