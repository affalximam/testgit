<!-- 

    Melakukan pengulangan pada array

-->

<?php 

    $angka = [1,121,43,12,4,64];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 100px;
            height: 100px;
            background-color: salmon;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>

    <!-- FOR -->
    <?php for ($i=0; $i < count($angka); $i++) { ?>
        <div class="kotak">
            <?php
                echo $angka[$i];
            ?>
        </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- FOREACH -->
    <?php foreach( $angka as $a  ) { ?>
        <div class="kotak">
            <?php 
                echo $a;
            ?>
        </div>
    <?php } ?>

        <div class="clear"></div>

    <?php foreach( $angka as $a  ) : ?>
        <div class="kotak">
            <?php 
                echo $a;
            ?>
        </div>
    <?php endforeach ?>


</body>
</html>