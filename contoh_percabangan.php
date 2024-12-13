<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Percabangan HTML</title>
</head>
<body>
    <?php 
    $nilai = 60;
    if($nilai >= 60){
        echo"Nilai Anda = $nilai. Selamat Anda Lulus!";
    }else{
        echo"Nilai Anda = $nilai. Maaf, Anda Tidak Lulus!";
    }
    ?>
</body>
</html>