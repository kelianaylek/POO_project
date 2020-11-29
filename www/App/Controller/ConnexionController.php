<?php 
namespace App\Controller;
use App\Model\ConnexionModel;
class ConnexionController{
    public function __construct()
    {
        $this->model = new ConnexionModel();
    }


    public function connexion(){

        $isOnline = 0;

        if(!empty($_POST['submit_connexion'])){
            $mailConnect = htmlspecialchars($_POST['mail']);
            $passwordConnect = md5($_POST['pass']);

            if((!empty($_POST['mail']))){
                if(!empty($_POST['pass'])){
                    $reqLogin = $this->model->login($mailConnect, $passwordConnect);
                    $reqLoginCount = count($reqLogin);
                    if($reqLoginCount >= 1){
                        $_SESSION['id'] = $reqLogin[0]->user_id;
                        $_SESSION['user_name'] = $reqLogin[0]->user_name;
                        $_SESSION['user_mail'] = $reqLogin[0]->user_email;
                        $_SESSION['user_password'] = $reqLogin[0]->user_password;

                        $isOnline = 1;

                        $goOnline = $this->model->isOnline($_SESSION['id'], $isOnline);  
                                                
                        header("Location: ../public/index.php?page=main");
                    }else{
                        echo('Echec de la connexion');
                    }
                }else{
                    echo('rentre un password');
                } 
            }else{
                echo('rentre un mail correct');
            }
        }
        require ROOT."/App/View/ConnexionView.php";
        }
   

    public function deconnexion(){
        session_destroy();
        $isOnline = 0;
        $goOffline = $this->model->isOnline($_SESSION['id'], $isOnline); 

        require ROOT."/App/View/DeconnexionView.php";
    }

    
}


?>