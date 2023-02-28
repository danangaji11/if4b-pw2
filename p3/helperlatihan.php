<?php

    

    function getAM($kode_Am){
        $am = [
            'A' => "4",
            'A-' => "3.7",
            'B+' => "3.3",
            'B' => "3",
            'C+' => "2.7",
            'C' => "2.0",
        ];
        return $am[$kode_Am];
    }
    function getAmByHM($Hm){
        return getAM(substr($Hm,0,3 ));
    }
    function getM($am,$k){ 
        return $am * $k;
    }
    
?>