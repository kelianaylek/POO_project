<?php 
namespace App\Controller;
use App\Model\ConnexionModel;
class ConnexionController{
    public function __construct()
    {
        $this->model = new ConnexionModel();
    }


    public function connexion(){
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
        require ROOT."/App/View/DeconnexionView.php";
    }

    
}


?>