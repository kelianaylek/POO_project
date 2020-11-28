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

        // var_dump($friendsId);
        // var_dump(count($friendsId));
        // var_dump($friendsId[1]->friend_id);

        $friendsPolls = [];

        // Informations du sondage de l'ami
        for($i = 0; $i<count($friendsId); $i++){
            $currentFriend = $friendsId[$i]->friend_id;

            $friendCurrentName = $this->model->friendName($currentFriend);

            // var_dump($currentFriend);

            $friendCurrentPolls = $this->model->currentFriendsPolls($currentFriend);

            // $friendCurrentPolls[$i]->append($friendCurrentName);

            // foreach($friendCurrentPolls as $friendPoll) :
            //     // array_push($friendPoll, $friendCurrentName);
            //     $friendPoll->append($friendCurrentName);
            // endforeach;


            // var_dump($friendCurrentPolls);


            array_push($friendsPolls, $friendCurrentPolls);

        }

        // var_dump($friendCurrentPolls);

        // var_dump($friendCurrentPolls);


        require ROOT."/App/View/MainView.php";

    }
}
