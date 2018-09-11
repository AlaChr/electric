<?php
include_once ROOT.'/models/Price.php';

class PriceController {
    
    public function actionIndex (){
        
     //   $PriceItem = array();
     //   $PriceItem = Price::getPriceList();
     
        require_once (ROOT.'/views/price/index.php');
    
    
    }
                    
}
