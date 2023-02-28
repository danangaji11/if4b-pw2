<?php
    $Latihan = [
        [
            "no" =>1,
            "matakuliah" => "Logika Informatika",
            "Kode-Matakuliah"=>"I108",
            "Hm"=>"A",
            "Am"=>"4.00",
            "k"=>2,
            "m"=>8,
        ],
        [
            "no" =>2,
            "matakuliah" => "Pemrograman Aplikasi Bergerak 1",
            "Kode-Matakuliah"=>"IF0018",
            "Hm"=>"A",
            "Am"=>"4.00",
            "k"=>3,
            "m"=>12,   
        ],
        [
            "no" =>3,
            "matakuliah" => "Pemrograman Web 1",
            "Kode-Matakuliah"=>"IF0012",
            "Hm"=>"A",
            "Am"=>"4.00",
            "k"=>3,
            "m"=>12,
        ],
        [
            "no" =>4,
            "matakuliah" => "Paket Program Niaga",
            "Kode-Matakuliah"=>"I1106",
            "Hm"=>"A",
            "Am"=>"3.70",
            "k"=>2,
            "m"=>7,4,   
        ],
        [
            "no" =>5,
            "matakuliah" => "Bahasa Inggris",
            "Kode-Matakuliah"=>"R0001",
            "Hm"=>"A",
            "Am"=>"3.70",
            "k"=>2,
            "m"=>7.4,
        ]
        ];

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
            <td>".$data['kode-matakuliah']."</td>
            <td>".$data['Hm']."</td>
            <td>".$data['Am']."</td>
            <td>".$data['M']."</td>

            </tr>";
    }  
    echo"</table>";
    ?>
