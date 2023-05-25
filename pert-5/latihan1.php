<!-- 

    PERTEMUAN 5
    ARRAY
    ARRAY adalah sebuah variable yang memuat banyak nilai

-->

<?php

    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // Cara Baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "teks", false];

    // Menampilkan Array
    // var-dump / print_r
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    
    // Menampilkan satu element
    echo $arr1[1];
    echo "<br>";
    
    // menambahkan element baru
    var_dump($hari);
    $hari[] = "Kamis";
    var_dump($hari);
    

?>