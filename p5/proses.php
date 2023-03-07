<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo $_POST['nis'];
        echo "<br>";
        echo $_POST['nama'];
        echo "<br>";
        echo $_POST['jeniskelamin'];
         echo "<br>";
        echo $_POST['Kota_lahir'];
         echo "<br>";
        echo $_POST['Tanggal-lahir'];
         echo "<br>";
        echo $_POST['foto']; 
    }else{
        echo "Silahkan isi form terlebih dahulu";   
    }
    
?>