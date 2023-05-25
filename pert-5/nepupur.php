<?php 
    $data = ["Peran", "Tahun"];
    $daftarperan = [
        ["Mampu menjalankan perah Hokage pertama yaitu raja So Hard 1", "150JT Tahun SM"],
        ["Pertumbuhan penduduk generasi emas", "150JT Tahun SM"],
        ["Memperkaya Rakyat dan membuat rakyat makmur", "150JT Tahun SM"],
        ["Menjaga Desa melebihi sebuah raja", "150JT Tahun SM"],
        ["Menjadikan HAM di Nepupur paling baik di dunia", "150JT Tahun SM"],
        ["Mampu Meobohkan gedung tempat bandar narkoba", "150JT Tahun SM"],
        ["Selalu menghormati jasa pahlawan kemerdekaan", "150JT Tahun SM"],
        ["Memberikan kebebasan kepada pahlawan kemerdekaan", "150JT Tahun SM"],
        ["Melakukan penghijauan hutan bekas medan perang", "150JT Tahun SM"],
        ["Berhasil membuat Uang Yang Maha Kuasa Menjadi Tuhan Yang Maha Esa ", "150JT Tahun SM"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar 10 Dosa Besar king So Hard 2</title>
    <style>
        li{
            list-style: symbols(-);
        }
    </style>
</head>
<body>

    <h1>Daftar 10 Peran penting Raja So Hard 2 dalam Serial film Nepupur</h1>
    <?php foreach($daftarperan as $peran) : ?>
        <ul>
            <?php for($i = 0; $i < count($peran); $i++) : ?>
                <li> <?php echo $data[$i] . " : " . $peran[$i]; ?> </li>
            <?php endfor ?>
        </ul>
    <?php endforeach ?>
    
</body>
</html>