<?php
namespace App\Model;

use Core\Database;

class SignUpModel extends Database{
    // Creation of the account 
    public function reqCreateAccount($userName, $userMail,$userPassword){
        $signUp = $this->prepare("INSERT INTO users (user_name, user_email, user_password) 
            VALUES ('$userName','$userMail','$userPassword')");
    }
}