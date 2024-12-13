<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Keliling Jajar Genjang</title>
</head>
<body>
    <?php 
    //konstata nilai judul
    define("Judul","Hitung Keliling Jajar Genjang");

    //konstata nilai panjang jajar genjang
    define("Panjang","10");

    //konstata nilai lebar jajar genjang
    define("Lebar","15");

    $Keliling = Panjang*2 + Lebar*2;
    ?>
    <pre>
        <?=Judul ?> <br>
        Panjang Jajar Genjang   : <?=Panjang?><br>
        Lebar Jajar Genjang     : <?=Lebar ?><br>
        Rumus                   : K = 2 X P + 2 X L <br>
        Keliling                : <?=$Keliling?> 
    </pre>
</body>
</html>