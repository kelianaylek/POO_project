<?php
namespace App\Model;

use Core\Database;

class MainModel extends Database{

    
    public function getAllUserPolls(){
        $myPolls = $_SESSION['id'];
        $reqAllPolls = $this->query("SELECT * FROM polls WHERE accepted_id = '$myPolls' ORDER BY poll_id DESC ");
        return ($reqAllPolls);
    }

    public function getUserName($userId){
        $reqUserName = $this->query("SELECT * FROM users WHERE user_id = '$userId'");
        return ($reqUserName);
    }

    public function friendsIdList($me){
        $reqfriendsId = $this->query("SELECT friend_id FROM friends WHERE user_id = '$me'");
        return ($reqfriendsId);
    }

    public function friendName($friendId){
        $reqCurrentFriendName = $this->query("SELECT user_name FROM users WHERE user_id = '$friendId'");
        return ($reqCurrentFriendName);
    }

    public function currentFriendsPolls($friendId){
        $reqCurrentFriendsPolls = $this->query("SELECT * FROM polls WHERE accepted_id = '$friendId'");
        return ($reqCurrentFriendsPolls);
    }

}
