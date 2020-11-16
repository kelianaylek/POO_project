<?php
namespace App\Model;

use Core\Database;

class PollModel extends Database{

    public function getLogin(){
             if(isset($_REQUEST['user_name']) && isset($_REQUEST["user_password"])){
                if($_REQUEST['user_name'] == 'timogo' && $_REQUEST['user_password'] == 'password'){
                    echo "PUTE";
                }
            
            }

        }
    }