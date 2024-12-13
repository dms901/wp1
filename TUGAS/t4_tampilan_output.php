<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil hitung</title>
    <link rel="stylesheet" href="stlye_t4.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <table class="table-output">
                <?php 
                
                $nilai1=$_POST['nilai1'];
                $nilai2=$_POST['nilai2'];

                if(($nilai1 and $nilai2) > 0 or $nilai1 > 0 or $nilai2 >0){//Memastikan jika nilai1 dan nilai2 tidak 0 atau jika salah 1 tidak 0
                    $rumus = $_POST['rumus'];

                    if($rumus == 'Keliling Jajar Genjang'){

                        $rumus_pilihan = 'K = 2(a+b)';
                        $keliling = $nilai1 * 2 + $nilai2 * 2;
                        $hasil = $keliling;
                    }elseif($rumus == 'Keliling Layang-Layang'){
                        $rumus_pilihan = 'P = 2(a+b)';
                        $keliling = $nilai1 * 2 + $nilai2 * 2;
                        $hasil = $keliling;
                    }
                       
                
                }elseif(($nilai1 and $nilai2) <= 0 or $nilai1 <= 0 or $nilai2 <= 0){//Memastikan jika nilai1 dan nilai2 0 atau jika salah 1 nilai 0
                   

                    if(isset( $_POST['rumus'])== 'Keliling Jajar Genjang'){
                        $rumus = $_POST['rumus'];
                        $rumus_pilihan = 'K = 2(a+b)';
                        $keliling = 'Tidak ada';
                        $hasil = $keliling;
                    }elseif(isset( $_POST['rumus'])== 'Keliling Layang-Layang'){
                        $rumus = $_POST['rumus'];
                        $rumus_pilihan = 'P = 2(a+b)';
                        $keliling = 'Tidak ada';
                        $hasil = $keliling;
                    }
                    elseif(empty( $_POST['rumus'])){
                    $rumus_pilihan = 'Tidak Ada Rumus Yang Dipilih';
                    $rumus = $rumus_pilihan;
                    $keliling = 'Tidak ada';
                    $hasil = $keliling;
                    }
                }
                ?>

                <tr>
                    <td>
                        <h1>HASIL HITUNG RUMUS</h1><br><br>
                            Rumus Yang Dipilih Adalah : <?php echo $rumus ?><br>
                            Rumus : <?php echo $rumus_pilihan ?><br>
                            Nilai a Adalah = <?php echo $nilai1 ?><br>
                            Nilai b Adalah = <?php echo $nilai2 ?><br>
                            Hasil Hitung Rumus = <?php echo $hasil ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>