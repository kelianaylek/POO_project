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

        $friendsId = $this->model->friendsIdList($_SESSION["id"]);
        
        $friendsPolls = [];

        // Informations du sondage de l'ami
        for($i = 0; $i<count($friendsId); $i++){
            $currentFriend = $friendsId[$i]->friend_id;
            $friendCurrentName = $this->model->friendName($currentFriend);
            $friendCurrentPolls = $this->model->currentFriendsPolls($currentFriend);
            array_push($friendsPolls, $friendCurrentPolls);

        }

        // Amis online

        require ROOT."/App/View/MainView.php";

    }
}
