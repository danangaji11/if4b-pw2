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
            "Hm"=>"A",
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

    echo "Latihan Ahmad rizky";

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
    
    
    foreach($Latihan as $data){
        
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
    echo"</table>";
    ?>