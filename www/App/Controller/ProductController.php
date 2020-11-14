<?php 
namespace App\Controller;
use App\Model\OrderModel;
class ProductController{
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function render(){
        $orders = $this->model->query("SELECT * FROM products where productCode = 'S10_1678");
        require ROOT."/App/View/ProductView.php";
    }
}


?>