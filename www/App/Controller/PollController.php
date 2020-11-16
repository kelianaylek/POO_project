<?php 
namespace App\Controller;
use App\Model\PollModel;
class PollController{
    public function __construct()
    {
        $this->model = new PollModel();
    }

    public function render(){
        $c = $this->model->query("SELECT * FROM users where user_name ='timogo'");
        require ROOT."/App/View/PollView.php";
    }

}

