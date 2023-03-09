<?php
    require("helper.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // echo $_POST['nis'];
        // echo "<br>";
        // echo $_POST['nama'];
        // echo "<br>";
        // echo $_POST['jeniskelamin'];
        //  echo "<br>";
        // echo $_POST['Kota_lahir'];
        //  echo "<br>";
        // echo $_POST['Tanggal-lahir'];
        //  echo "<br>";
        // echo $_POST['foto']; 
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jeniskelamin'];
        $kota_lahir = $_POST['Kota_lahir'];
        $tanggal_lahir = $_POST['Tanggal-lahir'];
        $foto = $_FILES['foto'];

        // echo $nis."<br>";
        // echo $nama."<br>";
        // echo $jk."<br>";
        // echo $kota_lahir."<br>";
        // echo $tanggal_lahir."<br>";
        // var_dump($foto);


        $temp = explode(".", $_FILES["foto"]["name"]);
        $newfilename = $nis . '.' . end($temp);
        move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $newfilename);
        $newfilename2 = "uploads/".$newfilename;

    }else{
        echo "Silahkan isi form terlebih dahulu";   
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
   <table class="table">
  <thead>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nis </th>
      <td>:
            <?php echo $nis ?>
      </td>
      <td rowspan="5"><img src=<?php echo $newfilename2?> width="200px" alt=""</td>
    </tr>
    <tr>
      <th scope="row">Nama Siswa</th>
      <td>:
            <?php echo $nama; ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td>:
        <?php echo $jk;?>
      </td>
    </tr>
    <tr>
      <th scope="row">Kota Lahir</th>
      <td>:
        <?php echo $kota_lahir;?>
      </td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td>:
        <?php
       
        echo getyConvertTgl($tanggal_lahir);?>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>