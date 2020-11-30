<?php 
namespace App\Controller;
use App\Model\MainModel;
class MainController{
    public function __construct()
    {
        $this->model = new MainModel();
    }

    public function main(){

        date_default_timezone_set("Europe/Paris");
        $currentDateTime = date('Y-m-d H:i:s');

        $exeAllPolls = $this->model->getAlluserPolls($_SESSION['id'],$currentDateTime);

        $user = $this->model->getUserName($_SESSION["id"]);

        $friendsId = $this->model->friendsIdList($_SESSION["id"]);
        
        $friendsPolls = [];

       

        // Informations du sondage de l'ami
        for($i = 0; $i<count($friendsId); $i++){
            $currentFriend = $friendsId[$i]->friend_id;
            $friendCurrentName = $this->model->friendName($currentFriend);

            date_default_timezone_set("Europe/Paris");
            $currentDateTime = date('Y-m-d H:i:s');

            $friendCurrentPolls = $this->model->currentFriendsPolls($currentFriend, $currentDateTime);

            array_push($friendsPolls, $friendCurrentPolls);
        }



        require ROOT."/App/View/MainView.php";

    }
}