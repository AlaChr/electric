<?php
include_once ROOT.'/models/Comment.php';

class CommentsController {
    
    public function actionIndex (){
        
        $CommentItem = array();
        $CommentItem = Comment::getCommentList();
        require_once (ROOT.'/views/comment/index.php');
    }
    
    public function actionSet (){
        
        $CommentItem = array();
        $CommentItem = Comment::setComment();
        
     
        header('location:/comments');
    }
}
