<!-- 
    
    PERTEMUAN 3
    CONTROL FLOW

-->

<!-- PENGULANGAN -->
<!-- for, while, do.. while, foreach -->

    <!-- 1. for -->
        <?php

            for( $i = 0; $i < 5; $i++ ){
                echo "hello world <br>";
            }
            echo "<br>";
        ?>
        
    <!-- 2. while -->
        <?php

            $i = 0;
            while ($i < 5) {
                echo "hello world <br>";
                $i++;
            }
            echo "<br>";
        ?>

    <!-- 2. do while -->
        <?php

            $i = 0;
            do {
                echo "hello world <br>";
                $i++;
            } while ($i < 5);
            
            echo "<br>";
        ?>

<!-- LATIHAN 1 -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <table border="1" cellpadding="10" cellspacing="0">
            <?php
                for($i = 1; $i <= 4; $i++){
                    echo "<tr>";
                    for($j = 1; $j <= 5; $j++){
                        echo "<td>$i , $j</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        
        <br>

        <table border="1" cellpadding="10" cellspacing="0">
            <?php for($i = 1; $i <= 4; $i++) : ?>
                <tr>
                    <?php for($j = 1; $j <= 5; $j++) : ?>
                        <td><?= "$i , $j";?></td>    
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

    </body>
    </html>

    <br>

<!-- PERCABANGAN -->
    <!-- 1. if else -->

        <?php 
            $x = 10;
            if( $x < 20 ){
                echo "Benar";
            }
            elseif( $x == 20 ){
                echo "sama";
            }
            else{
                echo "salah";
            }
        ?>

        <!-- latihan -->
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <style>
                    .warna-baris{
                        background-color: silver;
                    }
                </style>
            </head>
            <body>
                <table border="1" cellpadding="10" cellspacing="0">
                    <?php for($i = 1; $i <= 4; $i++) : ?>
                        <?php if($i % 2 == 1) : ?>
                            <tr class="warna-baris">
                        <?php else : ?>
                            <tr>
                        <?php endif; ?>
                            <?php for($j = 1; $j <= 5; $j++) : ?>
                                <td><?= "$i , $j";?></td>    
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </table>
            </body>
        </html>