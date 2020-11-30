<?php
namespace App\Model;

use Core\Database;

class CreatedPollModel extends Database{

    public function getPoll($pollId) {
        $LastPoll = $this->query("SELECT * FROM polls WHERE poll_id = '$pollId'");
       return ($LastPoll);
    }

    public function voteAnswer1($pollId, $newPollFirstAnswerVotes) {
        $voteAnswer1 = $this->query("UPDATE polls SET poll_answer1_votes = '$newPollFirstAnswerVotes' WHERE poll_id = '$pollId'");
        return ($voteAnswer1);
    }

    public function voteAnswer2($pollId, $newPollFirstAnswerVotes) {
        $voteAnswer2 = $this->query("UPDATE polls SET poll_answer2_votes = '$newPollFirstAnswerVotes' WHERE poll_id = '$pollId'");
        return ($voteAnswer2);
    }

    public function getPollResult($pollId) {
        $getPollResult = $this->query("SELECT * FROM polls WHERE poll_id = '$pollId'");
        return ($getPollResult);
    }

    function vote($pollId, $userId){
        $whohasVoted = $this->pdo->prepare("INSERT INTO polls_answered (poll_id, user_id) 
        VALUES (?,?)");
        $whohasVoted->execute(array($pollId,$userId));
    }

    public function whohasVoted($pollId, $userId) {
        $whohasVoted = $this->query("SELECT * FROM polls_answered WHERE poll_id = '$pollId' AND user_id = $userId");
        return ($whohasVoted);
    }

    public function getFriendsList($me){
        $reqfriendList = $this->query("SELECT friend_id FROM friends WHERE user_id = '$me'");
        return ($reqfriendList);
    }
    public function getFriendsEmail($friendId){
        $getFriendsEmail = $this->query("SELECT user_email FROM users WHERE user_id = '$friendId'");
        return ($getFriendsEmail);
    }

    public function getUserName($userId){
        $getUserName = $this->query("SELECT user_name FROM users WHERE user_id = '$userId'");
        return ($getUserName);
    }


    public function sendMessage($pollId, $userId, $userName, $message){
        $sendMessageContent = $this->pdo->query("INSERT INTO messages (message_content, user_id, user_name, poll_id)
        VALUES ('$message', '$userId', '$userName', '$pollId')"); 
    }

    public function getMessages($pollId){
        $getMessages = $this->query("SELECT * FROM messages WHERE poll_id = '$pollId' ORDER BY message_date DESC");
        return ($getMessages);
    }
    

}
