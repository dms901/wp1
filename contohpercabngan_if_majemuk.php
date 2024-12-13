<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Percabangan HTML</title>
</head>
<body>
    <?php 
    $nilai = 10;
    if(($nilai >= 0)&&($nilai < 50)){
        echo"Grade E";
    }elseif (($nilai >= 50)&&($nilai < 60)){
        echo"Grade D";
    }elseif (($nilai >= 60)&&($nilai < 75)){
        echo"Grade C";
    }elseif (($nilai >= 75)&&($nilai < 85)){
        echo"Grade B";
    }elseif (($nilai >= 85)&&($nilai <= 100)){
        echo"Grade A";
    }else{
        echo"Grade Nilai Diluar Jangkauan";
    }
    ?>
</body>
</html>