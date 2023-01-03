<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <td>NAMA MAHASISWA</td>
            <td>NIM</td>
            <td>ALAMAT</td>
        </tr>

        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nim']?></td>
                <td><?= $mhs['alamat']?></td>
            </tr>

        <?php endforeach; ?>

    </table>


  
</body>
</html>