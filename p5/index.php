<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap- 
datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512- 
GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFai
oypzbDOQykoRg==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Form Registerasi</h2>
                <form action="proses.php"method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number"
                        class=" form-control"
                        name="nis">
                    </div>
                    <!-- -->
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text"
                        class=" form-control"
                        name="nama">
                    </div>
                    <div class="form-group">
                        <p>Jenis Kelamin
                            <br>
                            <input type="radio" id="Laki-laki" name="jeniskelamin" value="Laki-Laki">
                            <label for="child">Laki-Laki</label><br>
                            <input type="radio" id="laki-laki" name="jeniskelamin" value="perempuan">
                            <label for="adult">Perempuan</label><br>
                        </p>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="Kota_lahir">
                        <option selected>Kota Lahir</option>
                        <option value="1">kota Palembang</option>
                        <option value="2">Pali</option>
                        <option value="3">Linggau</option>
                    </select>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date"
                        class=" form-control"
                        name="Tanggal-lahir">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file"
                        class=" form-control"
                        name="foto" accept="image/png, image/jpeg">
                    </div>
                    <button type="submit"
                    class="btn btn-primary mt-3">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>