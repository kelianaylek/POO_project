<?php 
namespace App\Controller;
use App\Model\ConnexionModel;
class ConnexionController{
    public function __construct()
    {
        $this->model = new ConnexionModel();
    }

    public function render(){
        $connexions = $this->model->query("SELECT * FROM Connexions");
        require ROOT."/App/View/ConnexionView.php";
    }
}


?>