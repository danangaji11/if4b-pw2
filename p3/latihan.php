<?php

    
    require("helperlatihan.php");
    $Latihan = [
        [
            "no" =>1,
            "matakuliah" => "Matematika Diskrit",
            "Kode-Matakuliah"=>"I207",
            "Hm"=>"B+",
            "k"=>4,
        ],
        [
            "no" =>2,
            "matakuliah" => "Basis Data 1",
            "Kode-Matakuliah"=>"if1213",
            "Hm"=>"B",
            "k"=>4,   
        ],
        [
            "no" =>3,
            "matakuliah" => "Pemrograman Web 1",
            "Kode-Matakuliah"=>"IF0012",
            "Hm"=>"D",
            "k"=>3,
        ],
        [
            "no" =>4,
            "matakuliah" => "Paket Program Niaga",
            "Kode-Matakuliah"=>"I1106",
            "Hm"=>"A",
            "k"=>2,   
        ],
        [
            "no" =>5,
            "matakuliah" => "Bahasa Inggris",
            "Kode-Matakuliah"=>"R0001",
            "Hm"=>"A",
            "k"=>2,
        ]
        ];

    echo "Latihan Ahmad Rizky";

    echo"<table border=1>
    <tr>
            <th rowspan=2>No</th>
            <th rowspan=2>MataKuliah</th>
            <th rowspan=2>Kode Mata Kuliah</th>
            <th colspan=4>Prestasi</th>

    </tr>";
    echo"<tr>
            <td>HM</td>
            <td>AM</td>
            <td>K</td>
            <td>M</td>
    </tr>";
    
    $total_k = 0; $total_m = 0;

    foreach($Latihan as $data){
        $total_k += $data['k']; // total_k = $total_k + $data['k'];
        $total_m += getM(getAmByHM($data['Hm']),$data['k']);
        echo "<tr>
            <td>".$data['no']."</td>
            <td>".$data['matakuliah']."</td>
            <td>".$data['Kode-Matakuliah']."</td>
            <td>".$data['Hm']."</td>
            <td>".getAmByHM($data['Hm'])."</td>
            <td>".$data['k']."</td>
            <td>".getM(getAmByHM($data['Hm']),$data['k'])."</td>

            </tr>";
    }  

    echo "<tr>
    <td colspan = '5'>JUMLAH</td>
    <td>".$total_k."</td>
    <td>".$total_m."</td>
    </tr>";
    
    echo "<tr>
    <td colspan = '5'>IPK</td>
    <td colspan ='2'>".getIPK($total_m,$total_k)."</td>
    </tr>";

    echo "<tr>
    <td colspan = '5'>Predikat</td>
    <td colspan ='2'>".getPredikatKelulusan
    (getIPK($total_m,$total_k),$Latihan)."</td>
    </tr>";


    echo"</table>";
    ?>