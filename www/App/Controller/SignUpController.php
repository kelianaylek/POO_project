<?php 
namespace App\Controller;
use App\Model\SignUpModel;
class SignUpController{
    public function __construct()
    {
        $this->model = new SignUpModel();
    }

    public function render(){
        $this->model->createAccount();
        require ROOT."/App/View/SignUpView.php";
    }

}
