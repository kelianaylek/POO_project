<?php 
namespace App\Controller;
use App\Model\ProfilModel;
class ProfilController{
    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function modifyAccount(){

        $user = $this->model->getUserInfos($_SESSION["user_password"], $_SESSION["id"]);
        $userPass = $user[0]->user_password;

        if(isset($_POST['submitCurrentPassword'])){
            $passwordTried = $_POST['currentPassword'];
            $encryptedPasswordTried = md5($passwordTried);
            // Si le password correspond
            if($encryptedPasswordTried == $userPass){
                require ROOT."/App/View/ProfilView.php";
            // Si password n'est pas le bon
            }else{
                echo('Password incorrect');
            }
        }


        // Changement des infos persos
        if(isset($_POST['submitProfilChanges'])){
            $newUserName = htmlspecialchars($_POST['newUsername']);
            $newUserPassword = md5($_POST['newPassword']);
            $confirmedNewUserPassword = md5($_POST['newPasswordConfirmed']);
            if(!empty($newUserName)){
                if(!empty($_POST['newPassword'])){
                    if($newUserPassword == $confirmedNewUserPassword){
                        $userUpt = $this->model->updateUserInfos($newUserName, $newUserPassword, $_SESSION['user_password'], $_SESSION['id']);
                   

                        header("Location: ../public/index.php?page=main");

                    }else{
                        echo('Les deux mots de passe sont différents');
                    }
                }else{
                    echo('Merci de choisir un nouveau password');
                }
            }else{
                echo('Merci de choisir un nouveau username');
            }
        }



        require ROOT."/App/View/ProfilSecurityView.php";

    }
}
