<?php 
namespace App\Controller;
use App\Model\ProfilModel;
class ProfilController{
    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function modifyAccount(){

        $userPassword = $this->model->getUserPassword($_SESSION["user_password"], $_SESSION["id"]);
        $justUserPass = $userPassword[0]->user_password;

        
        if(isset($_POST['passwordTried'])){
            // $passwordTried = $_POST['passwordTried'];
            $encryptedPasswordTried = md5($_POST['passwordTried']);
            // Si le password correspond
            if($encryptedPasswordTried == $justUserPass){
                echo($encryptedPasswordTried);
                require ROOT."/App/View/ProfilView.php";
            }else{
                echo($encryptedPasswordTried);

                echo('Password incorrect');
            }
        }

        require ROOT."/App/View/ProfilSecurityView.php";
    }
}
