<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 04 Pertemuan 7</title>
    <link rel="stylesheet" href="stlye_t4.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="t4_tampilan_output.php" method="post">
                <table class="table">
                   <tr>
                    <td colspan="2" class="judul">Silahkan Input Data</td>
                   </tr>

                   <tr>
                    <td>Nilai 1</td>
                    <td><input type="text" name="nilai1" id="" size="30"></td>
                   </tr>

                   <tr>
                    <td>Nilai 2</td>
                    <td><input type="text" name="nilai2" id="" size="30"></td>
                   </tr>

                   <tr>
                        <td colspan="2">
                             <input type="radio" name="rumus" id="" value="Keliling Jajar Genjang">Jajar Genjang
                             <input type="radio" name="rumus" id="" value="Keliling Layang-Layang">Layang - Layang
                        </td>
                   </tr>
                </table>

                <div class="btn">
                    <input type="submit" value="Kirim" class="btn1">
                    <input type="reset" value="Cencel" class="btn2">
                </div>
            </form>
        </div>
    </div>
</body>
</html>