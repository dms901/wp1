<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="green">
    <form action="tampilanmhs.php" method="post">
        Nama :
        <input type="text" name="nama" id="" size="30"><br>
        Alamat :
        <input type="text" name="alamat" id="" size="30"><br>

        Jenis Kelmin :
        <input type="radio" name="jeniskel" id="" value="Laki - Laki"> Laki - Laki
        <input type="radio" name="jeniskel" id="" value="Perempuan">perempuan <br>

        Pekerjaan :
        <select name="Pekerjaan" id="">
            <option value="Pelajar">Pelajar</option>
            <option value="Petani">Petani</option>
            <option value="TNI">TNI</option>
            <option value="Guru">Guru</option>
        </select><br>

        Hobi :
        <input type="checkbox" name="hobi1" id="" value="olahraga">Olahraga
        <input type="checkbox" name="hobi2" id="" value="musik">Musik
        <input type="checkbox" name="hobi3" id="" value="jalan-janlan">Jalan - Jalan <br>
        
       <input type="submit" value="kirim">
    </form>
    
</body>
</html>