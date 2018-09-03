<?php

class Validation {
    
    static function validation_inputdata($str){
        if ($check = preg_replace('/[\<\>\"\!\^\*\'\$\#\&]+/'," ", $str)) {
            return $check; 
        }
   } 
   
}

