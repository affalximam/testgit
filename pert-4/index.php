<!-- 

    PERTEMUAN 4
    FUNCTION

-->

<!-- DATE dan TIME-->

    <?php 

        // menampilkan tanggal dengan format tertentu
        echo date("l, d-M-Y");

        echo "<br>";

        // UNIX TIMESTAMP / EPOCH TIME (DETIK YANG BERLAKU SEJAK 1 JANUARI 1970)
        echo time();
        
        echo "<br>";

        // MENGHITUNG HARI APA
        $waktu_dua = 60*60*24*1;
        echo date("l d M Y", time() - $waktu_dua);
        
        echo "<br>";

        // MEMBUAT SENDIRI DETIK (jam, menit, detik, bulan, tanggal, tahun)
        // mktime(0,0,0,0,0,0)

        echo date("l", mktime(0,0,0,17, 11, 2004));
        
        echo "<br>";

        // strtotime
        echo date("l", strtotime("17 now 2004"));

    ?>

<!-- STRING  -->