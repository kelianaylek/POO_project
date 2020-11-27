<?php 
namespace App\Controller;
use App\Model\FriendsModel;
class FriendsController{
    public function __construct()
    {
        $this->model = new FriendsModel();
    }


    public function friends(){

        // Affiche les id des amis
        $friendsList = $this->model->friendsList($_SESSION["id"]);
         
        // Affiche les pseudos des amis
        $friendsList = $this->model->friendsList($_SESSION["id"]);
        $friendsListlength = count($friendsList);
        $arrayOfFriendsNameArrays = [];
        for($i = 0; $i<$friendsListlength; $i++){
            $friendId= $friendsList[$i]->friend_id;

            $friendsNameArray = $this->model->findFriendName($friendId);

            array_push($arrayOfFriendsNameArrays, $friendsNameArray);
        }


        // Ajouter un ami
        if(isset($_POST["addFriend"])){
            if(!empty($_POST["researchedFriend"])){
                $allUsers = $this->model->usersList($_SESSION["id"]);
                $allUsersLength = count($allUsers);

                $message = "";

                for($i = 0; $i<$allUsersLength; $i++){
                    $userFound = $allUsers[$i]->user_name;
                    if($_POST["researchedFriend"] == $userFound){

                        // On trouve l'id de l'ami a ajouter
                        $friendAdded = $userFound;
                        $addFriend = $this->model->findFriendId($friendAdded);
                        $addedFriendId = $addFriend[0]->user_id;

                        // On trouve les id des amis actuels 
                        $friendArray = $this->model->friendsList($_SESSION["id"]);
                        $friendArrayLength = count($friendArray);

                        $alreadyAFriend;


                        for($j = 0; $j<=$friendArrayLength; $j++){
                            if($friendArray[$j]->friend_id !== $addedFriendId){
                                if($alreadyAFriend == true){
                                    $alreadyAFriend = true;
                                }else{
                                    $alreadyAFriend = false;
                                }
                            }else{
                                $alreadyAFriend = true;
                            }
                        }  
                        if($alreadyAFriend == false){
                            $addFriend = $this->model->addFriend($_SESSION["id"], $addedFriendId);
                            $addFriend = $this->model->addFriend($addedFriendId, $_SESSION["id"]);
                            $message = "Ami ajouté";
                            header("Location: ../public/index.php?page=friends");
                        }else{
                            header("Location: ../public/index.php?page=friends");


                            echo("Vous êtes déjà ami avec cet utilisateur");

                        }
                        
                    }else{
                        if($message == "Ami ajouté"){
                            $message = "Ami ajouté";
                        }else{
                            $message = "Utilisateur introuvable";
                        }
                    }
                }
                echo($message);
            }else{
                echo("Merci de chosir un nom d\'utilisateur");
            }
        }


        // Supprimer un ami
        if(isset($_POST["supprFriend"])){
            if(!empty($_POST["deletedFriend"])){

                for($i = 0; $i<count($arrayOfFriendsNameArrays); $i++){
                    if($_POST["deletedFriend"] == $arrayOfFriendsNameArrays[$i][0]->user_name){
                        if($areFriends == false){
                            $areFriends = true;
                            $friendId = $i;
                        }else{
                            $areFriends = true;
                            $friendId = $i;
                        }
                    }else{
                        $areFriend = false;
                    }
                }
                if($areFriends == true){
                    $findFriend = $this->model->findFriendId($_POST["deletedFriend"]);
                    $friendId = $findFriend[0]->user_id;

                    $supprFriend = $this->model->SupprFriend($_SESSION["id"], $friendId);
                    $supprFriend = $this->model->SupprFriend($friendId, $_SESSION["id"]);


                    header("Location: ../public/index.php?page=friends");
                    echo("ami  existant");

                }else{
                    echo("ami non existant");
                    header("Location: ../public/index.php?page=friends");
                }
            }else{
                echo("Choisissez un ami à supprimer");
            }
        }

        require ROOT."/App/View/FriendsView.php";
    }

}


?>