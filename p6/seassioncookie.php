<?php
     session_start();
    if (isset($_POST['npm'])) {
        $_SESSION['npm'] = $_POST['npm'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['npm'])) {
            echo "Nilai session saat ini : ".$_SESSION['npm'];
        }
    ?>
    <form action="" method="POST">
        NPM : <input type="text" name="npm">
        <input type="submit" value="submit">
    </form>
    <a href="sessioncookie2.php">Lanjut mas</a>
</body>
</html>