<?php
namespace App\Model;

use Core\Database;

class SignUpModel extends Database{

    public function createAccount(){
        if(isset($_POST["submit_signUp"])){
            // username pas vide :
            if(!empty($_POST['username'])){
                // Email pas vide :
                if(!empty($_POST['mail'])){
                    // Password pas vide
                    if(!empty($_POST['pass'])){
                        // password identique ?
                        if($_POST['pass'] == $_POST['confirmPass']){
                            // On prépare la requête
                            $signUp = $this->pdo->prepare("INSERT INTO users (user_name, user_email, user_password) 
                            VALUES (?,?,?)");
                            //   Insertion des données dans la table users de la bdd
                            $signUp->execute(array($_POST['username'],$_POST['mail'],$_POST['pass']));
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
    }
}