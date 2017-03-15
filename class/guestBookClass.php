<?php

include("admin/class/comment_adminClass.php");

class guestBook_View extends guestBook{
    
    public function getAllEntries(){
        $comment_list = $this->commentList();
        
        $arrayCommentData = array();
        $arrayComments = array();
        
        foreach($comment_list as $comment){
            array_push($arrayCommentData, $comment['visitor_name']);
            array_push($arrayCommentData, $comment['comment']);
            array_push($arrayCommentData, $comment['subject']);
            
            array_push($arrayComments, $arrayCommentData);
        }
        return $arrayComments;
    }
    
    /******** Validate Input Characters ********/
    /*
     * generateRandomLetter() method is used to generate a random letter
     * of either casing to be used as user input validation
     * this number will be mixed with letters from the generateRandomeNumber()
     * function to create an alphanumeric character to validate the user
     */
    public function generateRandomLetter(){
        $int = rand(0,51);
        $a_z = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $rand_letter = $a_z[$int];
        return $rand_letter;
    }
    
    /*
     * generateRandomNumber() method is used to generate a random 3 digit number
     * this number will be mixed with letters from the generateRandomeLetter()
     * function to create an alphanumeric character to validate the user
     */ 
    public function generateRandomNumber(){
        $randNumber = rand(0,999);
        return $randNumber;
    }
    
    /*
     * generateAlphaNumValidation() is used to verify the user is a valid visitor
     * and not a bot
     */
    public function generateAlphaNumValidation(){
        $validation = $this->generateRandomNumber();
        $validation .= $this->generateRandomLetter();
        $validation .= $this->generateRandomNumber();
        $validation .= $this->generateRandomLetter();
        return $validation;   
    }
    
    public function insertComment($visitor_name, $subject, $comment){
        $query = "INSERT INTO comments (`comment_id` ,`visitor_name` ,`subject` ,`comment`)
                  VALUES (NULL , '$visitor_name', '$subject', '$comment')";
        
        //echo $query . "<br>";
        
        $results = mysql_query($query)or die(mysql_error());
        
        if($results){
            return true;
        }
        else {
            return false;
        }
    }
}

?>