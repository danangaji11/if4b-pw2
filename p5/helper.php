<?php

    function getyConvertTgl($date){
        $new_date = date('d-m-Y', strtotime($date));
        return $new_date;
    }

    function getbulan($kodebulan){
    $bulan = [
            '1' => "Januari",
            '2' => "Februari",
            '3' => "Maret",
            '4' => "April",
            '5' => "mei",
            '6' => "Juni",
            '7' => "Juli",
            '8' => "Agustus",
            '9' => "September",
            '10' => "Oktober",
            '11' => "November",
            '12' => "Desember",
        ];
        return $bulan[$kodebulan];
    }

    function getbulanbytanggal($tanggal){
        return getbulan(substr($tanggal,5,2));
    }
?>
