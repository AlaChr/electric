<?php
class Price {
    public static function getPriceList() 
    {
        
        $can = DB::connectDB();
        
        $statement = 'SELECT * FROM elc_price;';
        $res = $can->query($statement);
        $result = $res->fetchAll(PDO::FETCH_ASSOC);
                
        return $result;
    }
    
}
