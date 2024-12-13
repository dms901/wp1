<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Biodata</title>
    <link rel="stylesheet" href="css12.css">
</head>
<body>
     <div class="container_2">
          <h1>Biodata Dari : <?php echo $_POST['nama'] ?></h1>
    <table border="1" class="border">
       <tr>
            <td class="left-1">Nama</td>
            <td class="right-1"><?php echo $_POST['nama'] ?></td>
       </tr>
       <tr>
            <td class="left-2">Alamat</td>
            <td class="right-2"><?php echo $_POST['alamat'] ?></td>
       </tr>

       <tr>
            <td class="left-3">Tempat Lahir</td>
            <td class="right-3"><?php echo $_POST['tempat_lahir'] ?></td>
       </tr>

       <tr>
            <td class="left-4">Tanggal Lahir</td>
            <td class="right-4"><?php echo $_POST['tanggal_lahir'] ?></td>
       </tr>

       <tr>
            <td class="left-5">Jenis Kelamin</td>
            <td class="right-5"><?php echo $_POST['jeniskel'] ?></td>
       </tr>

       <tr>
            <td class="left-6">Pendidikan</td>
            <td class="right-6"><?php echo $_POST['pendidikan'] ?></td>
       </tr>

    </table>
    <a href="formbiodata.php">Go To Back</a>
    </div>
</body>
</html>