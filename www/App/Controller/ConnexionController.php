<?php 
namespace App\Controller;
use App\Model\ConnexionModel;
class ConnexionController{
    public function __construct()
    {
        $this->model = new ConnexionModel();
    }

    public function render(){
        $c = $this->model->query("SELECT * FROM users where user_name ='timogo'");
        require ROOT."/App/View/ConnexionView.php";
    }
    public function redirect(){
        header("www.googme.com");
    }
}



?>