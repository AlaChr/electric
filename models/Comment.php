<?php
class Comment {
    public static $can;
    public static function getCommentList() 
    {
        if (self::$can == FALSE) {
            self::$can = DB::connectDB();
        }
        $statement = 'SELECT * FROM elc_comments ORDER BY data DESC LIMIT 5;';
        $res = self::$can->query($statement);
        $result = $res->Fetchall(PDO::FETCH_ASSOC);
       
        return $result;
        
    }
    public static function setComment() 
    {
        if ($_POST){
        $nicname = $_POST['nicname'];
        $comment = $_POST['comment'];
        
        $nicname = Validation::validation_inputdata($nicname);
        $comment = Validation::validation_inputdata($comment);
        
        
        self::$can = DB::connectDB();
        $result1 = self::$can->query("INSERT INTO elc_comments VALUES (NULL,'$nicname',now(),'$comment')");
        }                
        $result = self::getCommentList();
        
        return $result; 
        }
    
}

        
