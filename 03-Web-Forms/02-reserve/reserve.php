<?php
        // BACK-END part
        // 1. Get Form Data
        //var_dump($_POST) ;
        // controller : responsible for business logic(algorithm part)
        extract($_POST);
        
        $base = [1000, 700];
        $mult = [1.5, 1.0] ;
        
        $str_type = ["Full Board", "Half Board"];
        $str_season = [ "Hot Season", "Normal"] ;
        // $season and $type = 0 or 1
        
        $price = $base[$type] * $mult[$season] ;
        $price += isset($flight) ? 150 : 0 ;
        $price *= $count ;
        //var_dump($price);
        
		// FRONT-END part
        // view: responsible for creating html codes by using php variables 
        require_once 'view-reserve-result.php' ;
    
