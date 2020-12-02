<?php 
namespace App\Controller;
use App\Model\SignUpModel;
class SignUpController{
    public function __construct()
    {
        $this->model = new SignUpModel();
    }

    public function createAccount(){

        // if user submit the account creation 
        if(isset($_POST["submit_signUp"])){
            $userName = htmlspecialchars($_POST['username']);
            $userMail = htmlspecialchars($_POST['mail']);
            $userPassword = md5($_POST['pass']);
            $userPasswordConfirmed = md5($_POST['confirmPass']);

            // Check if user has choosen an username 
            if(!empty($_POST['username'])){
                // Check if user has choosen a mail
                if((!empty($userMail))){
                    // Check if user has choosen a password
                    if(!empty($userPassword)){
                        if($userPassword == $userPasswordConfirmed){
                            // The account is created and user is redirect to connexion view 
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
