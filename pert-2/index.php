<!-- 

    SINTAKS PHP
    PERTEMUAN 2

-->

<!-- Standar Output -->
    <?php

        echo "Affalximam ";
        echo "<br>";

        print "Affalximam ";
        echo "<br>";

        print_r ("Affalximam ");
        echo "<br>";

        var_dump("Affalximam ");
        echo "<br>";


    ?>
    
<!-- Penulisan sintaks PHP -->
    <!-- 1. PHP di dalam html -->

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1> <?php echo "1. PHP di dalam html"; ?> </h1>
        </body>
        </html>

    <!-- 2. HTML didalam PHP -->
    <?php

        echo "<h1> 2. HTML didalam PHP </h1>";

    ?>

<!-- Variable  dan Tipe Data-->

    <?php

        $nama = "affalximam";

    ?>

    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1> <?php echo "Hallo! saya $nama"; ?> </h1>
        </body>
    </html>

<!-- Operator -->
    <!-- 1. Aritmatika (+-*/) -->
        <?php

            $x1 = 1;
            $y1 = 10;
            $xplusy = $x1 + $y1;
            echo "$x1 + $y1 = $xplusy";

            echo "<br>";

        ?>

    <br>
    
    <!-- 2. Penggabung string / concat (.) -->
        <?php

            $nama_depan1 = "Imam";
            $nama_belakang1 = "Nurfalah";
            echo $nama_depan1 . " " . $nama_belakang1;
        
            echo "<br>";
            
        ?>

    <!-- 3. Assignment / Penugasan -->
    <!--    =, +=, *=, /=, %=, .= -->
        <?php

            $x2 = 1;
            $x2 *= 5;
            echo "$x2";

            echo "<br>";

            $nama_depan2 = "Imam";
            $nama_depan2 .= " ";
            $nama_depan2 .= "Nurfalah";
            echo $nama_depan2;

            echo "<br>";
        ?>

    <!-- 4. Perbandingan -->
    <!-- <, >, <=, >=, == -->
        <?php

            var_dump(1 > 5);
            echo "<br>";

        ?>

    <!-- 5. Identitas -->
    <!-- ===, !=== -->
        <?php

            var_dump(1 !== "1");
            echo "<br>";

        ?>

    <!-- 6. logika -->
    <!-- %%, ||, ! -->
        <?php

            $x3 = 30;

            // And
            var_dump($x3 < 20 && $x3 % 2 == 0);
            echo "<br>";

            // or
            var_dump($x3 < 20 || $x3 % 2 == 0);
            echo "<br>";

            // not
            var_dump( ! $x3);

        ?>