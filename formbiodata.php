<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 6 Form Biodata</title>
    <link rel="stylesheet" href="css12.css">
</head>
<body class="formbiodata">
<div class="container">
<h1>Form Registrasi </h1><br>

<form action="tampilbiodata.php" method="post" class="form">
   <table class="table">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id="" size="40"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" id="" cols="38" rows="5"></textarea></td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir" id=""></td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tanggal_lahir" id=""></td>
    </tr>
    
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jeniskel" id="" value="Laki - Laki">Laki - Laki
        <input type="radio" name="jeniskel" id="" value="Perempuan" >Perempuan</td>
    </tr>

    <tr>
        <td>Pendidikan</td>
        <td>
            <select name="pendidikan" id="">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="SMK/SMA">SMK/SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
            </select>
         </td>
    </tr>

    <tr>
        <td>
            <button class="btn-1">
                <input class="submit" type="submit" value="Submit">
            </button>
            <button class="btn-2" >
                <input class="reset" type="reset" value="Cencel">
            </button>
        </td>
    </tr>
   </table>
  </form>
  </div>
</body>
</html>