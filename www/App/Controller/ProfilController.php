<?php 
namespace App\Controller;
use App\Model\ProfilModel;
class ProfilController{
    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    // if user want to change his personnal informations 
    public function modifyAccount(){
        // get all user's infos 
        $user = $this->model->getUserInfos($_SESSION["user_password"], $_SESSION["id"]);
        $userPass = $user[0]->user_password;

        // if user click on the submit btn 
        if(isset($_POST['submitCurrentPassword'])){
            $passwordTried = $_POST['currentPassword'];
            $encryptedPasswordTried = md5($passwordTried);
            // if user write the correct password 
            if($encryptedPasswordTried == $userPass){
                require ROOT."/App/View/ProfilView.php";
            // if the two password are different
            }else{
                echo('Password incorrect');
            }
        }


        // user update his personnal informations
        if(isset($_POST['submitProfilChanges'])){
            $newUserName = htmlspecialchars($_POST['newUsername']);
            $newUserPassword = md5($_POST['newPassword']);
            $confirmedNewUserPassword = md5($_POST['newPasswordConfirmed']);
            // if user write a new username 
            if(!empty($newUserName)){
                // if user write a new password 
                if(!empty($_POST['newPassword'])){
                    // if the confirmed password macth with the password 
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
