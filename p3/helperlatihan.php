<?php

    function getAM($kode_Am){
        $am = [
            'A' => "4",
            'A-' => "3.7",
            'B+' => "3.3",
            'B' => "3",
            'C+' => "2.7",
            'C' => "2.0",
            'D' => "1.0"
        ];
        return $am[$kode_Am];
    }
    function getAmByHM($Hm){
        return getAM(substr($Hm,0,3 ));
    }
    function getM($am,$k){ 
        return $am * $k;
    }

    function getIPK($total_m,$total_k)
    {
        return number_format(($total_m / $total_k),2) 
        ;
    }

    function getPredikatKelulusan($IPK, $arraynilai){

        $adaD = false;
        foreach($arraynilai as $data){
            if($data['Hm']=="D"){
                $adaD = true;
            }
        }

        if($IPK>= 2.50 && $IPK <= 2.75){
            return $predikat = "Lulus";
        }elseif($IPK >= 2.76 && $IPK <= 3.00){
            return $predikat = "Memuaskan";
        }elseif($IPK>=3.01 && $IPK <= 3.50){
            return $predikat = "Sangat Memuaskan";
        }elseif($IPK>=3.51 && $IPK <= 4.00){
            if($adaD==true){
                $predikat = "Sangat Memuaskan";
            } 
            else{
                return $predikat = "Dengan Pujian";
            }
        }
    }
    
?>