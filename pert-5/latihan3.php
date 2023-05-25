<?php 
    $datamahasiswa = ["Nama", "NIM", "Jurusan", "email"];
    $mahasiswa = [
        ["Affal", "1271468341", "Informatika", "email@email.com"],
        ["Pytzch", "1271468342", "Informatika", "email@email.com"],
        ["Kryzoverski", "1271468343", "Informatika", "email@email.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $mhs) : ?>
            <ul>
                <?php for($i = 0; $i < count($mhs); $i++) : ?>
                    <li> <?php echo $datamahasiswa[$i] . " : " . $mhs[$i]; ?> </li>
                <?php endfor ?>
        </ul>
    <?php endforeach ?>
    
</body>
</html>