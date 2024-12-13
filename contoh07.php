<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh07</title>
</head>
<body>
    <?php 
    //Konstata untuk nilai judul
    define("Judul","Hitung Luas Lingkaran");

    //konstata untuk nilai phi
    define("PHI","3.14");

    $r = 10;
    $luas = PHI*$r*$r;

     ?>
     <pre>
        <?= Judul ?><br>
        Jari - Jari = <?= $r ?><br>
        Luas = <?= $luas ?>

     </pre>
</body>
</html>