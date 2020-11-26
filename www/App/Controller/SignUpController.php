<?php 
namespace App\Controller;
use App\Model\SignUpModel;
class SignUpController{
    public function __construct()
    {
        $this->model = new SignUpModel();
    }

    public function createAccount(){

        if(isset($_POST["submit_signUp"])){
            $userName = htmlspecialchars($_POST['username']);
            $userMail = htmlspecialchars($_POST['mail']);
            $userPassword = md5($_POST['pass']);
            $userPasswordConfirmed = md5($_POST['confirmPass']);

            if(!empty($_POST['username'])){
                if((!empty($userMail))){
                    if(!empty($userPassword)){
                        if($userPassword == $userPasswordConfirmed){
                            $this->model->reqCreateAccount($userName, $userMail, $userPassword);
                            header("Location: ../public/index.php?page=connexion");

                        }else{
                            echo('password pas pareil');
                        }
                    }else{
                        echo('password pas défini');
                    }
                }else{
                    echo('Email pas défini');
                }
            }else{
                echo('Username pas défini');
            }   
        }
        require ROOT."/App/View/SignUpView.php";
    }
}
