<?php
namespace App\Model;

use Core\Database;

class FriendsModel extends Database{



    public function usersList($me){
        $reqAllUsers = $this->query("SELECT * FROM users WHERE user_id != '$me'");
        return ($reqAllUsers);
    }

    public function findFriendId($friendChoosen){
        $findFriendId = $this->query("SELECT user_id FROM users WHERE user_name = '$friendChoosen'");
        return ($findFriendId);
    }

    public function addFriend($myId, $friendId){
        $addFriend = $this->prepare("INSERT INTO friends (user_id, friend_id) 
        VALUES ('$myId','$friendId')");
    }

    public function friendsList($me){
        $reqfriendList = $this->query("SELECT * FROM friends WHERE user_id = '$me'");
        return ($reqfriendList);
    }

    public function findFriendName($friendId){
        $reqfindFriendname = $this->query("SELECT user_name FROM users WHERE user_id = '$friendId'");
        return ($reqfindFriendname);
    }

    public function SupprFriend($userId, $friendId){
        $reqSupprFriend = $this->query("DELETE FROM friends WHERE user_id = '$userId' AND friend_id = '$friendId'");
        return ($reqSupprFriend);
    }

    public function onlineFriends($userId, $currentFriend){
        $reqOnlineFriends = $this->query("SELECT user_name FROM users WHERE user_id ='$currentFriend' AND user_isOnline = 1");
        return ($reqOnlineFriends);
    }




}
